<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\models\kodepost;
 
class AutoCompleteController extends Controller
{
 
    public function index()
    {
        // $result = kodepost::where('kelurahan', 'LIKE', 'CILEBUT'. '%')->get();
        // dd($result);
        return view('search');
    }
 
    public function search(Request $request)
    {
        
          $search = $request->get('term');
      
          $result = kodepost::where('kelurahan', 'LIKE', $search. '%')->get();

        //   return response()->json($result);

        $dataModified = array();
        foreach ($result as $data)
        {
            $dataModified[] = $data->kelurahan."|".$data->kecamatan."|".$data->kabupaten."|".$data->provinsi."|".$data->kodepos.":".$data->id;
        }
        return response()->json($dataModified);
    } 
}