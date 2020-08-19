<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Qrxtxhistorytemp;
use DB;
use Session;
use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class XQrcodeshowController extends Controller
{
	public function index($barcodeid)
	{
        $data = DB::table('qrx_txhistorytemp as A')
        ->join('qrm_plant as B', 'A.plantcode', '=', 'B.plantkode')
        ->join('qrm_sloc as C',function($join){
            $join->on('A.plantcode', '=', 'C.plantcode')
                ->on('A.srcsloccode', '=', 'C.sloccode');
        }) 
        ->join('qrx_mts as D',function($join){
            $join->on('A.plantcode', '=', 'D.plantcode')
                ->on('A.srcsloccode', '=', 'D.sloccode')
                ->on('A.batch', '=', 'D.batch');
        }) 
        ->select(
            'A.*'
        )
        ->where('A.barcode', $barcodeid)
        ->orderby('A.id','desc')
        ->first();
        
        return view('Showqrcode',['data' => $data]);
    }
}
