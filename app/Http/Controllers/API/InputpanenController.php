<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rcvrsusers;
use App\Models\Rcvrmplant;
use App\Models\Dailyharvest;
use App\Models\Plasma;
use App\Models\Rcvrxgrbtshdrtemp;
use App\Models\Rcvrxgrbtsdtltemp;
use App\Models\Tblhelp;
use App\Models\Tcounter;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;

class InputpanenController extends Controller
{
    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }

    function inputpanen(Request $request){
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
        $now = Carbon::now();
        $startDate = time();
        $now1 = date('Y-m-d', strtotime('-1 day', $startDate));
        // return $now . ' - '.$now1;
        // validation
        $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
        $dailyharvest = Dailyharvest::where('company_code', '=', $plant->companycode)
            ->where('pond_address', '=', $request->pond_address)
            ->where('harvest_date', '=', $now->format('Y-m-d'))
            ->first();
        if (empty($dailyharvest)){
            $dailyharvest = Dailyharvest::where('company_code', '=', $plant->companycode)
                ->where('pond_address', '=', $request->pond_address)
                ->where('harvest_date', '=', $now1)
                ->first();
        }
        if (empty($dailyharvest)){
            return response()->json(['code'=>500, 'message' => 'Tidak di temukan Tambak Panen']);
        }
        $plasma = Plasma::where('pond_address', '=', $request->pond_address)
            ->where('bukrs', '=', $dailyharvest->company_code)
            ->first();

        $stat = Rcvrxgrbtshdrtemp::where('plantcode', '=', $dailyharvest->werks)
            ->where('pond_addr', '=', $request->pond_address)
            ->where('harvest_date', '=', $dailyharvest->harvest_date)
            ->first();
        if ($request->docno == ''){
            if (!empty($stat)){
                return response()->json(['code'=>500, 'message' => 'Tambak tersebut sudah diinput']);
            }
        }

        // proses save
        DB::beginTransaction();
        try {
            if ($request->docno == ''){
                $baru = 'Y';
                $tcounter = Tcounter::where('plantcode', '=', $user->plantkode)->first();
                if (empty($tcounter)){
                    $tcounter = new Tcounter;
                    $tcounter->plantcode = $user->plantkode;
                    $tcounter->deviceid = '-';
                    $tcounter->sequence = 0; 
                    $tcounter->save();
                } 
                $tcounter->sequence = $tcounter->sequence + 1;
                $tcounter->save();
                $docno = $this->noseq(
                    $user->plantkode,
                    $request->arrival_date,  
                    $tcounter->sequence
                );
                $rcvrxgrbtshdrtemp = NEW Rcvrxgrbtshdrtemp;
            } else {
                $baru = 'N';
                $docno = $request->docno;
                $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('docno', '=', $docno)->first(); 
                if (empty($rcvrxgrbtshdrtemp)){
                    return response()->json(['code'=>500, 'message' => 'Tidak di temukan No. Documen']);
                }
            }
            $rcvrxgrbtshdrtemp->docno          = $docno; 
            $rcvrxgrbtshdrtemp->trucknr        = $request->trucknr; 
            $rcvrxgrbtshdrtemp->total_blong    = $request->total_blong;
            $rcvrxgrbtshdrtemp->satuan_blong   = $request->satuan_blong; 
            $rcvrxgrbtshdrtemp->arrival_date   = $request->arrival_date; 
            $rcvrxgrbtshdrtemp->jam_datang     = $request->jam_datang; 
            $rcvrxgrbtshdrtemp->plantcode      = $dailyharvest->werks;
            $rcvrxgrbtshdrtemp->pond_addr      = $request->pond_address;
            $rcvrxgrbtshdrtemp->lgort          = $dailyharvest->lgort;
            $rcvrxgrbtshdrtemp->harvest_date   = $dailyharvest->harvest_date;
            $rcvrxgrbtshdrtemp->kschl          = $plasma->kschl;
            $rcvrxgrbtshdrtemp->adj_price      = $plasma->adj_price;
            $rcvrxgrbtshdrtemp->type_of_shrimp = $plasma->type_of_shrimp;
            $rcvrxgrbtshdrtemp->group_of_size  = $plasma->group_of_pond;
            $rcvrxgrbtshdrtemp->status_data    = '1';
            $rcvrxgrbtshdrtemp->created_at  = $now;
            $rcvrxgrbtshdrtemp->created_by  = $request->usercode;
            $rcvrxgrbtshdrtemp->lastupdate  = $now;
            $rcvrxgrbtshdrtemp->update_by  = $request->usercode;
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;

            $dailyharvest->docno = $docno; 
            if ($baru == 'N'){
                $dailyharvest->status_data = 'D';
            }
            $dailyharvest->timestamps = false;
            $dailyharvest->save();
            $dailyharvest->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
            'docno' => $rcvrxgrbtshdrtemp->docno
        ]);
    }

    function noseq($plant, $tgl, $nilai){
        $var1 = $plant.'-' .substr($tgl,2,2).substr($tgl,5,2).substr($tgl,8,2);
        if ($nilai<10){
            $var1 = $var1 . '0000'.$nilai;
        }elseif ($nilai<100){
            $var1 = $var1 . '000'.$nilai;
        }elseif ($nilai<1000){
            $var1 = $var1 . '00'.$nilai;
        }elseif  ($nilai<10000){
            $var1 = $var1 . '0'.$nilai;
        }else{
            $var1 = $var1 . $nilai;
        }
        return $var1;
    }
    
    function cek_table($fkey1, $fkey2, $data2){
        if ($fkey1 == 'MESIN_TIMBANG'){
            $tblhelp = Tblhelp::where('fkey1', '=', $fkey1)
                ->where('fkey2', '=', $fkey2)
                ->where('data2', '=', $data2)
                ->first();
            if ($tblhelp){
                return 1;
            } else {
                return 0;
            }
        } 
        return 0;
    }
    
    function update01_petugastimbang(Request $request){
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
        $now = Carbon::now();
        // validasi
        if ($this->cek_table('MESIN_TIMBANG', $request->mesin_timbang, $user->plantkode) == 0){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Baca Table']);
        }
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // if ($rcvrxgrbtshdrtemp->status_data > 2){
        //     return response()->json(['code'=>500, 'message' => 'Proses Bukan Petugas Timbang ']);
        // }

        // proses save
        

        DB::beginTransaction();
        try {
            $rcvrxgrbtshdrtemp->trip_to          = $request->trip_to; 
            $rcvrxgrbtshdrtemp->mesin_timbang    = $request->mesin_timbang; 
            $rcvrxgrbtshdrtemp->penimbang        = $request->penimbang; 
            if ($request->flag_update == ''){
                $rcvrxgrbtshdrtemp->status_data      = '2'; 
            }
            $rcvrxgrbtshdrtemp->shrimp_condition    = $request->shrimp_condition; 
            $rcvrxgrbtshdrtemp->temp_in_blong       = $request->temp_in_blong; 
            $rcvrxgrbtshdrtemp->lastupdate       = $now; 
            $rcvrxgrbtshdrtemp->update_by        = $request->usercode; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
        ]);
    }

    function update02_jambongkar(Request $request){
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
        $now = Carbon::now();
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // if ($rcvrxgrbtshdrtemp->status_data > 2){
        //     return response()->json(['code'=>500, 'message' => 'Proses Bukan Jam Bongkar ']);
        // }
        // proses save
        DB::beginTransaction();
        try {
            if ($request->flag_update == ''){
                $rcvrxgrbtshdrtemp->status_data = '2'; 
            }
            $rcvrxgrbtshdrtemp->jam_bongkar = $request->jam_bongkar; 
            $rcvrxgrbtshdrtemp->lastupdate  = $now; 
            $rcvrxgrbtshdrtemp->update_by   = $request->usercode; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
        ]);
    }

    function update03_jamselesai(Request $request){
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
        $now = Carbon::now();
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // if ($rcvrxgrbtshdrtemp->status_data > 3){
        //     return response()->json(['code'=>500, 'message' => 'Proses Bukan Jam Selesai Bongkar ']);
        // }
        // proses save
        DB::beginTransaction();
        try {
            if ($request->flag_update == ''){
                $rcvrxgrbtshdrtemp->status_data = '3'; 
            }
            $rcvrxgrbtshdrtemp->jam_selesaibongkar = $request->jam_selesaibongkar; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
        ]);
    }

    function update04_proses(Request $request){
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
        $now = Carbon::now();
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // if ($rcvrxgrbtshdrtemp->status_data < 3){
        //     return response()->json(['code'=>500, 'message' => 'Proses Bukan Jam Proses ']);
        // }
        // proses save
        DB::beginTransaction();
        try {
            if ($request->flag_update == ''){
                $rcvrxgrbtshdrtemp->status_data = '4'; 
            }
            $rcvrxgrbtshdrtemp->jam_proses  = $request->jam_proses; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
        ]);
    }

    function update05_selesaiproses(Request $request){
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
        $now = Carbon::now();
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // if ($rcvrxgrbtshdrtemp->status_data < 3){
        //     return response()->json(['code'=>500, 'message' => 'Proses Bukan Jam Proses ']);
        // }
        // proses save
        DB::beginTransaction();
        try {
            if ($request->flag_update == ''){
                $rcvrxgrbtshdrtemp->status_data = '4'; 
            }
            $rcvrxgrbtshdrtemp->jam_selesaiproses  = $request->jam_selesaiproses; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'id' => $rcvrxgrbtshdrtemp->id,
        ]);
    }
}
