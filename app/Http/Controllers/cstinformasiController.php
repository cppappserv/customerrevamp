<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\User;
use App\Models\kodepost;
use App\Models\Usrprofile;
use App\Models\Usradditional;
use App\Models\Dtadditional;
use App\Models\Tblgroupuser;
use App\Models\Tblobject;
use App\Models\Tbluserphoto;
use App\Models\Zbranch;
use App\Models\Usrupload;
use DB;

class CstinformasiController extends Controller
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
    public function listuserpassword(){
      $grp = Tbluser::where('email','LIKE', '%@cpp.co.id')->get();
      // $sql = "
      //     select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 'administrator' usertype, 'jakarta' userarea, '1234' userpassword  union
      //     select '2' urut, 'supram2.maharwantijo@cpp.co.id' userid, 'user' usertype, 'jakarta' userarea, '1234' userpassword
      // ";
      // $grp = db::connection('mysql')->select($sql);
      return $grp;
    }
    public function listuserpasswordedit(){
      $sql = "
          select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 'administrator' usertype, 'jakarta' userarea, '1234' userpassword, '1234' userrepassword
      ";
      $grp = db::connection('mysql')->select($sql);
      return $grp;
    }
    public function listcompany(){
      $data = Dtadditional::where('type','=','COMPANY')
      ->select('info2 AS infox','info')->get();
      return $data;
    }
    public function listuserstatus(){
      $sql = "
          select '1' urut, 'administrator' tblstatus  union
          select '2' urut, 'user' tblstatus
      ";
      $grp = db::connection('mysql')->select($sql);
      return $grp;
    }
    public function listuserarea(){
      $sql = "
          select '1' urut, 'jakarta' tblarea union
          select '2' urut, 'jawa barat' tblarea
      ";
      $grp = db::connection('mysql')->select($sql);
      return $grp;
    }
    public function index()
    {
      $user = $this->getuser();
      $listuser = $this->listuserpassword();
      $listuseredit = $this->listuserpasswordedit();
      $listgroup = Tblgroupuser::wherein('idusergroup',['1','9'])->get();
      $tblobject = Tblobject::where('objtype','=','7')->get();

      // dd($listuser);
      $listcompany = $this->listcompany();
      $liststatus = $this->listuserstatus();
      $listarea = $this->listuserarea();
      return view('menuinformasi',[
          'user' => $user,
          'listuser' => $listuser,
          'liststatus' => $liststatus,
          'listarea' => $listarea,
          'listcompany' => $listcompany,
          'listuseredit' => $listuseredit,
          'listgroup' => $listgroup,
          'tblobject' => $tblobject

      ]);
    }    

    public function infosave(Request $request){
      // dd($request->all());
      
      if ($request->inputbaris == "" or $request->inputbaris == "0"){
          $this->validate($request, [
              'inputuserid'      => ['required'],
              'inputusertype'    => ['required'],
              'inputuserarea'    => ['required'],
              'inputuserpass'    => ['required'],
              'inputuserrepass'  => ['required'],
              'inputusercompany' => ['required'],
          ]);
          $baru = 1;
          


          $tbluser = new Tbluser;
          $nama = explode( '@', $request->inputuserid );
          $tbluser->fullname = $nama[0];
          if ($nama[1] <> 'cpp.co.id'){
            $baru = 0;
          }
      } else {
          $baru = 0;
          $tbluser = Tbluser::where('uid','=',$request->inputuid)->first();
      }
      
      $tbluser->user_id   = $request->inputuserid;
      $tbluser->email   = $request->inputuserid;
      $tbluser->usergroup = $request->inputusertype ;
      $tbluser->branch    = $request->inputuserarea;
      if($request->inputuserpass <> $tbluser->password){
          $tbluser->password  = md5($request->inputuserpass);
      }
      $tbluser->company   = $request->inputusercompany ;
      $tbluser->save();
      if ($tbluser){
        $tbluser = Tbluser::where('email','=',$request->inputuserid)->first();
        $user = new User;
        $user->name = '-';
        $user->email = $request->inputuserid;
        $user->uid = $tbluser->uid;
        $user->password  = md5($request->inputuserpass);
        $user->save();
      }
      // ada program triger save ke table tbluser langsung save ke tabel users
      return redirect('/info1');
  }
}
