<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

use Session;
 
use App\Exports\CustomerExport;
use App\Imports\CustomerImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    //
	public function index(Request $request)
	{
            $customer = Customer::where('cgroup', 'like' , '%')
                    ->orderBy('nama')->get();
                    // dd($request->session());
            return view('customer', ['customer' => $customer]);
	}

	public function add()
	{
            return view('customer_add');
	}

	public function save(Request $request)
	{
            $this->validate($request,[
    		'nama' => 'required',
    		'phone' => 'required',
                'sex' => 'required',
                'title' => 'required',
                'cgroup' => 'required',
                'ctype' => 'required'

            ]);

            Customer::create([
    		'nama' => $request->nama,
                'sex' => $request->sex,
                'phone' => $request->phone,
                'title' => $request->title,
                'cgroup' => $request->cgroup,
                'ctype' => $request->ctype,
                'kecam' => $request->kecam,
                'kota' => $request->kota,
                'email' => $request->email,
                'adrbook' => $request->adrbook,
    		'alamat' => $request->alamat
            ]);

        //return redirect('/customer');
        $nama = $request->nama;
        $customer = Customer::where('nama', '=' , $nama)
                    ->orderBy('nama')->get();
                
        return view('customer', ['customer' => $customer]);   
            
    	}

  public function edit($id)
        {
            $customer = Customer::find($id);
            return view('customer_edit', ['customer' => $customer]);
  }
        
  public function update($id, Request $request)
        {
            $this->validate($request,[
                'nama' => 'required',
    		'phone' => 'required',
                'sex' => 'required',
                'title' => 'required',
                'cgroup' => 'required',
                'ctype' => 'required'
            ]);

            $customer = Customer::find($id);
            
            $customer->nama = $request->nama;
            $customer->sex = $request->sex;
            $customer->phone = $request->phone;
            $customer->title = $request->title;
            $customer->cgroup = $request->cgroup;
            $customer->ctype = $request->ctype;
            $customer->kecam = $request->kecam;
            $customer->kota = $request->kota;
            $customer->email = $request->email;
            $customer->adrbook = $request->adrbook;
            $customer->alamat = $request->alamat;
            
            $customer->save();
            
            //return redirect('/customer');
        $nama = $request->nama;
        $customer = Customer::where('nama', '=' , $nama)
                    ->orderBy('nama')->get();
                
        return view('customer', ['customer' => $customer]);      
  }
        
  public function delete($id)
        {
            $customer = Customer::find($id);
            $customer->delete();
            
            return redirect('/customer');
  }


  public function export_excel()
	{
		return Excel::download(new CustomerExport, 'Customer.xlsx');
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
		Excel::import(new CustomerImport, public_path('/file_customer/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Customer Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect('/customer');
	}
        
	public function filter(Request $request) 
	{
		// alihkan halaman kembali

                //$customer = Customer::where('cgroup', 'like' , $request->cgroup.'%')->get();
                
                $customer = Customer::where('cgroup', 'like' , $request->cgroup.'%')
                    ->where('adrbook', 'like' , $request->adrbook.'%')
                    ->where('title', 'like' , $request->title.'%')
                    ->where('nama', 'like' , $request->nama.'%')
                    ->orderBy('nama')->get();
                
                return view('customer', ['customer' => $customer]);
		//return redirect('/customer');
	}

	public function sendmsg(Request $request) 
	{
		// alihkan halaman kembali

                $customer = Customer::where('id', '=' , $request->id)->get();
                return view('customer_send', ['customer' => $customer]);	
    }

	public function uploadimage(Request $request) 
	{
		// alihkan halaman kembali

                $customer = Customer::where('id', '=' , $request->id)->get();
                return view('customer_send', ['customer' => $customer]);	
    }


  public function gcon()
	{
            return view('customer_gcon');
	}

}
