<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rcvrsusers;
use App\Models\Rcvrmplant;
use App\Models\Dailyharvest;
use App\Models\Plasma;
use App\Models\Rcvrxgrbtshdr;
use App\Models\Rcvrxgrbtsdtl;
use App\Models\Rcvrxgrbtshdrtemp;
use App\Models\Rcvrxgrbtsdtltemp;
use App\Models\Tblhelp;
use App\Models\Tcounter;
use Carbon\Carbon;
use Illuminate\Support\Str;
use DB;

class InputsamplingController extends Controller
{
    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }

    function sampling(Request $request){
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
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }

      DB::beginTransaction();
      try {
          $rcvrxgrbtsdtltemp->docno = $request->docno;
          if ($request->status == 'EKOR'){
            if ($request->keranjang == 1){
               $rcvrxgrbtsdtltemp->qty_samp01 = $request->ekor;
            } elseif ($request->keranjang == 2){
               $rcvrxgrbtsdtltemp->qty_samp02 = $request->ekor;
            } elseif ($request->keranjang == 3){
               $rcvrxgrbtsdtltemp->qty_samp03 = $request->ekor;
            } elseif ($request->keranjang == 4){
               $rcvrxgrbtsdtltemp->qty_samp04 = $request->ekor;
            } elseif ($request->keranjang == 5){
               $rcvrxgrbtsdtltemp->qty_samp05 = $request->ekor;
            } elseif ($request->keranjang == 6){
               $rcvrxgrbtsdtltemp->qty_samp06 = $request->ekor;
            } elseif ($request->keranjang == 7){
               $rcvrxgrbtsdtltemp->qty_samp07 = $request->ekor;
            } elseif ($request->keranjang == 8){
               $rcvrxgrbtsdtltemp->qty_samp08 = $request->ekor;
            } elseif ($request->keranjang == 9){
               $rcvrxgrbtsdtltemp->qty_samp09 = $request->ekor;
            } 
         }
          $rcvrxgrbtsdtltemp->lastupdate = $now;
          $rcvrxgrbtsdtltemp->update_by = $request->usercode; 
          $rcvrxgrbtsdtltemp->timestamps = false;
          $rcvrxgrbtsdtltemp->save();
          $rcvrxgrbtsdtltemp->timestamps = true;

          $ekor = 
             $rcvrxgrbtsdtltemp->qty_samp01 + 
             $rcvrxgrbtsdtltemp->qty_samp02 + 
             $rcvrxgrbtsdtltemp->qty_samp03 + 
             $rcvrxgrbtsdtltemp->qty_samp04 +
             $rcvrxgrbtsdtltemp->qty_samp05 +
             $rcvrxgrbtsdtltemp->qty_samp06 +
             $rcvrxgrbtsdtltemp->qty_samp07 +
             $rcvrxgrbtsdtltemp->qty_samp08 +
             $rcvrxgrbtsdtltemp->qty_samp09;
          
         $rcvrxgrbtshdrtemp->qty_totalsamp = $ekor;
         if ($request->status <> 'EKOR'){
            $rcvrxgrbtshdrtemp->weight_totalsamp = $request->berat;
         }
         if ($rcvrxgrbtshdrtemp->weight_totalsamp > 0){
            $rcvrxgrbtshdrtemp->rata_size = round($rcvrxgrbtshdrtemp->qty_totalsamp / $rcvrxgrbtshdrtemp->weight_totalsamp, 0);
         }
         if ($request->flag_update == ''){
            $rcvrxgrbtshdrtemp->status_data = '6'; 
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
          'totalek'  => $rcvrxgrbtshdrtemp->qty_totalsamp + 0,
          'totalkg'  => $rcvrxgrbtshdrtemp->weight_totalsamp + 0,
          'ratarata'  => $rcvrxgrbtshdrtemp->rata_size + 0,

      ]);
  }

  function delsampling(Request $request){
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
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }

      DB::beginTransaction();
      try {
         $rcvrxgrbtsdtltemp->docno = $request->docno;
         for ($i=$request->keranjang; $i < 10 ; $i++) { 
            
            if ($i == 1){
               $rcvrxgrbtsdtltemp->qty_samp01 = $rcvrxgrbtsdtltemp->qty_samp02;
            } elseif ($i == 2){
               $rcvrxgrbtsdtltemp->qty_samp02 = $rcvrxgrbtsdtltemp->qty_samp03;
            } elseif ($i == 3){
               $rcvrxgrbtsdtltemp->qty_samp03 = $rcvrxgrbtsdtltemp->qty_samp04;
            } elseif ($i == 4){
               $rcvrxgrbtsdtltemp->qty_samp04 = $rcvrxgrbtsdtltemp->qty_samp05;
            } elseif ($i == 5){
               $rcvrxgrbtsdtltemp->qty_samp05 = $rcvrxgrbtsdtltemp->qty_samp06;
            } elseif ($i == 6){
               $rcvrxgrbtsdtltemp->qty_samp06 = $rcvrxgrbtsdtltemp->qty_samp07;
            } elseif ($i == 7){
               $rcvrxgrbtsdtltemp->qty_samp07 = $rcvrxgrbtsdtltemp->qty_samp08;
            } elseif ($i == 8){
               $rcvrxgrbtsdtltemp->qty_samp08 = $rcvrxgrbtsdtltemp->qty_samp09;
            } elseif ($i == 9){
               $rcvrxgrbtsdtltemp->qty_samp09 = 0;
            } 
         }
         $rcvrxgrbtsdtltemp->lastupdate = $now;
         $rcvrxgrbtsdtltemp->update_by = $request->usercode; 
         $rcvrxgrbtsdtltemp->timestamps = false;
         $rcvrxgrbtsdtltemp->save();
         $rcvrxgrbtsdtltemp->timestamps = true;

         $ekor = 
            $rcvrxgrbtsdtltemp->qty_samp01 + 
            $rcvrxgrbtsdtltemp->qty_samp02 + 
            $rcvrxgrbtsdtltemp->qty_samp03 + 
            $rcvrxgrbtsdtltemp->qty_samp04 +
            $rcvrxgrbtsdtltemp->qty_samp05 +
            $rcvrxgrbtsdtltemp->qty_samp06 +
            $rcvrxgrbtsdtltemp->qty_samp07 +
            $rcvrxgrbtsdtltemp->qty_samp08 +
            $rcvrxgrbtsdtltemp->qty_samp09;
         
         $rcvrxgrbtshdrtemp->qty_totalsamp = $ekor;
         if ($rcvrxgrbtshdrtemp->weight_totalsamp > 0){
            $rcvrxgrbtshdrtemp->rata_size = round($rcvrxgrbtshdrtemp->qty_totalsamp / $rcvrxgrbtshdrtemp->weight_totalsamp, 0);
         }
         if ($request->flag_update == ''){
            $rcvrxgrbtshdrtemp->status_data = '6'; 
         }

         $rcvrxgrbtshdrtemp->qty_qastd    = round(($rcvrxgrbtshdrtemp->qty_totalsamp/100)*$rcvrxgrbtshdrtemp->persen_qastd,0);
         $rcvrxgrbtshdrtemp->qty_qabs     = $rcvrxgrbtshdrtemp->qty_totalsamp - $rcvrxgrbtshdrtemp->qty_qastd; 
         $rcvrxgrbtshdrtemp->weight_qastd = round(($rcvrxgrbtshdrtemp->weight_totalsamp/100)*$rcvrxgrbtshdrtemp->persen_qastd,2); 
         $rcvrxgrbtshdrtemp->weight_qabs  = $rcvrxgrbtshdrtemp->weight_totalsamp - $rcvrxgrbtshdrtemp->weight_qastd;  

         $rcvrxgrbtshdrtemp->update_by = $request->usercode; 
         $rcvrxgrbtshdrtemp->timestamps = false;
         $rcvrxgrbtshdrtemp->save();
         $rcvrxgrbtshdrtemp->timestamps = true;

         $krj = [];
         $krj['qty_samp01'] =  $rcvrxgrbtsdtltemp->qty_samp01+0;
         $krj['qty_samp02'] =  $rcvrxgrbtsdtltemp->qty_samp02+0;
         $krj['qty_samp03'] =  $rcvrxgrbtsdtltemp->qty_samp03+0;
         $krj['qty_samp04'] =  $rcvrxgrbtsdtltemp->qty_samp04+0;
         $krj['qty_samp05'] =  $rcvrxgrbtsdtltemp->qty_samp05+0;
         $krj['qty_samp06'] =  $rcvrxgrbtsdtltemp->qty_samp06+0;
         $krj['qty_samp07'] =  $rcvrxgrbtsdtltemp->qty_samp07+0;
         $krj['qty_samp08'] =  $rcvrxgrbtsdtltemp->qty_samp08+0;
         $krj['qty_samp09'] =  $rcvrxgrbtsdtltemp->qty_samp09+0;

         DB::commit();

      } catch (\Exception $e) {
         DB::rollback();
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }

      return response()->json([
         'code'     => 200, 
         'message'  => 'sukses',
         'totalek'  => $rcvrxgrbtshdrtemp->qty_totalsamp + 0,
         'totalkg'  => $rcvrxgrbtshdrtemp->weight_totalsamp + 0,
         'ratarata'  => $rcvrxgrbtshdrtemp->rata_size + 0,
         'listkrj' => $krj
      ]);
   }

  function tonase(Request $request){
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
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }
      DB::beginTransaction();
      try {
         if ($request->weight_chsstd + $request->weight_chsbs == 0){
            $rcvrxgrbtshdrtemp->weight_totalchs = $rcvrxgrbtshdrtemp->weight_chsbroken; 
         } else {
            $rcvrxgrbtshdrtemp->weight_chsstd = $request->weight_chsstd; 
            $rcvrxgrbtshdrtemp->weight_chsbs = $request->weight_chsbs; 
            $rcvrxgrbtshdrtemp->weight_totalchs = $request->weight_chsstd + $request->weight_chsbs + $rcvrxgrbtshdrtemp->weight_chsbroken; 
            if ($request->flag_update == ''){
               $rcvrxgrbtshdrtemp->status_data = '7'; 
            }

            if ($rcvrxgrbtshdrtemp->weight_totalchs > 0)
            {
               $rcvrxgrbtshdrtemp->persen_qastd = round(($rcvrxgrbtshdrtemp->weight_chsstd / ($rcvrxgrbtshdrtemp->weight_totalchs - $rcvrxgrbtshdrtemp->weight_chsbroken )) * 100, 2); 
               $rcvrxgrbtshdrtemp->persen_qabs = round(($rcvrxgrbtshdrtemp->weight_chsbs / ($rcvrxgrbtshdrtemp->weight_totalchs - $rcvrxgrbtshdrtemp->weight_chsbroken)) * 100, 2); 
            }
            // standar jumlah (ekor) 	= round ((qty_totalsamp/100)*persen_qastd,0)					
            // below standar jumlah (ekor) 	= 100 - standar jumlah (ekor)					
            // standar berat (kg)	= round((weight_totalsamp/100)*persen_qastd,2)					
            // below standar berat (kg)	=100 - standard berat(kg)					

            $rcvrxgrbtshdrtemp->qty_qastd    = round(($rcvrxgrbtshdrtemp->qty_totalsamp/100)*$rcvrxgrbtshdrtemp->persen_qastd,0);
            $rcvrxgrbtshdrtemp->qty_qabs     = $rcvrxgrbtshdrtemp->qty_totalsamp - $rcvrxgrbtshdrtemp->qty_qastd; 
            $rcvrxgrbtshdrtemp->weight_qastd = round(($rcvrxgrbtshdrtemp->weight_totalsamp/100)*$rcvrxgrbtshdrtemp->persen_qastd,2); 
            $rcvrxgrbtshdrtemp->weight_qabs  = $rcvrxgrbtshdrtemp->weight_totalsamp - $rcvrxgrbtshdrtemp->weight_qastd;  

            // if ($rcvrxgrbtshdrtemp->weight_totalchs > 0){
            //    // round((weight_chsstd/weight_totalchs)*100,2)
            //    // round((weight_chsbs/weight_totalchs)*100,2)
            //    $rcvrxgrbtshdrtemp->persen_qastd = round(($rcvrxgrbtshdrtemp->weight_chsstd / $rcvrxgrbtshdrtemp->weight_totalchs) * 100, 2); 
            //    $rcvrxgrbtshdrtemp->persen_qabs = round(($rcvrxgrbtshdrtemp->weight_chsbs / $rcvrxgrbtshdrtemp->weight_totalchs) * 100, 2); 
            // }

                              
                        
						

            $rcvrxgrbtshdrtemp->update_by = $request->usercode; 
            $rcvrxgrbtshdrtemp->timestamps = false;
            $rcvrxgrbtshdrtemp->save();
            $rcvrxgrbtshdrtemp->timestamps = true;
            DB::commit();
         }
      } catch (\Exception $e) {
         DB::rollback();
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'     => 200, 
         'message'  => 'sukses',
         'totalbkn'  => $rcvrxgrbtshdrtemp->weight_chsbroken + 0,
         'total'  => $rcvrxgrbtshdrtemp->weight_totalchs + 0
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
      $now = Carbon::now();
      // validasi
      $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
         ->where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtshdrtemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
      }
      // proses save
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }

      DB::beginTransaction();
      try {
         
         // qa_grade
         // qty_qastd
         // qty_qabs
         // weight_qabs
         // weight_qastd
   
         $rcvrxgrbtshdrtemp->qa_grade = $request->qa_grade; 


         if ($request->flag_update == ''){
            $rcvrxgrbtshdrtemp->status_data = '8'; 
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
         'persen_qastd' => $rcvrxgrbtshdrtemp->persen_qastd + 0,
         'persen_qabs' => $rcvrxgrbtshdrtemp->persen_qabs + 0
      ]);
   }

   function savedata(Request $request){
      
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
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }

      DB::beginTransaction();
      try {
         $dailyharvest = Dailyharvest::where('docno', '=', $request->docno)
            ->first();
         if ($rcvrxgrbtshdrtemp->qa_grade == ''){  
            $dailyharvest->status_data = 'Q';
         } else {
            $dailyharvest->status_data = 'W';
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
         'code'     => 200, 
         'message'  => 'sukses'
      ]);
   }

   function displayhasilinput(Request $request){
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


      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
      try {
         $now = Carbon::now();
         $startDate = time();
         $now1 = date('Y-m-d', strtotime('-1 day', $startDate));
         $dailyharvest = DB::table('rcvrx_dailyharvest as a')
         ->join('rcvrm_plasma as b', function($join){
            $join->on('b.pond_address', '=', 'a.pond_address' )
            ->on('b.bukrs', '=', 'a.company_code');
         })
         ->join('rcvrx_grbtshdr_temp as c', 'c.docno' ,'=', 'a.docno')
         // ->where('a.harvest_date', '>=', $now->format('Y-m-d'))
         ->where('a.harvest_date', '>=', $now1)
         ->where('a.company_code', '=', $plant->companycode)
         ->wherein('a.status_data', ['D','W','Q'])
         ->select('c.id', 'a.docno', 'a.pond_address', 'b.fname', 'b.registerno', 'b.owner', 'a.status_data', 'b.alamat_rmh', 
         'c.trip_to', 'a.picking', 'qty_qastd', 'qty_qabs', 'weight_qastd', 'weight_qabs', 'persen_qastd','persen_qabs')
         // ->select('c.id', 'a.docno', 'a.pond_address', 'b.fname', 'b.registerno', 'b.owner', 'a.status_data', 'b.alamat_rmh', 
         // 'c.trip_to')
         ->get();

         $passw_delete = Tblhelp::where('fkey1', '=', 'PASSW_DELETE')->where('fkey2', '=', $plant->companycode)->select('data1')->first();
         $passw_change = Tblhelp::where('fkey1', '=', 'PASSW_CHANGE')->where('fkey2', '=', $plant->companycode)->select('data1')->first();
         $passw_final  = Tblhelp::where('fkey1', '=', 'PASSW_FINAL')->where('fkey2', '=', $plant->companycode)->select('data1')->first();

      } catch (\Exception $e) {
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'        => 200, 
         'message'     => 'sukses',
         'listinputpanen' => $dailyharvest,
         'passw_delete' => $passw_delete,
         'passw_change' => $passw_change,
         'passw_final' => $passw_final 
      ]);
   }

   function displayselesaiapprove(Request $request){
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


      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
     
      try {
         $now = Carbon::now();
         $startDate = time();
         $now1 = date('Y-m-d', strtotime('-1 day', $startDate));

         $dailyharvest = DB::table('rcvrx_grbtshdr as c')
         ->join('rcvrx_dailyharvest as a', function($join){
            $join->on('c.pond_addr', '=', 'a.pond_address' );
         })
         ->join('rcvrm_plasma as b', function($join){
            $join->on('b.pond_address', '=', 'a.pond_address' )
            ->on('b.bukrs', '=', 'a.company_code');
         })
         ->where('a.harvest_date', '=', $now->format('Y-m-d'))
         ->where('a.company_code', '=', $plant->companycode)

         ->where('c.plantcode', '=', $user->plantkode)

         ->select('c.id', 'c.docno', 'a.pond_address', 'b.fname', 'b.registerno', 'b.owner', 'a.status_data', 'b.alamat_rmh', 'c.trip_to')
         ->get();

         // $sql = "
         //    SELECT a.id, a.docno, a.pond_addr pond_address, c.fname, c.registerno, c.owner, a.status_data, c.alamat_rmh, a.trip_to
         //    FROM rcvrx_grbtshdr a
         //    INNER JOIN (
         //       SELECT a.plantcode, a.pond_addr, a.harvest_date 
         //       FROM rcvrx_grbtshdr a
         //       WHERE a.trip_to = 1 AND a.harvest_date = '".$now."'
         //       AND a.plantcode = '".$user->plantkode."'
         //    ) b ON a.plantcode = b.plantcode AND a.pond_addr = b.pond_addr
         //    AND a.harvest_date BETWEEN '".$now1."' AND '".$now."'
         //    INNER JOIN rcvrm_plasma AS c ON c.pond_address = a.pond_addr AND c.bukrs = '1440'
         
         // ";
         

         // $passw_delete = Tblhelp::where('fkey1', '=', 'PASSW_DELETE')->where('fkey2', '=', $plant->companycode)->select('data1')->first();
         // $passw_change = Tblhelp::where('fkey1', '=', 'PASSW_CHANGE')->where('fkey2', '=', $plant->companycode)->select('data1')->first();
         // $passw_final  = Tblhelp::where('fkey1', '=', 'PASSW_FINAL')->where('fkey2', '=', $plant->companycode)->select('data1')->first();

      } catch (\Exception $e) {
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'        => 200, 
         'message'     => 'sukses',
         'listinputpanen' => $dailyharvest,
         // 'passw_delete' => $passw_delete,
         // 'passw_change' => $passw_change,
         // 'passw_final' => $passw_final 
      ]);
   }

   function dibatalkan(Request $request){
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
      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
      $now = Carbon::now();
      // validasi
      $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
         ->where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtshdrtemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
      }
      // proses save
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }

      $tbl = Tblhelp::where('fkey1', '=', 'PASSW_DELETE')
         ->where('fkey2', '=', $plant->companycode)
         ->where('data1', '=', $request->pass_delete)
         ->first();
      if (!$tbl){
         return response()->json(['code'=>500, 'message' => 'Password Salah. Ulangi Lagi']);
      }
      

      DB::beginTransaction();
      try {

         $dailyharvest = Dailyharvest::where('docno', '=', $request->docno)
            ->first();
         if ($rcvrxgrbtshdrtemp->trip_to > 1){
            $old = Rcvrxgrbtsdtltemp::where('pond_addr', '=', $rcvrxgrbtshdrtemp->pond_addr)
            ->where('plantcode', '=', $rcvrxgrbtshdrtemp->plantcode)
            ->where('harvest_date', '=', $rcvrxgrbtshdrtemp->harvest_date)
            ->where('trip_to', '=', $rcvrxgrbtshdrtemp->trip_to - 1)
            ->first();
            $dailyharvest->docno = $old->doc_no;
         } else {
            $dailyharvest->docno = '';
         }
         $dailyharvest->status_data = 'T';
         $dailyharvest->timestamps = false;
         $dailyharvest->save();
         $dailyharvest->timestamps = true;

         $rcvrxgrbtshdrtemp->delete();
         $rcvrxgrbtsdtltemp->delete();
         // DB::rollback();
         DB::commit();
      } catch (\Exception $e) {
         DB::rollback();
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'     => 200, 
         'message'  => 'sukses',
         'docno' => $request->docno
      ]);
   }

   function diapprove(Request $request){
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
      $approve = $request->approve;
      if ($approve == ''){
         $approve = 'F';
      }
      // validasi
      $rcvrxgrbtshdrtemp = Rcvrxgrbtshdrtemp::where('id', '=', $request->id)
         ->where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtshdrtemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Data']);
      }
      if ($rcvrxgrbtshdrtemp->qa_grade == ''){
         return response()->json(['code'=>500, 'message' => 'Grade belum di input']);
      }
      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
      // proses save
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }
      if ($request->status == 'CHANGE'){
         $tbl = Tblhelp::where('fkey1', '=', 'PASSW_CHANGE')
            ->where('fkey2', '=', $plant->companycode)
            ->where('data1', '=', $request->pass_change)
            ->first();
      } else if ($request->status == 'APPROVE'){
         $tbl = Tblhelp::where('fkey1', '=', 'PASSW_FINAL')
            ->where('fkey2', '=', $plant->companycode)
            ->where('data1', '=', $request->pass_change)
            ->first();
      } else {
         return response()->json(['code'=>500, 'message' => 'status APPROVE/CHANGE']);
      }
      if (!$tbl){
         return response()->json(['code'=>500, 'message' => 'Password Salah. Ulangi Lagi']);
      }

      DB::beginTransaction();
      try {
         $dailyharvest = Dailyharvest::where('docno', '=', $request->docno)
            ->first();
         if ($request->status == 'CHANGE'){
            $dailyharvest->status_data = 'D';
            $dailyharvest->timestamps = false;
            $dailyharvest->save();
            $dailyharvest->timestamps = true;
         } else {
            $dailyharvest->status_data = $approve;
            $dailyharvest->timestamps = false;
            $dailyharvest->save();
            $dailyharvest->timestamps = true;

            $rcvrxgrbtshdr = new Rcvrxgrbtshdr;
            $rcvrxgrbtshdr->docno =  $rcvrxgrbtshdrtemp->docno;
            $rcvrxgrbtshdr->plantcode = $rcvrxgrbtshdrtemp->plantcode;
            $rcvrxgrbtshdr->pond_addr = $rcvrxgrbtshdrtemp->pond_addr;
            $rcvrxgrbtshdr->lgort =  $rcvrxgrbtshdrtemp->lgort;
            $rcvrxgrbtshdr->harvest_date = $rcvrxgrbtshdrtemp->harvest_date;
            $rcvrxgrbtshdr->trip_to =  $rcvrxgrbtshdrtemp->trip_to;
            $rcvrxgrbtshdr->kschl =  $rcvrxgrbtshdrtemp->kschl;
            $rcvrxgrbtshdr->adj_price = $rcvrxgrbtshdrtemp->adj_price;
            $rcvrxgrbtshdr->type_of_shrimp = $rcvrxgrbtshdrtemp->type_of_shrimp;
            $rcvrxgrbtshdr->group_of_size = $rcvrxgrbtshdrtemp->group_of_size;
            $rcvrxgrbtshdr->mesin_timbang = $rcvrxgrbtshdrtemp->mesin_timbang;
            $rcvrxgrbtshdr->penimbang = $rcvrxgrbtshdrtemp->penimbang;
            $rcvrxgrbtshdr->trucknr =  $rcvrxgrbtshdrtemp->trucknr;
            $rcvrxgrbtshdr->total_blong = $rcvrxgrbtshdrtemp->total_blong;
            $rcvrxgrbtshdr->satuan_blong = $rcvrxgrbtshdrtemp->satuan_blong;
            $rcvrxgrbtshdr->arrival_date = $rcvrxgrbtshdrtemp->arrival_date;
            $rcvrxgrbtshdr->jam_datang = $rcvrxgrbtshdrtemp->jam_datang;
            $rcvrxgrbtshdr->jam_bongkar = $rcvrxgrbtshdrtemp->jam_bongkar;
            $rcvrxgrbtshdr->jam_selesaibongkar = $rcvrxgrbtshdrtemp->jam_selesaibongkar;
            $rcvrxgrbtshdr->jam_proses = $rcvrxgrbtshdrtemp->jam_proses;
            $rcvrxgrbtshdr->qa_condition = $rcvrxgrbtshdrtemp->qa_condition;
            $rcvrxgrbtshdr->weight_totalbt = $rcvrxgrbtshdrtemp->weight_totalbt;
            $rcvrxgrbtshdr->qty_totalsamp = $rcvrxgrbtshdrtemp->qty_totalsamp;
            $rcvrxgrbtshdr->weight_totalsamp = $rcvrxgrbtshdrtemp->weight_totalsamp;
            $rcvrxgrbtshdr->rata_size = $rcvrxgrbtshdrtemp->rata_size;
            $rcvrxgrbtshdr->weight_chsstd = $rcvrxgrbtshdrtemp->weight_chsstd;
            $rcvrxgrbtshdr->weight_chsbs = $rcvrxgrbtshdrtemp->weight_chsbs;
            $rcvrxgrbtshdr->weight_chsbroken = $rcvrxgrbtshdrtemp->weight_chsbroken;
            $rcvrxgrbtshdr->weight_totalchs = $rcvrxgrbtshdrtemp->weight_totalchs;
            $rcvrxgrbtshdr->qa_grade =  $rcvrxgrbtshdrtemp->qa_grade;
            $rcvrxgrbtshdr->qty_qastd = $rcvrxgrbtshdrtemp->qty_qastd;
            $rcvrxgrbtshdr->qty_qabs =  $rcvrxgrbtshdrtemp->qty_qabs;
            $rcvrxgrbtshdr->weight_qastd = $rcvrxgrbtshdrtemp->weight_qastd;
            $rcvrxgrbtshdr->weight_qabs = $rcvrxgrbtshdrtemp->weight_qabs;
            $rcvrxgrbtshdr->persen_qastd = $rcvrxgrbtshdrtemp->persen_qastd;
            $rcvrxgrbtshdr->persen_qabs = $rcvrxgrbtshdrtemp->persen_qabs;
            $rcvrxgrbtshdr->status_data = $rcvrxgrbtshdrtemp->status_data;
            $rcvrxgrbtshdr->lastupdate = $rcvrxgrbtshdrtemp->lastupdate;
            $rcvrxgrbtshdr->shrimp_condition = $rcvrxgrbtshdrtemp->shrimp_condition;
            $rcvrxgrbtshdr->temp_in_blong = $rcvrxgrbtshdrtemp->temp_in_blong;
            $rcvrxgrbtshdr->update_by = $request->usercode; 
            $rcvrxgrbtshdr->total_keranjang = $rcvrxgrbtshdrtemp->total_keranjang;
            $rcvrxgrbtshdr->timestamps = false;
            $rcvrxgrbtshdr->save();
            $rcvrxgrbtshdr->timestamps = true;

            $rcvrxgrbtsdtl = new Rcvrxgrbtsdtl;
            $rcvrxgrbtsdtl->docno = $rcvrxgrbtsdtltemp->docno; 
            $rcvrxgrbtsdtl->weight_bt01 = $rcvrxgrbtsdtltemp->weight_bt01; 
            $rcvrxgrbtsdtl->weight_bt02 = $rcvrxgrbtsdtltemp->weight_bt02; 
            $rcvrxgrbtsdtl->weight_bt03 = $rcvrxgrbtsdtltemp->weight_bt03; 
            $rcvrxgrbtsdtl->weight_bt04 = $rcvrxgrbtsdtltemp->weight_bt04; 
            $rcvrxgrbtsdtl->weight_bt05 = $rcvrxgrbtsdtltemp->weight_bt05; 
            $rcvrxgrbtsdtl->weight_bt06 = $rcvrxgrbtsdtltemp->weight_bt06; 
            $rcvrxgrbtsdtl->weight_bt07 = $rcvrxgrbtsdtltemp->weight_bt07; 
            $rcvrxgrbtsdtl->weight_bt08 = $rcvrxgrbtsdtltemp->weight_bt08; 
            $rcvrxgrbtsdtl->weight_bt09 = $rcvrxgrbtsdtltemp->weight_bt09; 
            $rcvrxgrbtsdtl->weight_bt10 = $rcvrxgrbtsdtltemp->weight_bt10; 
            $rcvrxgrbtsdtl->weight_bt11 = $rcvrxgrbtsdtltemp->weight_bt11; 
            $rcvrxgrbtsdtl->weight_bt12 = $rcvrxgrbtsdtltemp->weight_bt12; 
            $rcvrxgrbtsdtl->weight_bt13 = $rcvrxgrbtsdtltemp->weight_bt13; 
            $rcvrxgrbtsdtl->weight_bt14 = $rcvrxgrbtsdtltemp->weight_bt14; 
            $rcvrxgrbtsdtl->weight_bt15 = $rcvrxgrbtsdtltemp->weight_bt15; 
            $rcvrxgrbtsdtl->weight_bt16 = $rcvrxgrbtsdtltemp->weight_bt16; 
            $rcvrxgrbtsdtl->weight_bt17 = $rcvrxgrbtsdtltemp->weight_bt17; 
            $rcvrxgrbtsdtl->weight_bt18 = $rcvrxgrbtsdtltemp->weight_bt18; 
            $rcvrxgrbtsdtl->weight_bt19 = $rcvrxgrbtsdtltemp->weight_bt19; 
            $rcvrxgrbtsdtl->weight_bt20 = $rcvrxgrbtsdtltemp->weight_bt20; 
            $rcvrxgrbtsdtl->weight_bt21 = $rcvrxgrbtsdtltemp->weight_bt21; 
            $rcvrxgrbtsdtl->weight_bt22 = $rcvrxgrbtsdtltemp->weight_bt22; 
            $rcvrxgrbtsdtl->weight_bt23 = $rcvrxgrbtsdtltemp->weight_bt23; 
            $rcvrxgrbtsdtl->weight_bt24 = $rcvrxgrbtsdtltemp->weight_bt24; 
            $rcvrxgrbtsdtl->weight_bt25 = $rcvrxgrbtsdtltemp->weight_bt25; 
            $rcvrxgrbtsdtl->weight_bt26 = $rcvrxgrbtsdtltemp->weight_bt26; 
            $rcvrxgrbtsdtl->weight_bt27 = $rcvrxgrbtsdtltemp->weight_bt27; 
            $rcvrxgrbtsdtl->weight_bt28 = $rcvrxgrbtsdtltemp->weight_bt28; 
            $rcvrxgrbtsdtl->weight_bt29 = $rcvrxgrbtsdtltemp->weight_bt29; 
            $rcvrxgrbtsdtl->weight_bt30 = $rcvrxgrbtsdtltemp->weight_bt30; 
            $rcvrxgrbtsdtl->weight_bt31 = $rcvrxgrbtsdtltemp->weight_bt31; 
            $rcvrxgrbtsdtl->weight_bt32 = $rcvrxgrbtsdtltemp->weight_bt32; 
            $rcvrxgrbtsdtl->weight_bt33 = $rcvrxgrbtsdtltemp->weight_bt33; 
            $rcvrxgrbtsdtl->weight_bt34 = $rcvrxgrbtsdtltemp->weight_bt34; 
            $rcvrxgrbtsdtl->weight_bt35 = $rcvrxgrbtsdtltemp->weight_bt35; 
            $rcvrxgrbtsdtl->weight_bt36 = $rcvrxgrbtsdtltemp->weight_bt36; 
            $rcvrxgrbtsdtl->weight_bt37 = $rcvrxgrbtsdtltemp->weight_bt37; 
            $rcvrxgrbtsdtl->weight_bt38 = $rcvrxgrbtsdtltemp->weight_bt38; 
            $rcvrxgrbtsdtl->weight_bt39 = $rcvrxgrbtsdtltemp->weight_bt39; 
            $rcvrxgrbtsdtl->weight_bt40 = $rcvrxgrbtsdtltemp->weight_bt40; 
            $rcvrxgrbtsdtl->weight_bt41 = $rcvrxgrbtsdtltemp->weight_bt41; 
            $rcvrxgrbtsdtl->weight_bt42 = $rcvrxgrbtsdtltemp->weight_bt42; 
            $rcvrxgrbtsdtl->weight_bt43 = $rcvrxgrbtsdtltemp->weight_bt43; 
            $rcvrxgrbtsdtl->weight_bt44 = $rcvrxgrbtsdtltemp->weight_bt44; 
            $rcvrxgrbtsdtl->weight_bt45 = $rcvrxgrbtsdtltemp->weight_bt45; 
            $rcvrxgrbtsdtl->weight_bt46 = $rcvrxgrbtsdtltemp->weight_bt46; 
            $rcvrxgrbtsdtl->weight_bt47 = $rcvrxgrbtsdtltemp->weight_bt47; 
            $rcvrxgrbtsdtl->weight_bt48 = $rcvrxgrbtsdtltemp->weight_bt48; 
            $rcvrxgrbtsdtl->weight_bt49 = $rcvrxgrbtsdtltemp->weight_bt49; 
            $rcvrxgrbtsdtl->weight_bt50 = $rcvrxgrbtsdtltemp->weight_bt50; 
            $rcvrxgrbtsdtl->qty_samp01 = $rcvrxgrbtsdtltemp->qty_samp01; 
            $rcvrxgrbtsdtl->qty_samp02 = $rcvrxgrbtsdtltemp->qty_samp02; 
            $rcvrxgrbtsdtl->qty_samp03 = $rcvrxgrbtsdtltemp->qty_samp03; 
            $rcvrxgrbtsdtl->qty_samp04 = $rcvrxgrbtsdtltemp->qty_samp04; 
            $rcvrxgrbtsdtl->qty_samp05 = $rcvrxgrbtsdtltemp->qty_samp05; 
            $rcvrxgrbtsdtl->qty_samp06 = $rcvrxgrbtsdtltemp->qty_samp06; 
            $rcvrxgrbtsdtl->qty_samp07 = $rcvrxgrbtsdtltemp->qty_samp07; 
            $rcvrxgrbtsdtl->qty_samp08 = $rcvrxgrbtsdtltemp->qty_samp08; 
            $rcvrxgrbtsdtl->qty_samp09 = $rcvrxgrbtsdtltemp->qty_samp09; 
            $rcvrxgrbtsdtl->qty_samp10 = $rcvrxgrbtsdtltemp->qty_samp10; 
            $rcvrxgrbtsdtl->lastupdate = $rcvrxgrbtsdtltemp->lastupdate; 
            $rcvrxgrbtsdtl->update_by = $request->usercode; 
            $rcvrxgrbtsdtl->timestamps = false;
            $rcvrxgrbtsdtl->save();
            $rcvrxgrbtsdtl->timestamps = true;

            $rcvrxgrbtshdrtemp->delete();
            $rcvrxgrbtsdtltemp->delete();
         }
         DB::commit();
      } catch (\Exception $e) {
         DB::rollback();
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'     => 200, 
         'message'  => 'sukses'
      ]);
   }


   function loadinputpanen(Request $request){
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
      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
      // proses save
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }
      DB::beginTransaction();
      try {
         $dailyharvest = DB::table('rcvrx_dailyharvest as a')
            ->join('rcvrm_plasma as b', function($join){
            $join->on('b.pond_address', '=', 'a.pond_address' )
            ->on('b.bukrs', '=', 'a.company_code');
         })
         ->where('a.docno', '=', $request->docno)
         ->select('a.pond_address', 'b.fname', 'b.registerno', 'b.owner','b.alamat_rmh','a.picking')
         ->first();

         $ket_shrimp = Tblhelp::where('fkey1', '=', 'SHRIMP_CONDITION')
         ->where('fkey2', '=', $rcvrxgrbtshdrtemp->shrimp_condition)
         ->first();

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

            $krj = [];
            // if ($rcvrxgrbtsdtltemp->weight_bt01 > 0)
               $krj['weight_bt01'] =  $rcvrxgrbtsdtltemp->weight_bt01+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt02 > 0)
            $krj['weight_bt02'] =  $rcvrxgrbtsdtltemp->weight_bt02+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt03 > 0)
            $krj['weight_bt03'] =  $rcvrxgrbtsdtltemp->weight_bt03+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt04 > 0)
            $krj['weight_bt04'] =  $rcvrxgrbtsdtltemp->weight_bt04+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt05 > 0)
            $krj['weight_bt05'] =  $rcvrxgrbtsdtltemp->weight_bt05+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt06 > 0)
            $krj['weight_bt06'] =  $rcvrxgrbtsdtltemp->weight_bt06+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt07 > 0)
            $krj['weight_bt07'] =  $rcvrxgrbtsdtltemp->weight_bt07+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt08 > 0)
            $krj['weight_bt08'] =  $rcvrxgrbtsdtltemp->weight_bt08+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt09 > 0)
            $krj['weight_bt09'] =  $rcvrxgrbtsdtltemp->weight_bt09+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt10 > 0)
            $krj['weight_bt10'] =  $rcvrxgrbtsdtltemp->weight_bt10+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt11 > 0)
            $krj['weight_bt11'] =  $rcvrxgrbtsdtltemp->weight_bt11+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt12 > 0)
            $krj['weight_bt12'] =  $rcvrxgrbtsdtltemp->weight_bt12+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt13 > 0)
            $krj['weight_bt13'] =  $rcvrxgrbtsdtltemp->weight_bt13+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt14 > 0)
            $krj['weight_bt14'] =  $rcvrxgrbtsdtltemp->weight_bt14+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt15 > 0)
            $krj['weight_bt15'] =  $rcvrxgrbtsdtltemp->weight_bt15+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt16 > 0)
            $krj['weight_bt16'] =  $rcvrxgrbtsdtltemp->weight_bt16+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt17 > 0)
            $krj['weight_bt17'] =  $rcvrxgrbtsdtltemp->weight_bt17+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt18 > 0)
            $krj['weight_bt18'] =  $rcvrxgrbtsdtltemp->weight_bt18+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt19 > 0)
            $krj['weight_bt19'] =  $rcvrxgrbtsdtltemp->weight_bt19+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt20 > 0)
            $krj['weight_bt20'] =  $rcvrxgrbtsdtltemp->weight_bt20+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt21 > 0)
            $krj['weight_bt21'] =  $rcvrxgrbtsdtltemp->weight_bt21+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt22 > 0)
            $krj['weight_bt22'] =  $rcvrxgrbtsdtltemp->weight_bt22+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt23 > 0)
            $krj['weight_bt23'] =  $rcvrxgrbtsdtltemp->weight_bt23+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt24 > 0)
            $krj['weight_bt24'] =  $rcvrxgrbtsdtltemp->weight_bt24+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt25 > 0)
            $krj['weight_bt25'] =  $rcvrxgrbtsdtltemp->weight_bt25+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt26 > 0)
            $krj['weight_bt26'] =  $rcvrxgrbtsdtltemp->weight_bt26+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt27 > 0)
            $krj['weight_bt27'] =  $rcvrxgrbtsdtltemp->weight_bt27+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt28 > 0)
            $krj['weight_bt28'] =  $rcvrxgrbtsdtltemp->weight_bt28+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt29 > 0)
            $krj['weight_bt29'] =  $rcvrxgrbtsdtltemp->weight_bt29+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt30 > 0)
            $krj['weight_bt30'] =  $rcvrxgrbtsdtltemp->weight_bt30+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt31 > 0)
            $krj['weight_bt31'] =  $rcvrxgrbtsdtltemp->weight_bt31+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt32 > 0)
            $krj['weight_bt32'] =  $rcvrxgrbtsdtltemp->weight_bt32+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt33 > 0)
            $krj['weight_bt33'] =  $rcvrxgrbtsdtltemp->weight_bt33+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt34 > 0)
            $krj['weight_bt34'] =  $rcvrxgrbtsdtltemp->weight_bt34+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt35 > 0)
            $krj['weight_bt35'] =  $rcvrxgrbtsdtltemp->weight_bt35+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt36 > 0)
            $krj['weight_bt36'] =  $rcvrxgrbtsdtltemp->weight_bt36+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt37 > 0)
            $krj['weight_bt37'] =  $rcvrxgrbtsdtltemp->weight_bt37+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt38 > 0)
            $krj['weight_bt38'] =  $rcvrxgrbtsdtltemp->weight_bt38+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt39 > 0)
            $krj['weight_bt39'] =  $rcvrxgrbtsdtltemp->weight_bt39+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt40 > 0)
            $krj['weight_bt40'] =  $rcvrxgrbtsdtltemp->weight_bt40+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt41 > 0)
            $krj['weight_bt41'] =  $rcvrxgrbtsdtltemp->weight_bt41+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt42 > 0)
            $krj['weight_bt42'] =  $rcvrxgrbtsdtltemp->weight_bt42+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt43 > 0)
            $krj['weight_bt43'] =  $rcvrxgrbtsdtltemp->weight_bt43+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt44 > 0)
            $krj['weight_bt44'] =  $rcvrxgrbtsdtltemp->weight_bt44+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt45 > 0)
            $krj['weight_bt45'] =  $rcvrxgrbtsdtltemp->weight_bt45+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt46 > 0)
            $krj['weight_bt46'] =  $rcvrxgrbtsdtltemp->weight_bt46+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt47 > 0)
            $krj['weight_bt47'] =  $rcvrxgrbtsdtltemp->weight_bt47+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt48 > 0)
            $krj['weight_bt48'] =  $rcvrxgrbtsdtltemp->weight_bt48+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt49 > 0)
            $krj['weight_bt49'] =  $rcvrxgrbtsdtltemp->weight_bt49+0;
            // if ($rcvrxgrbtsdtltemp->weight_bt50 > 0)
            $krj['weight_bt50'] =  $rcvrxgrbtsdtltemp->weight_bt50+0;

            $ekor = [];
            // if ($rcvrxgrbtsdtltemp->qty_samp01 > 0)
            $ekor['qty_samp01'] =  $rcvrxgrbtsdtltemp->qty_samp01+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp02 > 0)
            $ekor['qty_samp02'] =  $rcvrxgrbtsdtltemp->qty_samp02+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp03 > 0)
            $ekor['qty_samp03'] =  $rcvrxgrbtsdtltemp->qty_samp03+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp04 > 0)
            $ekor['qty_samp04'] =  $rcvrxgrbtsdtltemp->qty_samp04+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp05 > 0)
            $ekor['qty_samp05'] =  $rcvrxgrbtsdtltemp->qty_samp05+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp06 > 0)
            $ekor['qty_samp06'] =  $rcvrxgrbtsdtltemp->qty_samp06+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp07 > 0)
            $ekor['qty_samp07'] =  $rcvrxgrbtsdtltemp->qty_samp07+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp08 > 0)
            $ekor['qty_samp08'] =  $rcvrxgrbtsdtltemp->qty_samp08+0;
            // if ($rcvrxgrbtsdtltemp->qty_samp09 > 0)
         $ekor['qty_samp09'] =  $rcvrxgrbtsdtltemp->qty_samp09+0;

      } catch (\Exception $e) {
         DB::rollback();
         return response()->json(['code'=>500, 'message' => $e->getMessage()]);
      }
      return response()->json([
         'code'     => 200, 
         'message'  => 'sukses',
         'header' => $rcvrxgrbtshdrtemp,
         'detail' => $rcvrxgrbtsdtltemp,
         'jadwalpanen' => $dailyharvest,
         'ttltonase'  => $tonase,
         'totalek'      => $rcvrxgrbtshdrtemp->qty_totalsamp + 0,
         'totalkg'      => $rcvrxgrbtshdrtemp->weight_totalsamp + 0,
         'ratarata'     => $rcvrxgrbtshdrtemp->rata_size + 0,
         'totalbkn'     => $rcvrxgrbtshdrtemp->weight_chsbroken + 0,
         'total'        => $rcvrxgrbtshdrtemp->weight_totalchs + 0,
         'persen_qastd' => $rcvrxgrbtshdrtemp->persen_qastd + 0,
         'persen_qabs'  => $rcvrxgrbtshdrtemp->persen_qabs + 0,
         'totalkrj' => $rcvrxgrbtshdrtemp->total_keranjang,
         'listkrj' => $krj,
         'listsampling' => $ekor,
         'ket_shrimpkondisi' => $ket_shrimp
      ]);
   }

   
   function loadkeranjang(Request $request){
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
      $plant = Rcvrmplant::where('plantkode', '=', $user->plantkode)->first();
      // proses save
      $rcvrxgrbtsdtltemp = Rcvrxgrbtsdtltemp::where('docno', '=', $request->docno)->first();
      if (!$rcvrxgrbtsdtltemp){
         return response()->json(['code'=>500, 'message' => 'Ada kesalahan Inputan']);
      }
      DB::beginTransaction();
      try {
         $dailyharvest = DB::table('rcvrx_dailyharvest as a')
            ->join('rcvrm_plasma as b', function($join){
            $join->on('b.pond_address', '=', 'a.pond_address' )
            ->on('b.bukrs', '=', 'a.company_code');
         })
         ->where('a.docno', '=', $request->docno)
         ->select('a.pond_address', 'b.fname', 'b.registerno', 'b.owner','b.alamat_rmh','a.picking')
         ->first();


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
         'listkrj'  => $krj
      ]);
   }
}
