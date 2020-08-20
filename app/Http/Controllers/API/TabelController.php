<?php
namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rcvrsusers;
use App\Models\Tblhelp;
use Carbon\Carbon;
use DB;

class TabelController extends Controller
{
    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }

    function satuanblong(Request $request){
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
        
        try {
         $tblhelp = Tblhelp::where('fkey1', '=', 'SATUANBLONG')
            ->select('fkey2 as code', 'data1 as desc', 'data2')
            ->orderby('data2', 'asc')
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'tabel' => $tblhelp
        ]);
    }

    function mesintimbang(Request $request){
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
        
        try {
         $tblhelp = Tblhelp::where('fkey1', '=', 'MESIN_TIMBANG')
         ->where('data2', '=', $user->plantkode)
            ->select('fkey2 as code', 'data1 as desc')
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'tabel' => $tblhelp
        ]);
    }

    function penimbang(Request $request){
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
        
        try {
         $tblhelp = Tblhelp::where('fkey1', '=', 'PENIMBANG')
         ->where('data2', '=', $user->plantkode)
            ->select('fkey2 as code', 'data1 as desc')
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'tabel' => $tblhelp
        ]);
    }

    function grade(Request $request){
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
        
        try {
         $tblhelp = Tblhelp::where('fkey1', '=', 'GRADE_QC')
            ->select('fkey2 as code', 'data1 as desc')
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'tabel' => $tblhelp
        ]);
    }

    function condition(Request $request){
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
        
        try {
         $tblhelp = Tblhelp::where('fkey1', '=', 'SHRIMP_CONDITION')
            ->select('fkey2 as code', 'data1 as desc')
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'tabel' => $tblhelp
        ]);
    }
}
