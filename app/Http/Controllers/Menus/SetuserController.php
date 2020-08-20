<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Rcvrsusers;
use App\Models\Rcvrmplant;
use App\Models\Rcvrmcompany;
use App\Models\Tblhelp;
// use App\Models\Rcvrsusersakses;
use Session;
// use App\Exports\CompanyExport;
// use App\Imports\CompanyImport;
// use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Redirect;
use DB;

class SetuserController extends Controller
{
    
    public function judul(){
        
        return 'Adminstrator / User Mobile'; 
    }

    public function tbl_group()
	{
        return Tblhelp::where('fkey1', '=','TBL_GROUP')->get();
    }

    public function tbl_active()
	{
        return Tblhelp::where('fkey1', '=','TBL_ACTIVE')->get();
    }

    public function tbl_txtype()
	{
        return Tblhelp::where('fkey1', '=','TBL_TXTYPE')->get();
    }

    public function tbl_gotaccess()
	{
        return Tblhelp::where('fkey1', '=','TBL_GOTACCESS')->get();
    }

	public function index()
	{
        if(!DB::connection()->getDatabaseName())
        {
            return view('auth.login');
        }
        $akses = $this->judul();
        $tbl1 = $this->tbl_group();
        $rcvrmplant = Rcvrmplant::get();
        $rcvrsusers = Rcvrsusers::orderBy('updated_at','desc')->get();
        foreach ($rcvrsusers as $key => $value) {
            $urut = 0;
            $ket = '';
            $explode = explode(",",$value->isadmin);
            
            foreach ($explode as $key3 => $value3) {
                foreach ($tbl1 as $key4 => $value4) {
                    if ($value3 == $value4->fkey2){
                        if ($value->kisadmin <> ''){
                            $value->kisadmin .= '/';    
                        }
                        $value->kisadmin .= $value4->data1;
                        break;
                    }
                }
            }
            foreach ($rcvrmplant as $key2 => $value2) {
                if ($value2->plantkode == $value->plantkode){
                    $value->companycode = $value2->companycode;
                break;
                }
            }
        }
        
        return view('Menus.Setuser.list', ['users' => $rcvrsusers, 'jdl' => $akses]);
    }

    
    
	public function add()
	{
        // $qrmarea = Qrmarea::orderBy('updated_at','desc')->get();
        // return view('Menus.Setuser.add',['qrmarea' => $qrmarea]);
        $akses = $this->judul();
        $tblgroup = $this->tbl_group();
        $tblactive = $this->tbl_active();
        $rcvrmplant = Rcvrmplant::get();

        return view('Menus.Setuser.add',['jdl' => $akses, 'tblgroup' => $tblgroup, 
        'tblactive' => $tblactive, 'plant' => $rcvrmplant]);
	}

    
	public function save(Request $request)
	{
        $isadmin_save = implode(",", $request->isadmin);
        
        $this->validate($request, [
    		'usercode'   => ['required', 'unique:rcvrs_users'],
    		'username'   => ['required', 'unique:rcvrs_users'],
            // 'isadmin'    => 'required',
            'active'     => 'required',
            'password'   => 'required|confirmed',
            'plantkode'  => 'required',
        ]);
        try {
            Rcvrsusers::create([
                'usercode'      => $request->usercode,
                'username'      => $request->username,
                'isadmin'       => $isadmin_save,
                'active'        => $request->active,
                'status'        => $request->active,
                'plantkode'     => $request->plantkode,
                'password'      => Hash::make($request['password']),
                'pdapassword'   => Hash::make($request['password']),
                'lastupdatedby' => $request->changedby,
            ]);
         } catch (\Exception $e) {
             return Redirect::back()->withErrors($e->getMessage());
         }
        return redirect()->route('Setuser_view');
    }

    public function edit($id)
    {
        $akses = $this->judul();
        


        $tblactive = $this->tbl_active();
        $rcvrsusers = Rcvrsusers::find($id);
        $explode = explode(",",$rcvrsusers->isadmin);
        $ket=[];
        $ket = Tblhelp::where('fkey1', '=','TBL_GROUP')
        ->whereIn('fkey2', $explode)
        ->select('fkey2', 'data1')
        ->get();
        

        $tblgroup = $this->tbl_group();

        foreach ($tblgroup as $key => $value) {
            $value->flag = '';
            foreach ($explode as $key2 => $value2) {
                if($value->fkey2 == $value2){
                    $value->flag = 'selected';
                    break;
                } 
            }    
        }
        
        $rcvrsusers->isadmin = $explode;
        $rcvrmplant = Rcvrmplant::all();

        // return $rcvrsusers->kisadmin;
        
        return view('Menus.Setuser.edit', [
            'users' => $rcvrsusers, 'jdl' => $akses, 
            'tblgroup' => $tblgroup, 'tblactive' => $tblactive,
            'plant' => $rcvrmplant
        ]);
    }
        
    public function update($id, Request $request)
    {
        $isadmin_save = implode(",", $request->isadmin);
        $this->validate($request, [
    		// 'usercode' => ['required', 'unique:rcvrs_users,usercode,'.$id],
            // 'username' => ['required', 'unique:rcvrs_users,username,'.$id],
            // 'isadmin'  => 'required',
            'active'   => 'required',
            'plantkode'   => 'required',
        ]);
        try {
           $usersmob = Rcvrsusers::find($id);
            $usersmob->usercode = $request->usercode;
            $usersmob->username = $request->username;
            $usersmob->isadmin = $isadmin_save;
            $usersmob->active = $request->active;
            $usersmob->status = $request->active;
            $usersmob->lastupdatedby = $request->changedby;
            $usersmob->plantkode = $request->plantkode;
            $usersmob->save();
        } catch (\Exception $e) {
            return Redirect::back()->withErrors($e->getMessage());
        }
        return redirect()->route('Setuser_view');
    }
        
  public function delete($id)
    {
        $rcvrsusers = Rcvrsusers::find($id);
        try {
            $rcvrsusers->delete();
         } catch (\Exception $e) {
             return Redirect::back()->withErrors($e->getMessage());
         }
        return redirect()->route('Setuser_view');
    }

    public function reset($id)
    {
        $akses = $this->judul();
        $tblgroup = $this->tbl_group();
        $tblactive = $this->tbl_active();
        $rcvrsusers = Rcvrsusers::find($id);
        return view('Menus.Setuser.editpass', [
            'users' => $rcvrsusers, 'jdl' => $akses, 
            'tblgroup' => $tblgroup, 'tblactive' => $tblactive
        ]);
    }

    public function updatepass($id, Request $request)
    {

        $this->validate($request, [
            'password' => 'required|confirmed',
        ]);

        $changedby = $request->changedby;
        $rcvrsusers = Rcvrsusers::find($id);
        $rcvrsusers->password = Hash::make($request['password']);
        $rcvrsusers->lastupdatedby = $changedby;
        $rcvrsusers->save();
        $rcvrsusers = Rcvrsusers::orderBy('updated_at', 'desc')->get();
        return redirect()->route('Setuser_view');
        // return view('Menus.Setuser.list', ['users' => $rcvrsusers]);   
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
        $rcvrsusers = Rcvrsusers::orderBy('updated_at','desc')
        ->where('usercode', 'like', '%'.$request->usercode.'%') 
        ->where('username', 'like', '%'.$request->username.'%') 
        ->get();
        return view('Menus.Setuser.list', ['Rcvrsusers' => $rcvrsusers]);
    }

	public function sendmsg(Request $request) 
	{
        $company = Qrmcompany::where('id', '=' , $request->id)->get();
        return view('customer_send', ['company' => $company]);	
    }

	public function uploadimage(Request $request) 
	{
        $company = Qrmcompany::where('id', '=' , $request->id)->get();
        return view('customer_send', ['company' => $company]);	
    }


    public function gcon()
	{
        return view('customer_gcon');
	}

}
