<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use DB;

class HomeController extends Controller
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

    public function grpbu()
    {
        
        $sql = "
            SELECT 0 AS urut, c1.desc des ,COUNT(*) ttl 
            FROM tbluser a1
            INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
            INNER JOIN dt_additional c1 ON c1.type = 'COMPANY' AND c1.info = a1.company
            GROUP BY c1.desc
        ";
        $grp = db::connection('mysql')->select($sql);
        $i=0;
        foreach ($grp as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        return $grp;
    }

    public function index()
    {
        $user = $this->getuser();

        if (!$user){
            return redirect()->route('logout');
        } else {
            $grpcmp = $this->grpbu();
            return view('menuutama', [
                'user' => $user,
                'perbu' => $grpcmp
            ]);
        }
        
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

    public function storeimage($image_id) {
        $image = Tbluserphoto::where('user_id', '=', $image_id)->first();
		$image_file = Image::make($image->zimage);
		$response = Response::make($image_file->encode('jpeg'));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
    }
}
