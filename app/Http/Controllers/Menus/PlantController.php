<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;

use App\Models\Rcvrmplant;
use App\Models\Rcvrmcompany;
use Session;
use App\Exports\PlantExport;
use App\Imports\PlantImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Redirect;
use DB;

class PlantController extends Controller
{
    public function judul(){
        return 'Master / Plant';  
        }

	public function index()
	{
        if(!DB::connection()->getDatabaseName())
        {
            return view('auth.login');
        }
        $akses = $this->judul();
        $plant = DB::table('rcvrm_plant as a')
        ->leftjoin('rcvrm_company as b', 'a.companycode', '=', 'b.companycode')
        ->select('a.*', 'b.companyname')
        ->get();
        return view('Menus.Plant.list', ['plant' => $plant, 'jdl' => $akses]);
	}

	public function add()
	{
        $akses = $this->judul();
        $company = Rcvrmcompany::orderBy('companyname')->get();
        return view('Menus.Plant.add',['company' => $company, 'jdl' => $akses]);
	}

	public function save(Request $request)
	{
        $this->validate($request, [
    		'plantkode'  => 'required|unique:rcvrm_plant',
            'plantname'     => 'required',
            'companycode'     => 'required',
            'screenmode'     => 'required'
        ]);

        $changedby = $request->changedby;
        Rcvrmplant::create([
            'plantname' => $request->plantname, 
            'plantkode' => $request->plantkode, 
            'companycode' => $request->companycode, 
            'screenmode' => $request->screenmode,
            'changedby' => $changedby
        ]);

        
        return redirect()->route('plant_view');
            
    	}

  public function edit($id)
        {
            $akses = $this->judul();
            $plant = Rcvrmplant::find($id);
            $company = Rcvrmcompany::orderBy('companyname')->get();
            return view('Menus.Plant.edit', ['plant' => $plant, 'company' => $company, 'jdl' => $akses]);
  }
        
  public function update($id, Request $request)
    {

        $this->validate($request, [
            'plantkode'  => 'required|unique:rcvrm_plant,plantkode,'.$id,
            'plantname'     => 'required',
            'companycode'     => 'required',
            'screenmode'     => 'required',
            'changedby' => 'required'

        ]);
        try {
            $changedby = $request->changedby;
            $plant = Rcvrmplant::find($id);
            $plant->plantname = $request->plantname;
            $plant->plantkode = $request->plantkode; 
            $plant->companycode = $request->companycode;
            $plant->screenmode = $request->screenmode;
            $plant->changedby = $changedby;
            $plant->save();
        } catch (\Exception $e) {
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect()->route('plant_view');
        // $plant = Rcvrmplant::where('changedby', '=' , $changedby)
        //         ->orderBy('id')->get();
        // return view('Menus.Plant.list', ['plant' => $plant]);   
    }
        
  public function delete($id)
    {
        $plant = Rcvrmplant::find($id);
        $plant->delete();
        
        return redirect()->route('plant_view');
    }


  public function export_excel()
	{
		return Excel::download(new PlantExport, 'Plant.xlsx');
	}
 
	public function import_excel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_customer',$nama_file);
 
		// import data
		Excel::import(new PlantImport, public_path('/file_customer/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Customer Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/plant');
	}
        
	public function filter(Request $request) 
	{
        $akses = $this->judul();
        $plant = Rcvrmplant::where('plantname', 'like' , $request->plantname.'%')
            ->where('plantkode', 'like' , $request->plantkode.'%')
            ->where('changedby', 'like' , $request->changedby.'%')
            ->orderBy('id')->get();
            return view('Menus.Plant.list', ['plant' => $plant, 'jdl' => $akses]);   
    }

	public function sendmsg(Request $request) 
	{
        $plant = Rcvrmplant::where('id', '=' , $request->id)->get();
        return view('customer_send', ['customer' => $customer]);	
    }

	public function uploadimage(Request $request) 
	{
        $plant = Rcvrmplant::where('id', '=' , $request->id)->get();
        return view('customer_send', ['customer' => $customer]);	
    }


    public function gcon()
	{
        return view('customer_gcon');
	}

}
