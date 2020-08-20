<?php
namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rcvrsusers;
use App\Models\Rcvrmplant;
use App\Models\Dailyharvest;
use App\Models\Plasma;
use App\Models\Tblhelp;
use Carbon\Carbon;
use DB;

class JadwalpanenController extends Controller
{
    function cekpassword($para1, $para2)
    {
        $pass = str_replace("Bearer ", "",$para1);
        if ($para2 <> $pass){
            return('1');
        }
        return('0');
    }

    function jadwalpanen(Request $request){
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
        try {
            $now = Carbon::now();
            $startDate = time();
            $now1 = date('Y-m-d', strtotime('-1 day', $startDate));
            
            // $dailyharvest1 = DB::table('rcvrx_dailyharvest as a')
            // ->join('rcvrm_plasma as b', function($join){
            //    $join->on('b.pond_address', '=', 'a.pond_address' )
            //    ->on('b.bukrs', '=', 'a.company_code');
            // })
            // ->leftjoin('rcvrx_grbtshdr as c', 'c.docno', '=', 'a.docno')
            // ->leftjoin('rcvrx_grbtshdr_temp as d', 'd.docno', '=', 'a.docno')
            // // ->where('a.harvest_date', '>=', $now1->format('Y-m-d'))
            // ->where('a.harvest_date', '>=', $now1)
            // ->where('a.company_code', '=', $plant->companycode)
            // ->wherein('a.status_data', ['P','T'])
            // ->where('a.docno', '<>', '')
            // ->select(
            //     'a.pond_address', 'b.fname', 'b.registerno', 'b.owner', 'b.alamat_rmh', 'a.docno'
            //     , DB::raw("COALESCE(c.trip_to,COALESCE(d.trip_to,0))+1 as trip_to")
            // );
            
            $dailyharvest = DB::table('rcvrx_dailyharvest as a')
            ->join('rcvrm_plasma as b', function($join){
               $join->on('b.pond_address', '=', 'a.pond_address' )
               ->on('b.bukrs', '=', 'a.company_code');
            })
            ->leftjoin('rcvrx_grbtshdr as c', 'c.docno', '=', 'a.docno')
            ->leftjoin('rcvrx_grbtshdr_temp as d', 'd.docno', '=', 'a.docno')
            ->where('a.harvest_date', '=', $now->format('Y-m-d'))
            ->where('a.company_code', '=', $plant->companycode)
            ->wherein('a.status_data', ['P','T',''])
            ->select(
                'a.pond_address', 'b.fname', 'b.registerno', 'b.owner', 'b.alamat_rmh', 'a.docno', 'a.picking'
                , DB::raw("COALESCE(c.trip_to,COALESCE(d.trip_to,0))+1 as trip_to")
            )
            // ->union($dailyharvest1)
            ->get();
        } catch (\Exception $e) {
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        return response()->json([
            'code'        => 200, 
            'message'     => 'sukses',
            'jadwalpanen' => $dailyharvest
        ]);
    }
}
