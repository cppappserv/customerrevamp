<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qrxtxhistory;
use App\Models\Qrmcounter;
use App\Models\Qrmmaster;
use App\Models\Qrmhelp;
use App\Models\Qrsusers;
use App\Models\Qrsusersakses;

use DB;

class QrcodelogoffController extends Controller
{
    function cekpassword($para1, $para2){
        $qrsusers = Qrsusers::where('usercode', $para2)
            ->where('remember_token', $para1)
            ->count();
        return $qrsusers;
    }

    function Logoff(Request $request){
        $pass = $request->Header('Authorization');
        $usercode = $request->usercode;
        if($this->cekpassword($pass, $usercode)=='0'){
            return response()->json([
                'code'=>500, 
                'message' => 'Not Match Token'
            ]);
        };
        DB::beginTransaction();
        try {
            $sql = "
                update qrs_users set remember_token = '' where usercode = '".$usercode."'
            ";
            $qrsusers = DB::connection('pgsql')->select($sql);
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        DB::commit();
        return response()->json(['code'=>200, 'message' => "Sukses"]);
    }

    
}

