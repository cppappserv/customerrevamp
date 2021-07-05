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

    public function listuserpassword($userx){
      $grp = Tbluser::where('email','LIKE', '%@cpp.co.id')
      ->when($userx->usergroup == '9', function ($query) use($userx){
          return $query->where('branch', '=', $userx->branch);
      })
      ->get();
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
      if($user->usergroup == '13'){
        return redirect()->back()->withErrors(['msg', 'The Message']);
      }
      $listuser = $this->listuserpassword($user);
      $listuseredit = $this->listuserpasswordedit();
      // $listgroup = Tblgroupuser::wherein('idusergroup',['1','9'])->get();
      $listgroup = Tblgroupuser::where('active','=', 'Y')
        ->where('idusergroup','>=', $user->usergroup)
        ->get();
      $tblobject = Tblobject::where('objtype','=','7')
        ->when($user->usergroup == '9', function ($query) use($user){
          return $query->where('objname', '=', $user->branch);
        })
        ->get();
      

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

    function loadid(Request $req){
      $user = $this->getuser();
      $user_branch  = explode(", ", $user->branch);
      $user_company = explode(", ", $user->company);
      $help_bu = Tblobject::where('objtype','=','7')
        ->when($user->usergroup == '9', function ($query) use($user_branch){
          return $query->whereIn('objname', $user_branch);
        })
        ->select('objname as bu')
        ->get();

      $help_company = Dtadditional::where('type','COMPANY')
        ->when($user->usergroup == '9', function ($query) use($user_branch, $user_company){
          return $query->whereIn('desc', $user_branch)->whereIn('info', $user_company);
        })
        ->select('desc as bu', 'info as company')
        ->get();

      $data = Tbluser::where('uid',$req->id)
      ->first();
      $akses_branch = explode(", ", $data->branch);
      $akses_company = explode(", ", $data->company);
      
      foreach ($help_bu as $key => $value) {
        $value->flag = '';
        foreach ($akses_branch as $key2 => $value2) {
          if ($value->bu == $value2){
            $value->flag = 'selected';
            break;
          }
        }
      }
      $data->help_bu = $help_bu;

      foreach ($help_company as $key => $value) {
        $value->flag = '';
        foreach ($akses_company as $key2 => $value2) {
          if ($value->company == $value2){
            $value->flag = 'selected';
            break;
          }
        }
      }
      $data->help_company = $help_company;
      return $data;
    }
    
    public function destroy(Request $request)
    { 
         $applicant_id=$request->input('applicant_id');
        DB::beginTransaction();
        try {
            Tbluser::where('uid','=',$applicant_id)->delete();
            User::where('uid','=',$applicant_id)->delete();
            
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        DB::commit();
        return redirect('/info1')->with('success', 'Applicant Removed');
    }

    public function infosave(Request $request){
       $this->validate($request, [
          'inputuserid'      => ['required'],
          'inputusertype'    => ['required'],
          'inputuserarea'    => ['required'],
          'inputuserpass'    => ['required'],
          'inputuserrepass'  => ['required'],
          'inputusercompany' => ['required'],
      ]);
        
        if ($request->inputuid == '0'){
          $tbluser = Tbluser::where('user_id','=', $request->inputuserid)
          ->orwhere('email', '=', $request->inputuserid )
          ->first();
          if (!$tbluser){
            $tbluser = new Tbluser;
          }
        } else {
          $tbluser = Tbluser::where('uid','=', $request->inputuid)->first();
        }
        DB::beginTransaction();
        try {
          $nama = explode( '@', $request->inputuserid );
          $tbluser->fullname  = $nama[0];
          $tbluser->user_id   = $request->inputuserid;
          $tbluser->email     = $request->inputuserid;
          $tbluser->usergroup = $request->inputusertype ;
          $tbluser->branch    = $request->inputuserarea;
          if($request->inputuserpass <> $tbluser->password){
              $tbluser->password  = md5($request->inputuserpass);
          }
          $tbluser->company   = $request->inputusercompany ;
          $tbluser->save();
        } catch (\Exception $e) {
          DB::rollback();
          return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        DB::commit();
        $tbluser = Tbluser::where('email','=', $request->inputuserid)->first();

        $user = User::where('email', '=', $request->inputuserid)->first();
        if (!$user){
          $user = new User;
        }
        $user->name     = $tbluser->fullname;
        $user->email    = $tbluser->email;
        $user->uid      = $tbluser->uid;
        $user->password = md5($request->inputuserpass);
        $user->save();

      return redirect('/info1');
  }
}
