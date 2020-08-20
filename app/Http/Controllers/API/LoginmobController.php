<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rcvrsusers;
use App\Models\Rcvrmplant;
use App\Models\Rcvrmcompany;
use App\Models\Tblhelp;
use Carbon\Carbon;
use DB;

class LoginmobController extends Controller
{
    function cekpasswordasal($para1){
  
        $tblpass = Tblhelp::where('fkey1', 'LINK_MOBILE')
        ->where('fkey2', '1')->first();
        // $pass_tbl = stream_get_contents($tblpass->icon);
        $pass_tbl = $tblpass->icon;
        $pass = str_replace("Bearer ", "",$para1);
        if ($pass_tbl <> $pass){
            return('1');
        }
        return('0');
    }

    function userlogin(Request $request){
        $pass = $request->Header('Authorization');
        if($this->cekpasswordasal($pass)=='1'){
            return response()->json([
                'code'=>500, 
                'message' => 'Not Match Token'
            ]);
        };

        $user = Rcvrsusers::where('usercode','=', $request->usercode)
            ->where('status', '=', 'ACTIV')
            ->first();
            // return $user;

        $explode = explode(",",$user->isadmin);
        $ket = Tblhelp::where('fkey1', '=','TBL_GROUP')
        ->whereIn('fkey2', $explode)
        ->select('fkey2 as id', 'data1 as ket')
        ->get();
        
        $plant = Rcvrmplant::where('plantkode','=', $user->plantkode)
            ->select('plantname', 'companycode')
            ->first();
            // return $plant;

        $company = Rcvrmcompany::where('companycode','=', $plant->companycode)
            ->select('id', 'companycode', 'companyname', 'gambar')
            ->first();


        if (!Hash::check($request->password , $user->password)) {
            return response()->json(['code'=> '500', 'message' => 'User not Found']);    
        }

        try {
            $now = Carbon::now();    
            $token = str_replace(array('+', '/', '='), array('', '', ''), base64_encode($user->id.random_bytes(64).$user->username));
            $token = substr_replace($token, '.', 12, 0);

            $user->remember_token = $token;
            $user->time_out = null;
            $user->time_in = $now;
            $user->pos_x = $request->pos_x;
            $user->pos_y  = $request->pos_y;
            $user->save();

            
            

        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses', 
            'token'       => $token,
            'companycode' => $company->companycode, 
            'companyname' => $company->companyname, 
            'namaimage'   => $company->gambar, 
            'gambar'      => '/company/storeimage/'.$company->id, 
            'usercode'    => $user->usercode,
            'username'    => $user->username, 
            'isadmin'     => $user->isadmin,
            'time_out'    => $user->time_out,
            'plantkode'   => $user->plantkode,
            'plantname'   => $plant->plantname,
            'otorisasi'   => $ket
            
        ]);
    }

    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }

    function userlogout(Request $request){
        $user = Rcvrsusers::where('usercode','=', $request->usercode)
            ->where('status', '=', 'ACTIV')
            ->first();

        $pass = $request->Header('Authorization');
        if($this->cekpassword($pass, $user->remember_token)=='1'){
            return response()->json([
                'code'=>500, 
                'message' => 'Not Match Token'
            ]);
        };
            // return $user;

        if (!Hash::check($request->password , $user->password)) {
            return response()->json(['code'=> '500', 'message' => 'User not Found']);    
        }

        // return $request->url();
        try {
            $now = Carbon::now();    
            $user->remember_token = null;
            $user->time_out = $now;
            $user->pos_x = $request->pos_x;
            $user->pos_y  = $request->pos_y;
            $user->save();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses' 
        ]);
    }
}
