<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Rcvrmcompany;
use Session;
use App\Exports\CompanyExport;
use App\Imports\CompanyImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Redirect;
use File;
use Image;
use DB;


class CompanyController extends Controller
{
    public function judul(){
        return 'Master / Company'; 
    }
    //
	public function index()
	{
        if(!DB::connection()->getDatabaseName())
        {
            return view('auth.login');
        }
        $akses = $this->judul();
        $company = Rcvrmcompany::orderBy('companycode')->get();
        return view('Menus.Company.list', ['company' => $company, 'jdl' => $akses]);
    }
    
    

	public function add()
	{
        $akses = $this->judul();
        return view('Menus.Company.add',['jdl' => $akses]);
	}

    
	

    public function save(Request $request)
	{
        $this->validate($request, [
    		'companycode'  => 'required|unique:rcvrm_company',
            'companyname'  => 'required',
        ]);
        try {
           
            $image_file = $request->files;
            // $image = Image::make($image_file);
            $gambar = $request->file('files')->getClientOriginalName();
            $image = Image::make($request->file('files')->getRealPath());
            Response::make($image->encode('jpeg'));
            $form_data = array(
                'companycode' => $request->companycode,
                'companyname' => $request->companyname,
                'changedby' => $request->changedby,
                'gambar' => $gambar,
                'zimage' => $image
            );
            Rcvrmcompany::create($form_data);

        } catch (\Exception $e) {
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect()->route('company_view');
        // return redirect('/company')->with('jdl', $akses);
    }

    public function edit($id)
    {
        // return $this->storeimage($id);
        $akses = $this->judul();
        $company = Rcvrmcompany::find($id);
        return view('Menus.Company.edit', ['company' => $company, 'jdl' => $akses]);
    }



    public function update($id, Request $request)
    {
        $this->validate($request, [
            'companyname'     => 'required|unique:rcvrm_company,companyname,' . $id,
            'companycode' => 'required|unique:rcvrm_company,companycode,' . $id,
        ]);
        try {
           
            
            if ($request->hasFile('files')) {
                $image_file = $request->files;
                $gambar = $request->file('files')->getClientOriginalName();
                $image = Image::make($request->file('files')->getRealPath());
                Response::make($image->encode('jpeg'));
                $form_data = array(
                    'companycode' => $request->companycode,
                    'companyname' => $request->companyname,
                    'changedby' => $request->changedby,
                    'gambar' => $gambar,
                    'zimage' => $image
                );
            } else {
                $form_data = array(
                    'companycode' => $request->companycode,
                    'companyname' => $request->companyname,
                    'changedby' => $request->changedby
                );
            }
            DB::table('rcvrm_company')->where('id', $id)->update($form_data);
        } catch (\Exception $e) {
            return $e->getMessage();
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect()->route('company_view');
    }
        
  public function delete($id)
    {
        $company = Rcvrmcompany::find($id);
        $company->delete();
        
        $akses = $this->judul();
        return redirect('/company')->with('jdl', $akses);
    }


  public function export_excel()
	{
		return Excel::download(new CompanyExport, 'Company.xlsx');
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
		Excel::import(new CompanyImport, public_path('/file_customer/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Company Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/Company');
	}
        
	public function filter(Request $request) 
	{
        $company = Rcvrmcompany::where('companyname', 'like' , $request->companyname.'%')
            ->where('companykode', 'like' , $request->companykode.'%')
            ->where('changedby', 'like' , $request->changedby.'%')
            ->orderBy('id')->get();
            return view('Menus.company.list', ['company' => $company]);   
    }

	public function sendmsg(Request $request) 
	{
        $company = Rcvrmcompany::where('id', '=' , $request->id)->get();
        return view('customer_send', ['company' => $company]);	
    }

	public function uploadimage(Request $request) 
	{
        $company = Rcvrmcompany::where('id', '=' , $request->id)->get();
        return view('customer_send', ['company' => $company]);	
    }


    public function gcon()
	{
        return view('customer_gcon');
    }
    
    public function storeimage($image_id) {
        $image = Rcvrmcompany::findOrFail($image_id);
		$image_file = Image::make($image->zimage);
		$response = Response::make($image_file->encode('jpeg'));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
    }

}
