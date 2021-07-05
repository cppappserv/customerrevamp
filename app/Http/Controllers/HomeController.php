<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Loglogin;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\Tblobject;
use App\Models\Dtadditional;
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

    public function grpbu($users)
    {
        $akses_branch = explode(", ", $users->branch);
        $grpall =  db::table('dt_additional as a')->where('a.type', '=', 'COMPANY')
        ->select('a.desc as des', db::raw("MIN(a.seq) as urut"))
        ->groupby('a.desc')
        ->orderby(db::raw("MIN(a.seq)"), 'asc')
        ->get();

        $tblobject = Tblobject::where('objtype', '=', '7');
        $dtadditional = Dtadditional::where('type', '=', 'COMPANY');

        $grp = db::table('tbluser as a')
            ->joinsub($tblobject, 'b', function($join){
                $join->on('a.branch', '=', 'b.objname');
            })
            ->joinsub($dtadditional, 'c', function($join){
                $join->on('c.info', '=', 'a.company');
            })
            ->whereNull('a.inactive')
            ->groupby('c.desc')
            ->select('c.desc as des', db::raw("COUNT(*) as ttl") )
            ->get();

        $i=0;
        foreach ($grpall as $key => $value) {
            $i++;
            $value->urut = $i;
            $value->ttl = 0;
            $value->akses = 'T';
            foreach ($grp as $key2 => $value2) {
                if ($value->des == $value2->des){
                    $value->ttl = $value2->ttl;
                break;
                }
            }
            $value->akses = 'T';
            if ($users->usergroup <=  '9'){
                $value->akses = 'Y';
            } else {
                foreach ($akses_branch as $key2 => $value2) {
                    if ($value->des == $value2){
                        $value->akses = 'Y';
                        break;        
                    }
                }
            }
        }
        return $grpall;
    }

    public function index()
    {
        $user = $this->getuser();
        if (!$user){
            return redirect()->route('logout');
        } else {
            $grpcmp = $this->grpbu($user);
            // print $grpcmp;
            // return;
            return view('menuutama', [
                'user' => $user,
                'perbu' => $grpcmp
            ]);
        }
        
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        Auth::logout();
        return view('auth.login');
    }

    public function storeimage($image_id) {
        $image = Tbluserphoto::where('user_id', '=', $image_id)->first();
		$image_file = Image::make($image->zimage);
		$response = Response::make($image_file->encode('jpeg'));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
    }

    public function geolocation($id1, $id2) {
        $user = Auth::user();
        $log = Loglogin::where('email', '=', $user->email)
        ->whereNull('Longitude')->first();
        if ($log){
            $log->Latitude = $id1;
            $log->Longitude = $id2;
            $log->save();
        }
    }
}

