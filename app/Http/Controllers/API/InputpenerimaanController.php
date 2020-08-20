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

class InputpenerimaanController extends Controller
{
    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }
    
    function keranjang(Request $request){
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
        $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
            ->where('docno', '=', $request->docno)->first();
        if (!$rcvrxgrbtshdrtemp){
            return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
        }
        // proses save
        

        DB::beginTransaction();
        try {
            $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
            if (!$rcvrxgrbtsdtltemp){
               $rcvrxgrbtsdtltemp = new Rcvrxgrbtsdtltemp;
            }
            $rcvrxgrbtsdtltemp->docno = $request->docno;
            if ($request->status <> 'BROKEN'){
               if ($request->keranjang == 1){
                  $rcvrxgrbtsdtltemp->weight_bt01 = $request->qty;
               } elseif ($request->keranjang == 2){
                  $rcvrxgrbtsdtltemp->weight_bt02 = $request->qty;
               } elseif ($request->keranjang == 3){
                  $rcvrxgrbtsdtltemp->weight_bt03 = $request->qty;
               } elseif ($request->keranjang == 4){
                  $rcvrxgrbtsdtltemp->weight_bt04 = $request->qty;
               } elseif ($request->keranjang == 5){
                  $rcvrxgrbtsdtltemp->weight_bt05 = $request->qty;
               } elseif ($request->keranjang == 6){
                  $rcvrxgrbtsdtltemp->weight_bt06 = $request->qty;
               } elseif ($request->keranjang == 7){
                  $rcvrxgrbtsdtltemp->weight_bt07 = $request->qty;
               } elseif ($request->keranjang == 8){
                  $rcvrxgrbtsdtltemp->weight_bt08 = $request->qty;
               } elseif ($request->keranjang == 9){
                  $rcvrxgrbtsdtltemp->weight_bt09 = $request->qty;
               } elseif ($request->keranjang == 10){
                  $rcvrxgrbtsdtltemp->weight_bt10 = $request->qty;
               } elseif ($request->keranjang == 11){
                  $rcvrxgrbtsdtltemp->weight_bt11 = $request->qty;
               } elseif ($request->keranjang == 12){
                  $rcvrxgrbtsdtltemp->weight_bt12 = $request->qty;
               } elseif ($request->keranjang == 13){
                  $rcvrxgrbtsdtltemp->weight_bt13 = $request->qty;
               } elseif ($request->keranjang == 14){
                  $rcvrxgrbtsdtltemp->weight_bt14 = $request->qty;
               } elseif ($request->keranjang == 15){
                  $rcvrxgrbtsdtltemp->weight_bt15 = $request->qty;
               } elseif ($request->keranjang == 16){
                  $rcvrxgrbtsdtltemp->weight_bt16 = $request->qty;
               } elseif ($request->keranjang == 17){
                  $rcvrxgrbtsdtltemp->weight_bt17 = $request->qty;
               } elseif ($request->keranjang == 18){
                  $rcvrxgrbtsdtltemp->weight_bt18 = $request->qty;
               } elseif ($request->keranjang == 19){
                  $rcvrxgrbtsdtltemp->weight_bt19 = $request->qty;
               } elseif ($request->keranjang == 20){
                  $rcvrxgrbtsdtltemp->weight_bt20 = $request->qty;
               } elseif ($request->keranjang == 21){
                  $rcvrxgrbtsdtltemp->weight_bt21 = $request->qty;
               } elseif ($request->keranjang == 22){
                  $rcvrxgrbtsdtltemp->weight_bt22 = $request->qty;
               } elseif ($request->keranjang == 23){
                  $rcvrxgrbtsdtltemp->weight_bt23 = $request->qty;
               } elseif ($request->keranjang == 24){
                  $rcvrxgrbtsdtltemp->weight_bt24 = $request->qty;
               } elseif ($request->keranjang == 25){
                  $rcvrxgrbtsdtltemp->weight_bt25 = $request->qty;
               } elseif ($request->keranjang == 26){
                  $rcvrxgrbtsdtltemp->weight_bt26 = $request->qty;
               } elseif ($request->keranjang == 27){
                  $rcvrxgrbtsdtltemp->weight_bt27 = $request->qty;
               } elseif ($request->keranjang == 28){
                  $rcvrxgrbtsdtltemp->weight_bt28 = $request->qty;
               } elseif ($request->keranjang == 29){
                  $rcvrxgrbtsdtltemp->weight_bt29 = $request->qty;
               } elseif ($request->keranjang == 30){
                  $rcvrxgrbtsdtltemp->weight_bt30 = $request->qty;
               } elseif ($request->keranjang == 31){
                  $rcvrxgrbtsdtltemp->weight_bt31 = $request->qty;
               } elseif ($request->keranjang == 32){
                  $rcvrxgrbtsdtltemp->weight_bt32 = $request->qty;
               } elseif ($request->keranjang == 33){
                  $rcvrxgrbtsdtltemp->weight_bt33 = $request->qty;
               } elseif ($request->keranjang == 34){
                  $rcvrxgrbtsdtltemp->weight_bt34 = $request->qty;
               } elseif ($request->keranjang == 35){
                  $rcvrxgrbtsdtltemp->weight_bt35 = $request->qty;
               } elseif ($request->keranjang == 36){
                  $rcvrxgrbtsdtltemp->weight_bt36 = $request->qty;
               } elseif ($request->keranjang == 37){
                  $rcvrxgrbtsdtltemp->weight_bt37 = $request->qty;
               } elseif ($request->keranjang == 38){
                  $rcvrxgrbtsdtltemp->weight_bt38 = $request->qty;
               } elseif ($request->keranjang == 39){
                  $rcvrxgrbtsdtltemp->weight_bt39 = $request->qty;
               } elseif ($request->keranjang == 40){
                  $rcvrxgrbtsdtltemp->weight_bt40 = $request->qty;
               } elseif ($request->keranjang == 41){
                  $rcvrxgrbtsdtltemp->weight_bt41 = $request->qty;
               } elseif ($request->keranjang == 42){
                  $rcvrxgrbtsdtltemp->weight_bt42 = $request->qty;
               } elseif ($request->keranjang == 43){
                  $rcvrxgrbtsdtltemp->weight_bt43 = $request->qty;
               } elseif ($request->keranjang == 44){
                  $rcvrxgrbtsdtltemp->weight_bt44 = $request->qty;
               } elseif ($request->keranjang == 45){
                  $rcvrxgrbtsdtltemp->weight_bt45 = $request->qty;
               } elseif ($request->keranjang == 46){
                  $rcvrxgrbtsdtltemp->weight_bt46 = $request->qty;
               } elseif ($request->keranjang == 47){
                  $rcvrxgrbtsdtltemp->weight_bt47 = $request->qty;
               } elseif ($request->keranjang == 48){
                  $rcvrxgrbtsdtltemp->weight_bt48 = $request->qty;
               } elseif ($request->keranjang == 49){
                  $rcvrxgrbtsdtltemp->weight_bt49 = $request->qty;
               } elseif ($request->keranjang == 50){
                  $rcvrxgrbtsdtltemp->weight_bt50 = $request->qty;
               } 
            }
            $rcvrxgrbtsdtltemp->lastupdate = $now;
            $rcvrxgrbtsdtltemp->update_by = $request->usercode; 
            $rcvrxgrbtsdtltemp->timestamps = false;
            $rcvrxgrbtsdtltemp->save();
            $rcvrxgrbtsdtltemp->timestamps = true;
            

            $tonase = 
               $rcvrxgrbtsdtltemp->weight_bt01 + 
               $rcvrxgrbtsdtltemp->weight_bt02 + 
               $rcvrxgrbtsdtltemp->weight_bt03 + 
               $rcvrxgrbtsdtltemp->weight_bt04 +
               $rcvrxgrbtsdtltemp->weight_bt05 +
               $rcvrxgrbtsdtltemp->weight_bt06 +
               $rcvrxgrbtsdtltemp->weight_bt07 +
               $rcvrxgrbtsdtltemp->weight_bt08 +
               $rcvrxgrbtsdtltemp->weight_bt09 +
               $rcvrxgrbtsdtltemp->weight_bt10 +
               $rcvrxgrbtsdtltemp->weight_bt11 +
               $rcvrxgrbtsdtltemp->weight_bt12 +
               $rcvrxgrbtsdtltemp->weight_bt13 +
               $rcvrxgrbtsdtltemp->weight_bt14 +
               $rcvrxgrbtsdtltemp->weight_bt15 +
               $rcvrxgrbtsdtltemp->weight_bt16 +
               $rcvrxgrbtsdtltemp->weight_bt17 +
               $rcvrxgrbtsdtltemp->weight_bt18 +
               $rcvrxgrbtsdtltemp->weight_bt19 +
               $rcvrxgrbtsdtltemp->weight_bt20 +
               $rcvrxgrbtsdtltemp->weight_bt21 +
               $rcvrxgrbtsdtltemp->weight_bt22 +
               $rcvrxgrbtsdtltemp->weight_bt23 +
               $rcvrxgrbtsdtltemp->weight_bt24 +
               $rcvrxgrbtsdtltemp->weight_bt25 +
               $rcvrxgrbtsdtltemp->weight_bt26 +
               $rcvrxgrbtsdtltemp->weight_bt27 +
               $rcvrxgrbtsdtltemp->weight_bt28 +
               $rcvrxgrbtsdtltemp->weight_bt29 +
               $rcvrxgrbtsdtltemp->weight_bt30 +
               $rcvrxgrbtsdtltemp->weight_bt31 +
               $rcvrxgrbtsdtltemp->weight_bt32 +
               $rcvrxgrbtsdtltemp->weight_bt33 +
               $rcvrxgrbtsdtltemp->weight_bt34 +
               $rcvrxgrbtsdtltemp->weight_bt35 +
               $rcvrxgrbtsdtltemp->weight_bt36 +
               $rcvrxgrbtsdtltemp->weight_bt37 +
               $rcvrxgrbtsdtltemp->weight_bt38 +
               $rcvrxgrbtsdtltemp->weight_bt39 +
               $rcvrxgrbtsdtltemp->weight_bt40 +
               $rcvrxgrbtsdtltemp->weight_bt41 +
               $rcvrxgrbtsdtltemp->weight_bt42 +
               $rcvrxgrbtsdtltemp->weight_bt43 +
               $rcvrxgrbtsdtltemp->weight_bt44 +
               $rcvrxgrbtsdtltemp->weight_bt45 +
               $rcvrxgrbtsdtltemp->weight_bt46 +
               $rcvrxgrbtsdtltemp->weight_bt47 +
               $rcvrxgrbtsdtltemp->weight_bt48 +
               $rcvrxgrbtsdtltemp->weight_bt49 +
               $rcvrxgrbtsdtltemp->weight_bt50;

            $krj = 
               ($rcvrxgrbtsdtltemp->weight_bt01==0?0:1) + 
               ($rcvrxgrbtsdtltemp->weight_bt02==0?0:1) + 
               ($rcvrxgrbtsdtltemp->weight_bt03==0?0:1) + 
               ($rcvrxgrbtsdtltemp->weight_bt04==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt05==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt06==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt07==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt08==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt09==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt10==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt11==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt12==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt13==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt14==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt15==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt16==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt17==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt18==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt19==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt20==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt21==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt22==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt23==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt24==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt25==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt26==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt27==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt28==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt29==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt30==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt31==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt32==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt33==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt34==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt35==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt36==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt37==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt38==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt39==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt40==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt41==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt42==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt43==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt44==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt45==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt46==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt47==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt48==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt49==0?0:1) +
               ($rcvrxgrbtsdtltemp->weight_bt50==0?0:1);
            
            if ($request->status == 'BROKEN'){
               $rcvrxgrbtshdrtemp->weight_chsbroken = $request->qtybkn;
            }
            $rcvrxgrbtshdrtemp->weight_totalbt = $tonase;
            $rcvrxgrbtshdrtemp->total_keranjang = $krj;
            if ($request->flag_update == ''){
               $rcvrxgrbtshdrtemp->status_data = '5'; 
            }
            $rcvrxgrbtshdrtemp->update_by = $request->usercode; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'     => 200, 
            'message'  => 'sukses',
            'totalkg'  => $rcvrxgrbtshdrtemp->weight_totalbt + 0,
            'totalkrj' => $rcvrxgrbtshdrtemp->total_keranjang,
            'totalbkn' => $rcvrxgrbtshdrtemp->weight_chsbroken + 0
        ]);
    }

    function delkeranjang(Request $request){
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
      $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
          ->where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtshdrtemp){
          return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
      }
      // proses save
      

      DB::beginTransaction();
      try {
         $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
         if (!$rcvrxgrbtsdtltemp){
            $rcvrxgrbtsdtltemp = new Rcvrxgrbtsdtltemp;
         }
         $rcvrxgrbtsdtltemp->docno = $request->docno;
         for ($i=$request->keranjang; $i < 51 ; $i++) { 
            if ($i == 1){
               $rcvrxgrbtsdtltemp->weight_bt01 = $rcvrxgrbtsdtltemp->weight_bt02;
            } elseif ($i == 2 ){
               $rcvrxgrbtsdtltemp->weight_bt02 = $rcvrxgrbtsdtltemp->weight_bt03;
            } elseif ($i == 3){
               $rcvrxgrbtsdtltemp->weight_bt03 = $rcvrxgrbtsdtltemp->weight_bt04;
            } elseif ($i == 4){
               $rcvrxgrbtsdtltemp->weight_bt04 = $rcvrxgrbtsdtltemp->weight_bt05;
            } elseif ($i == 5){
               $rcvrxgrbtsdtltemp->weight_bt05 = $rcvrxgrbtsdtltemp->weight_bt06;
            } elseif ($i == 6){
               $rcvrxgrbtsdtltemp->weight_bt06 = $rcvrxgrbtsdtltemp->weight_bt07;
            } elseif ($i == 7){
               $rcvrxgrbtsdtltemp->weight_bt07 = $rcvrxgrbtsdtltemp->weight_bt08;
            } elseif ($i == 8){
               $rcvrxgrbtsdtltemp->weight_bt08 = $rcvrxgrbtsdtltemp->weight_bt09;
            } elseif ($i == 9){
               $rcvrxgrbtsdtltemp->weight_bt09 = $rcvrxgrbtsdtltemp->weight_bt10;
            } elseif ($i == 10){
               $rcvrxgrbtsdtltemp->weight_bt10 = $rcvrxgrbtsdtltemp->weight_bt11;
            } elseif ($i == 11){
               $rcvrxgrbtsdtltemp->weight_bt11 = $rcvrxgrbtsdtltemp->weight_bt12;
            } elseif ($i == 12){
               $rcvrxgrbtsdtltemp->weight_bt12 = $rcvrxgrbtsdtltemp->weight_bt13;
            } elseif ($i == 13){
               $rcvrxgrbtsdtltemp->weight_bt13 = $rcvrxgrbtsdtltemp->weight_bt14;
            } elseif ($i == 14){
               $rcvrxgrbtsdtltemp->weight_bt14 = $rcvrxgrbtsdtltemp->weight_bt15;
            } elseif ($i == 15){
               $rcvrxgrbtsdtltemp->weight_bt15 = $rcvrxgrbtsdtltemp->weight_bt16;
            } elseif ($i == 16){
               $rcvrxgrbtsdtltemp->weight_bt16 = $rcvrxgrbtsdtltemp->weight_bt17;
            } elseif ($i == 17){
               $rcvrxgrbtsdtltemp->weight_bt17 = $rcvrxgrbtsdtltemp->weight_bt18;
            } elseif ($i == 18){
               $rcvrxgrbtsdtltemp->weight_bt18 = $rcvrxgrbtsdtltemp->weight_bt19;
            } elseif ($i == 19){
               $rcvrxgrbtsdtltemp->weight_bt19 = $rcvrxgrbtsdtltemp->weight_bt20;
            } elseif ($i == 20){
               $rcvrxgrbtsdtltemp->weight_bt20 = $rcvrxgrbtsdtltemp->weight_bt21;
            } elseif ($i == 21){
               $rcvrxgrbtsdtltemp->weight_bt21 = $rcvrxgrbtsdtltemp->weight_bt22;
            } elseif ($i == 22){
               $rcvrxgrbtsdtltemp->weight_bt22 = $rcvrxgrbtsdtltemp->weight_bt23;
            } elseif ($i == 23){
               $rcvrxgrbtsdtltemp->weight_bt23 = $rcvrxgrbtsdtltemp->weight_bt24;
            } elseif ($i == 24){
               $rcvrxgrbtsdtltemp->weight_bt24 = $rcvrxgrbtsdtltemp->weight_bt25;
            } elseif ($i == 25){
               $rcvrxgrbtsdtltemp->weight_bt25 = $rcvrxgrbtsdtltemp->weight_bt26;
            } elseif ($i == 26){
               $rcvrxgrbtsdtltemp->weight_bt26 = $rcvrxgrbtsdtltemp->weight_bt27;
            } elseif ($i == 27){
               $rcvrxgrbtsdtltemp->weight_bt27 = $rcvrxgrbtsdtltemp->weight_bt28;
            } elseif ($i == 28){
               $rcvrxgrbtsdtltemp->weight_bt28 = $rcvrxgrbtsdtltemp->weight_bt29;
            } elseif ($i == 29){
               $rcvrxgrbtsdtltemp->weight_bt29 = $rcvrxgrbtsdtltemp->weight_bt30;
            } elseif ($i == 30){
               $rcvrxgrbtsdtltemp->weight_bt30 = $rcvrxgrbtsdtltemp->weight_bt31;
            } elseif ($i == 31){
               $rcvrxgrbtsdtltemp->weight_bt31 = $rcvrxgrbtsdtltemp->weight_bt32;
            } elseif ($i == 32){
               $rcvrxgrbtsdtltemp->weight_bt32 = $rcvrxgrbtsdtltemp->weight_bt33;
            } elseif ($i == 33){
               $rcvrxgrbtsdtltemp->weight_bt33 = $rcvrxgrbtsdtltemp->weight_bt34;
            } elseif ($i == 34){
               $rcvrxgrbtsdtltemp->weight_bt34 = $rcvrxgrbtsdtltemp->weight_bt35;
            } elseif ($i == 35){
               $rcvrxgrbtsdtltemp->weight_bt35 = $rcvrxgrbtsdtltemp->weight_bt36;
            } elseif ($i == 36){
               $rcvrxgrbtsdtltemp->weight_bt36 = $rcvrxgrbtsdtltemp->weight_bt37;
            } elseif ($i == 37){
               $rcvrxgrbtsdtltemp->weight_bt37 = $rcvrxgrbtsdtltemp->weight_bt38;
            } elseif ($i == 38){
               $rcvrxgrbtsdtltemp->weight_bt38 = $rcvrxgrbtsdtltemp->weight_bt39;
            } elseif ($i == 39){
               $rcvrxgrbtsdtltemp->weight_bt39 = $rcvrxgrbtsdtltemp->weight_bt40;
            } elseif ($i == 40){
               $rcvrxgrbtsdtltemp->weight_bt40 = $rcvrxgrbtsdtltemp->weight_bt41;
            } elseif ($i == 41){
               $rcvrxgrbtsdtltemp->weight_bt41 = $rcvrxgrbtsdtltemp->weight_bt42;
            } elseif ($i == 42){
               $rcvrxgrbtsdtltemp->weight_bt42 = $rcvrxgrbtsdtltemp->weight_bt43;
            } elseif ($i == 43){
               $rcvrxgrbtsdtltemp->weight_bt43 = $rcvrxgrbtsdtltemp->weight_bt44;
            } elseif ($i == 44){
               $rcvrxgrbtsdtltemp->weight_bt44 = $rcvrxgrbtsdtltemp->weight_bt45;
            } elseif ($i == 45){
               $rcvrxgrbtsdtltemp->weight_bt45 = $rcvrxgrbtsdtltemp->weight_bt46;
            } elseif ($i == 46){
               $rcvrxgrbtsdtltemp->weight_bt46 = $rcvrxgrbtsdtltemp->weight_bt47;
            } elseif ($i == 47){
               $rcvrxgrbtsdtltemp->weight_bt47 = $rcvrxgrbtsdtltemp->weight_bt48;
            } elseif ($i == 48){
               $rcvrxgrbtsdtltemp->weight_bt48 = $rcvrxgrbtsdtltemp->weight_bt49;
            } elseif ($i == 49){
               $rcvrxgrbtsdtltemp->weight_bt49 = $rcvrxgrbtsdtltemp->weight_bt50;
            } elseif ($i == 50){
               $rcvrxgrbtsdtltemp->weight_bt50 = 0;
            } 
         }
          $rcvrxgrbtsdtltemp->lastupdate = $now;
          $rcvrxgrbtsdtltemp->update_by = $request->usercode; 
          $rcvrxgrbtsdtltemp->timestamps = false;
          $rcvrxgrbtsdtltemp->save();
          $rcvrxgrbtsdtltemp->timestamps = true;
          

          $tonase = 
             $rcvrxgrbtsdtltemp->weight_bt01 + 
             $rcvrxgrbtsdtltemp->weight_bt02 + 
             $rcvrxgrbtsdtltemp->weight_bt03 + 
             $rcvrxgrbtsdtltemp->weight_bt04 +
             $rcvrxgrbtsdtltemp->weight_bt05 +
             $rcvrxgrbtsdtltemp->weight_bt06 +
             $rcvrxgrbtsdtltemp->weight_bt07 +
             $rcvrxgrbtsdtltemp->weight_bt08 +
             $rcvrxgrbtsdtltemp->weight_bt09 +
             $rcvrxgrbtsdtltemp->weight_bt10 +
             $rcvrxgrbtsdtltemp->weight_bt11 +
             $rcvrxgrbtsdtltemp->weight_bt12 +
             $rcvrxgrbtsdtltemp->weight_bt13 +
             $rcvrxgrbtsdtltemp->weight_bt14 +
             $rcvrxgrbtsdtltemp->weight_bt15 +
             $rcvrxgrbtsdtltemp->weight_bt16 +
             $rcvrxgrbtsdtltemp->weight_bt17 +
             $rcvrxgrbtsdtltemp->weight_bt18 +
             $rcvrxgrbtsdtltemp->weight_bt19 +
             $rcvrxgrbtsdtltemp->weight_bt20 +
             $rcvrxgrbtsdtltemp->weight_bt21 +
             $rcvrxgrbtsdtltemp->weight_bt22 +
             $rcvrxgrbtsdtltemp->weight_bt23 +
             $rcvrxgrbtsdtltemp->weight_bt24 +
             $rcvrxgrbtsdtltemp->weight_bt25 +
             $rcvrxgrbtsdtltemp->weight_bt26 +
             $rcvrxgrbtsdtltemp->weight_bt27 +
             $rcvrxgrbtsdtltemp->weight_bt28 +
             $rcvrxgrbtsdtltemp->weight_bt29 +
             $rcvrxgrbtsdtltemp->weight_bt30 +
             $rcvrxgrbtsdtltemp->weight_bt31 +
             $rcvrxgrbtsdtltemp->weight_bt32 +
             $rcvrxgrbtsdtltemp->weight_bt33 +
             $rcvrxgrbtsdtltemp->weight_bt34 +
             $rcvrxgrbtsdtltemp->weight_bt35 +
             $rcvrxgrbtsdtltemp->weight_bt36 +
             $rcvrxgrbtsdtltemp->weight_bt37 +
             $rcvrxgrbtsdtltemp->weight_bt38 +
             $rcvrxgrbtsdtltemp->weight_bt39 +
             $rcvrxgrbtsdtltemp->weight_bt40 +
             $rcvrxgrbtsdtltemp->weight_bt41 +
             $rcvrxgrbtsdtltemp->weight_bt42 +
             $rcvrxgrbtsdtltemp->weight_bt43 +
             $rcvrxgrbtsdtltemp->weight_bt44 +
             $rcvrxgrbtsdtltemp->weight_bt45 +
             $rcvrxgrbtsdtltemp->weight_bt46 +
             $rcvrxgrbtsdtltemp->weight_bt47 +
             $rcvrxgrbtsdtltemp->weight_bt48 +
             $rcvrxgrbtsdtltemp->weight_bt49 +
             $rcvrxgrbtsdtltemp->weight_bt50;

          $krj = 
             ($rcvrxgrbtsdtltemp->weight_bt01==0?0:1) + 
             ($rcvrxgrbtsdtltemp->weight_bt02==0?0:1) + 
             ($rcvrxgrbtsdtltemp->weight_bt03==0?0:1) + 
             ($rcvrxgrbtsdtltemp->weight_bt04==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt05==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt06==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt07==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt08==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt09==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt10==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt11==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt12==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt13==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt14==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt15==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt16==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt17==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt18==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt19==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt20==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt21==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt22==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt23==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt24==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt25==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt26==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt27==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt28==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt29==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt30==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt31==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt32==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt33==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt34==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt35==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt36==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt37==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt38==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt39==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt40==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt41==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt42==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt43==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt44==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt45==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt46==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt47==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt48==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt49==0?0:1) +
             ($rcvrxgrbtsdtltemp->weight_bt50==0?0:1);
          
          $rcvrxgrbtshdrtemp->weight_totalbt = $tonase;
          $rcvrxgrbtshdrtemp->total_keranjang = $krj;
          if ($request->flag_update == ''){
            $rcvrxgrbtshdrtemp->status_data = '5'; 
          }
          $rcvrxgrbtshdrtemp->update_by = $request->usercode; 
          $rcvrxgrbtshdrtemp->timestamps = false;
          $rcvrxgrbtshdrtemp->save();
          $rcvrxgrbtshdrtemp->timestamps = true;

          $krj = [];
          $krj['weight_bt01'] =  $rcvrxgrbtsdtltemp->weight_bt01+0;
          $krj['weight_bt02'] =  $rcvrxgrbtsdtltemp->weight_bt02+0;
          $krj['weight_bt03'] =  $rcvrxgrbtsdtltemp->weight_bt03+0;
          $krj['weight_bt04'] =  $rcvrxgrbtsdtltemp->weight_bt04+0;
          $krj['weight_bt05'] =  $rcvrxgrbtsdtltemp->weight_bt05+0;
          $krj['weight_bt06'] =  $rcvrxgrbtsdtltemp->weight_bt06+0;
          $krj['weight_bt07'] =  $rcvrxgrbtsdtltemp->weight_bt07+0;
          $krj['weight_bt08'] =  $rcvrxgrbtsdtltemp->weight_bt08+0;
          $krj['weight_bt09'] =  $rcvrxgrbtsdtltemp->weight_bt09+0;

          $krj['weight_bt10'] =  $rcvrxgrbtsdtltemp->weight_bt10+0;
          $krj['weight_bt11'] =  $rcvrxgrbtsdtltemp->weight_bt11+0;
          $krj['weight_bt12'] =  $rcvrxgrbtsdtltemp->weight_bt12+0;
          $krj['weight_bt13'] =  $rcvrxgrbtsdtltemp->weight_bt13+0;
          $krj['weight_bt14'] =  $rcvrxgrbtsdtltemp->weight_bt14+0;
          $krj['weight_bt15'] =  $rcvrxgrbtsdtltemp->weight_bt15+0;
          $krj['weight_bt16'] =  $rcvrxgrbtsdtltemp->weight_bt16+0;
          $krj['weight_bt17'] =  $rcvrxgrbtsdtltemp->weight_bt17+0;
          $krj['weight_bt18'] =  $rcvrxgrbtsdtltemp->weight_bt18+0;
          $krj['weight_bt19'] =  $rcvrxgrbtsdtltemp->weight_bt19+0;

          $krj['weight_bt20'] =  $rcvrxgrbtsdtltemp->weight_bt20+0;
          $krj['weight_bt21'] =  $rcvrxgrbtsdtltemp->weight_bt21+0;
          $krj['weight_bt22'] =  $rcvrxgrbtsdtltemp->weight_bt22+0;
          $krj['weight_bt23'] =  $rcvrxgrbtsdtltemp->weight_bt23+0;
          $krj['weight_bt24'] =  $rcvrxgrbtsdtltemp->weight_bt24+0;
          $krj['weight_bt25'] =  $rcvrxgrbtsdtltemp->weight_bt25+0;
          $krj['weight_bt26'] =  $rcvrxgrbtsdtltemp->weight_bt26+0;
          $krj['weight_bt27'] =  $rcvrxgrbtsdtltemp->weight_bt27+0;
          $krj['weight_bt28'] =  $rcvrxgrbtsdtltemp->weight_bt28+0;
          $krj['weight_bt29'] =  $rcvrxgrbtsdtltemp->weight_bt29+0;

          $krj['weight_bt30'] =  $rcvrxgrbtsdtltemp->weight_bt30+0;
          $krj['weight_bt31'] =  $rcvrxgrbtsdtltemp->weight_bt31+0;
          $krj['weight_bt32'] =  $rcvrxgrbtsdtltemp->weight_bt32+0;
          $krj['weight_bt33'] =  $rcvrxgrbtsdtltemp->weight_bt33+0;
          $krj['weight_bt34'] =  $rcvrxgrbtsdtltemp->weight_bt34+0;
          $krj['weight_bt35'] =  $rcvrxgrbtsdtltemp->weight_bt35+0;
          $krj['weight_bt36'] =  $rcvrxgrbtsdtltemp->weight_bt36+0;
          $krj['weight_bt37'] =  $rcvrxgrbtsdtltemp->weight_bt37+0;
          $krj['weight_bt38'] =  $rcvrxgrbtsdtltemp->weight_bt38+0;
          $krj['weight_bt39'] =  $rcvrxgrbtsdtltemp->weight_bt39+0;

          $krj['weight_bt40'] =  $rcvrxgrbtsdtltemp->weight_bt40+0;
          $krj['weight_bt41'] =  $rcvrxgrbtsdtltemp->weight_bt41+0;
          $krj['weight_bt42'] =  $rcvrxgrbtsdtltemp->weight_bt42+0;
          $krj['weight_bt43'] =  $rcvrxgrbtsdtltemp->weight_bt43+0;
          $krj['weight_bt44'] =  $rcvrxgrbtsdtltemp->weight_bt44+0;
          $krj['weight_bt45'] =  $rcvrxgrbtsdtltemp->weight_bt45+0;
          $krj['weight_bt46'] =  $rcvrxgrbtsdtltemp->weight_bt46+0;
          $krj['weight_bt47'] =  $rcvrxgrbtsdtltemp->weight_bt47+0;
          $krj['weight_bt48'] =  $rcvrxgrbtsdtltemp->weight_bt48+0;
          $krj['weight_bt49'] =  $rcvrxgrbtsdtltemp->weight_bt49+0;
          $krj['weight_bt50'] =  $rcvrxgrbtsdtltemp->weight_bt50+0;

          DB::commit();
      } catch (\Exception $e) {
          DB::rollback();
          return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
          'code'     => 200, 
          'message'  => 'sukses',
          'totalkg'  => $rcvrxgrbtshdrtemp->weight_totalbt + 0,
          'totalkrj' => $rcvrxgrbtshdrtemp->total_keranjang,
          'totalbkn' => $rcvrxgrbtshdrtemp->weight_chsbroken + 0,
          'listkrj' => $krj
      ]);
  }

    function displaytonase(Request $request){
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
      $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
         ->where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtshdrtemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
      }
      // proses save
      

      DB::beginTransaction();
      try {
         $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
         $tonase = 
            $rcvrxgrbtsdtltemp->weight_bt01 + 
            $rcvrxgrbtsdtltemp->weight_bt02 + 
            $rcvrxgrbtsdtltemp->weight_bt03 + 
            $rcvrxgrbtsdtltemp->weight_bt04 +
            $rcvrxgrbtsdtltemp->weight_bt05 +
            $rcvrxgrbtsdtltemp->weight_bt06 +
            $rcvrxgrbtsdtltemp->weight_bt07 +
            $rcvrxgrbtsdtltemp->weight_bt08 +
            $rcvrxgrbtsdtltemp->weight_bt09 +
            $rcvrxgrbtsdtltemp->weight_bt10 +
            $rcvrxgrbtsdtltemp->weight_bt11 +
            $rcvrxgrbtsdtltemp->weight_bt12 +
            $rcvrxgrbtsdtltemp->weight_bt13 +
            $rcvrxgrbtsdtltemp->weight_bt14 +
            $rcvrxgrbtsdtltemp->weight_bt15 +
            $rcvrxgrbtsdtltemp->weight_bt16 +
            $rcvrxgrbtsdtltemp->weight_bt17 +
            $rcvrxgrbtsdtltemp->weight_bt18 +
            $rcvrxgrbtsdtltemp->weight_bt19 +
            $rcvrxgrbtsdtltemp->weight_bt20 +
            $rcvrxgrbtsdtltemp->weight_bt21 +
            $rcvrxgrbtsdtltemp->weight_bt22 +
            $rcvrxgrbtsdtltemp->weight_bt23 +
            $rcvrxgrbtsdtltemp->weight_bt24 +
            $rcvrxgrbtsdtltemp->weight_bt25 +
            $rcvrxgrbtsdtltemp->weight_bt26 +
            $rcvrxgrbtsdtltemp->weight_bt27 +
            $rcvrxgrbtsdtltemp->weight_bt28 +
            $rcvrxgrbtsdtltemp->weight_bt29 +
            $rcvrxgrbtsdtltemp->weight_bt30 +
            $rcvrxgrbtsdtltemp->weight_bt31 +
            $rcvrxgrbtsdtltemp->weight_bt32 +
            $rcvrxgrbtsdtltemp->weight_bt33 +
            $rcvrxgrbtsdtltemp->weight_bt34 +
            $rcvrxgrbtsdtltemp->weight_bt35 +
            $rcvrxgrbtsdtltemp->weight_bt36 +
            $rcvrxgrbtsdtltemp->weight_bt37 +
            $rcvrxgrbtsdtltemp->weight_bt38 +
            $rcvrxgrbtsdtltemp->weight_bt39 +
            $rcvrxgrbtsdtltemp->weight_bt40 +
            $rcvrxgrbtsdtltemp->weight_bt41 +
            $rcvrxgrbtsdtltemp->weight_bt42 +
            $rcvrxgrbtsdtltemp->weight_bt43 +
            $rcvrxgrbtsdtltemp->weight_bt44 +
            $rcvrxgrbtsdtltemp->weight_bt45 +
            $rcvrxgrbtsdtltemp->weight_bt46 +
            $rcvrxgrbtsdtltemp->weight_bt47 +
            $rcvrxgrbtsdtltemp->weight_bt48 +
            $rcvrxgrbtsdtltemp->weight_bt49 +
            $rcvrxgrbtsdtltemp->weight_bt50 +
            $rcvrxgrbtshdrtemp->weight_chsbroken;
      } catch (\Exception $e) {
          return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
          'code'     => 200, 
          'message'  => 'sukses',
          'total'  => $tonase
      ]);
  }
}
