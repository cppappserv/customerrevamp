<?php

namespace App\Http\Controllers\API;

use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Qrsversion;
use App\Models\Qrxtxhistory;
use Storage;

use DB;

class VersionqrcodeController extends Controller
{

    function Version(Request $request){
        $qrsversion = Qrsversion::orderby('id','desc')->first();
        return response()->json([
            'code'=> 200, 
            'message' => 'sukses', 
            'versi1' => $qrsversion->versi1,
            'versi2' => $qrsversion->versi2,
            'versi3' => $qrsversion->versi3,
        ]);
    }

    function Download(Request $request){
        $path = public_path('apk'.'/qrcodesystemcpp.apk');
        
        return response()->file($path ,[
            'Content-Type'=>'application/vnd.android.package-archive',
            'Content-Disposition'=> 'attachment; filename="qrcodesystemcpp.apk"',
        ]) ;
    }

    function Txhistory(Request $request){
        if ($request->txtype == '09'){
            // $qrxtxhistory = Qrxtxhistory::where('txtype', $request->txtype)
            // ->where('refnumber', $request->refnumber)
            // ->where('materialcode', $request->materialcode)
            // ->orderby('barcode','asc')
            // ->get();
            $sql = "
                select * from qrx_txhistory where txtype = '".$request->txtype."' 
                    and refnumber = '".$request->refnumber."' 
                    and materialcode = '".$request->materialcode."' 
                order by barcode
            ";
            $sql = "
                select * from qrx_txhistory where txtype = '".$request->txtype."' 
                    and refnumber = '".$request->refnumber."' 
                order by barcode
            ";
            $qrxtxhistory = DB::connection('pgsql')->select($sql);
        } elseif ($request->txtype == '11'){ 
            // $qrxtxhistory = Qrxtxhistory::where('txtype', $request->txtype)
            // ->where('ponumber', $request->refnumber)
            // ->where('materialcode', $request->materialcode)
            // ->orderby('barcode','asc')
            // ->get();
            $sql = "
                select * from qrx_txhistory where txtype = '".$request->txtype."' 
                    and ponumber = '".$request->refnumber."' 
                    and materialcode = '".$request->materialcode."' 
                order by barcode
            ";
            $sql = "
                select * from qrx_txhistory where txtype = '".$request->txtype."' 
                    and ponumber = '".$request->refnumber."' 
                order by barcode
            ";
            $qrxtxhistory = DB::connection('pgsql')->select($sql);
        } else {
            return response()->json([
                'code'=> 500, 
                'message' => 'Kode Salah'
            ]);
        }
        
        return response()->json([
            'code'=> '200', 
            'message' => 'sukses',
            'qrxtxhistory' => $qrxtxhistory,
        ]);
    }
    
}
