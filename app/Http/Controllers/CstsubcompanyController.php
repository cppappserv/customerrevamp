<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use DB;
                

class CstsubcompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getuser()
    {
        $user1 = Auth::user(); // tbluser::where('user_id','=','supram.maharwantijo@cpp.co.id')->first();
        $user = tbluser::where('uid','=',$user1->uid)->first();
        
        return $user;
    }

    public function datacompany($para1, $para2)
    {
        // $para1 = "FISH FEED";
        // $para2 = "12345";
        $sql = "
            SELECT a1.uid, a1.user_id customer_id, a1.fullname customer_name, c1.info4 bu, a2.fullname created_by, 
            DATE_FORMAT(a1.createddate,'%Y-%m-%d') created_dt, DATE_FORMAT(a1.createddate,'%H:%i:%s') created_time, 
            a3.fullname changed_by, 
            DATE_FORMAT(a1.updateddate,'%Y-%m-%d') changed_dt, DATE_FORMAT(a1.updateddate,'%H:%i:%s') changed_time
            FROM tbluser a1
            INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
            INNER JOIN dt_additional c1 ON c1.type = 'COMPANY' AND c1.info = a1.company
            LEFT OUTER JOIN tbluser a2 ON a1.createdby = a2.uid
            LEFT OUTER JOIN tbluser a3 ON a1.updatedby = a3.uid
            WHERE c1.info3 = '".$para1."' AND a1.company = '".$para2."'
        ";

        $sql = "
           SELECT a1.uid, a1.user_id customer_id, a1.fullname customer_name, c1.info3 bu, a2.fullname created_by, 
           DATE_FORMAT(a1.createddate,'%Y-%m-%d') created_dt, DATE_FORMAT(a1.createddate,'%H:%i:%s') created_time, 
           a3.fullname changed_by, 
           DATE_FORMAT(a1.updateddate,'%Y-%m-%d') changed_dt, DATE_FORMAT(a1.updateddate,'%H:%i:%s') changed_time
           FROM tbluser a1
           INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
           INNER JOIN dt_additional c1 ON c1.type = 'COMPANY' AND c1.info = a1.company
           LEFT OUTER JOIN tbluser a2 ON a1.createdby = a2.uid
           LEFT OUTER JOIN tbluser a3 ON a1.updatedby = a3.uid
           WHERE c1.desc = '".$para1."' AND a1.company = '".$para2."'
           and a1.inactive is null
        ";
       
        $grp = db::connection('mysql')->select($sql);
        return $grp;
        
    }

    public function index($kode, $kode2)
    {
        
        $user = $this->getuser();

        $akses_branch  = explode(", ", $user->branch);
        $akses_company = explode(", ", $user->company);
        
        $akses_delete = 'T';
        if ($user->usergroup <= 9){
            foreach ($akses_branch as $key => $value) {
                if ($value == $kode){
                    
                    foreach ($akses_company as $key2 => $value2) {
                        if ($value2 == $kode2){
                            $akses_delete = 'Y';
                            break;
                        }
                    }
                    break;
                }
            }
        }
      


      $datacmp = $this->datacompany($kode, $kode2);
      $pilcompany = $kode;
      $pilcompany2 = $kode2;
      return view('menubusub', [
          'user' => $user,
          'listdata' => $datacmp,
          'pilcompany' => $pilcompany,
          'pilcompany2' => $pilcompany2,
          'akses_delete' => $akses_delete,
          'pil_company' => $kode
      ]);

        
    }

    public function logout(Request $request)
    {
        // dd($request->session());
        // $this->guard()->logout();
        
        $request->session()->flush();
        $request->session()->regenerate();
        return view('auth.login');
 
        // return redirect('/')
        //     ->withSuccess('Terimakasih, selamat datang kembali!');
    }
}
