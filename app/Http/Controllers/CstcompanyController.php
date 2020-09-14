<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Tbluser;
use DB;

class CstcompanyController extends Controller
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

    public function grpcompany($para)
    {
        $sql = "
            SELECT seq urut, 0 ttl, info, CONCAT(info2,'/') des, CONCAT(info4,'') des2, CONCAT(info5,'') des3
            FROM dt_additional WHERE `type` = 'COMPANY'
                and `desc` = '".$para."' 
            ORDER BY urut
        ";
   
        $grpall = db::connection('mysql')->select($sql);

        
        
        $sql = "  
            SELECT 0 urut, c1.info, CONCAT(c1.info2,'/') des, CONCAT(c1.info4,'') des2, CONCAT(c1.info5,'') des3 ,COUNT(*) ttl 
            FROM tbluser a1 
            INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname 
            INNER JOIN dt_additional c1 ON c1.type = 'COMPANY' 
        AND c1.info = a1.company 
        AND c1.desc = '".$para."'
        where a1.inactive is null
        GROUP BY c1.desc, c1.info, c1.info2, c1.info4, c1.info5";
        // dd($sql);
        $grp = db::connection('mysql')->select($sql);
        // dd($grpall);
        $i=0;
        foreach ($grpall as $key => $value) {
            $i++;
            $value->urut = $i;
            foreach ($grp as $key2 => $value2) {
                if ($value->info == $value2->info){
                    $value->ttl = $value2->ttl;
                break;
                }
            }
        }
        // dd($grpall);
        return $grpall;

        // $i=0;
        // foreach ($grp as $key => $value) {
        //     $i++;
        //     $value->urut = $i;
        // }
        // return $grp;
    }

    public function index($kode)
    {
      $user = $this->getuser();
      $grpcmp = $this->grpcompany($kode);
      $pilcompany = $kode;
      return view('menubu', [
          'user' => $user,
          'percompany' => $grpcmp,
          'pilcompany' => $pilcompany
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
