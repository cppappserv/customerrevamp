<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qrxtxhistorytemp;
use App\Models\Qrmcounter;
use App\Models\Qrmmaster;
use App\Models\Qrmhelp;
use App\Models\Qrsusers;
use App\Models\Qrsusersakses;

use DB;

class Qrcodelogoff2Controller extends Controller
{
    function cekpassword($para1, $para2){
        $qrsusers = Qrsusers::where('usercode', $para2)
            ->where('remember_token', $para1)
            ->count();
        return $qrsusers;
    }

    function Logoff2(Request $request){
        $usercode = $request->usercode;
        $user = Qrsusers::where('usercode',$usercode)->first();
        // return $user;
        // $pass = $request->Header('Authorization');
        // if($this->cekpassword($pass, $usercode)=='0'){
        //     return response()->json([
        //         'code'=>500, 
        //         'message' => 'Not Match Token'
        //     ]);
        // };
        DB::beginTransaction();
        try {
            $sql = "
                delete from qrx_txhistorytemp where lastupdatedby = '".$user->username."' 
            ";
            $result = DB::connection('pgsql')->select($sql);        

            foreach ($request->qrxtxhistorytemp as $key => $value) {
                Qrxtxhistorytemp::create([
                    'txtype'           => $value['txtype'], 
                    'plantcode'        => $value['plantcode'], 
                    'barcode'          => $value['barcode'], 
                    'batch'            => $value['batch'], 
                    'materialcode'     => $value['materialcode'], 
                    'stype'            => $value['stype'], 
                    'srcsloccode'      => $value['srcsloccode'], 
                    'dstsloccode'      => $value['dstsloccode'], 
                    'refnumber'        => $value['refnumber'], 
                    'unpackingstatus'  => $value['unpackingstatus'], 
                    'ponumber'         => $value['ponumber'], 
                    'manualpo'         => $value['manualpo'], 
                    'reversalstatus'   => $value['reversalstatus'], 
                    'status'           => $value['status'], 
                    'active'           => $value['active'], 
                    'datastatus'       => $value['datastatus'], 
                    'proddate'         => $value['proddate'],
                    'lastupdatedby'    => $value['lastupdatedby']
                ]);
            };

        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        DB::commit();
        return response()->json(['code'=>200, 'message' => "Sukses"]);
    }

    
}

