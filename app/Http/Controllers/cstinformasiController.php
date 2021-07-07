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
      $user_branch  = explode(", ", $userx->branch);
      if ($userx->usergroup == '9'){
        $arr_uid = array();
        $str_uid = '';
        foreach ($user_branch as $key => $value) {
          $grp = Tbluser::where('email','LIKE', '%@cpp.co.id')
            ->where('branch', 'like', '%'.$value.'%')
            ->get();
            ;
          foreach ($grp as $key2 => $value2) {
            $ada = '';
            foreach ($arr_uid as $key3 => $value3) {
              if ($value3 == $value2->uid) {
                $ada = '1';
                break;
              }
            }
            if ($ada == ''){
              $arr_uid[] = $value2->uid;  
              $str_uid .= ($str_uid==''?'':', ') . $value2->uid;
            }
          }
        }

        $uid  = explode(", ", $str_uid);
        
        $grp = Tbluser::whereIn('uid', $uid)->get();
        


      } else {
        $grp = Tbluser::where('email','LIKE', '%@cpp.co.id')
        ->get();
      }
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

      $user_branch  = explode(", ", $user->branch);
      $listuser = $this->listuserpassword($user);
      $listuseredit = $this->listuserpasswordedit();
      // $listgroup = Tblgroupuser::wherein('idusergroup',['1','9'])->get();
      $listgroup = Tblgroupuser::where('active','=', 'Y')
        ->where('idusergroup','>', $user->usergroup)
        ->get();
      $tblobject = Tblobject::where('objtype','=','7')
        ->when($user->usergroup == '9', function ($query) use($user){
          return $query->where('objname', '=', $user->branch);
        })
        ->get();
      

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
      /*
        Array ( 
          [_token] => PA2ursjAyVN7424nqeDqMYovYk22xfW3hpYRDJZI 
          [inputuserid] => heru01.herukrl@cpp.co.id 
          [inputbaris] => 0 
          [inputuid] => 0 
          [inputbaru] => 0 
          [oldcompany] => 
          [inputusertype] => 13 
          [inputotorisasi] => Array ( 
              [0] => SHRIMP FEED:CPP JKT 
              [1] => SHRIMP FEED:CPP Medan 
              [2] => SHRIMP FEED:CPP SBY 
            ) 
          [inputuserpass] => 123 
          [inputuserrepass] => 123 
        )
      */

      $this->validate($request, [
        'inputuserid'      => ['required'],
        'inputusertype'    => ['required'],
        'inputotorisasi'   => ['required'],
        'inputuserpass'    => ['required'],
        'inputuserrepass'  => ['required']
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

      $arr_bu = array();
      $bu  = '';
      $ouc = '';
      foreach ($request->inputotorisasi as $key => $value) {
        $valuex = explode(":", $value);
        $ada = '';
        foreach ($arr_bu as $key2 => $value2) {
          if ($value2 == $valuex[0]) {
            $ada = '1';
            break;
          }
        }
        if ($ada == ''){
          $arr_bu[] = $valuex[0];
          $bu .= ($bu<>''?', ':'') . $valuex[0];
        }
        $ouc .= ($ouc<>''?', ':'') . $valuex[1];
      }

      DB::beginTransaction();
        try {
          $nama = explode( '@', $request->inputuserid );
          $tbluser->fullname  = $nama[0];
          $tbluser->user_id   = $request->inputuserid;
          $tbluser->email     = $request->inputuserid;
          $tbluser->usergroup = $request->inputusertype;
          $tbluser->branch    = $bu;
          if($request->inputuserpass <> $tbluser->password){
            $tbluser->password  = md5($request->inputuserpass);
          }
          $tbluser->company   = $ouc;
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

  function loadbu(Request $req){
    $user = $this->getuser();
    $user_branch  = explode(", ", $user->branch);

    $help_bu = Tblobject::where('objtype','=','7')
      ->when($user->usergroup == '9', function ($query) use($user_branch){
        return $query->whereIn('objname', $user_branch);
      })
      ->select('objname as bu')
      ->get();

      if ($req->id){
        $data = Tbluser::where('uid',$req->id)->first();
      } else {
        $data = new Tbluser;
      }
    
    $akses_branch = explode(", ", $data->branch);
    
    foreach ($help_bu as $key => $value) {
      $value->flag = '';
      foreach ($akses_branch as $key2 => $value2) {
        if ($value->bu == $value2){
          $value->flag = 'selected';
          break;
        }
      }
    }
    return response()->json($help_bu);
  }

  function loadouc(Request $req){
    $user = $this->getuser();
    // $user_branch  = explode(", ", $user->branch);
    $user_company = explode(", ", $user->company);
    $user_branch  = explode(", ", $user->branch);

    $help_company = Dtadditional::where('type','COMPANY')
      ->when($user->usergroup == '9', function ($query) use($user_branch, $user_company){
        return $query->whereIn('desc', $user_branch)->whereIn('info', $user_company);
      })
      ->select('desc as bu', 'info as company')
      ->get();

    if ($req->id){
      $data = Tbluser::where('uid', $req->id)->first();

    } else {
      $data = new Tbluser;
      
    }
    $akses_company = explode(", ", $data->company);
    
    foreach ($help_company as $key => $value) {
      
      $value->flag = '';
      if ($req->id){
        
        foreach ($akses_company as $key2 => $value2) {
          if ($value->company == $value2){
            $value->flag = 'selected';
            break;
          }
        }
      }
      
    }
    
    return response()->json($help_company);

  }
}
