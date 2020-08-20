<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;

use App\Models\Qrsversion;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Storage;

class VersionController extends Controller
{
    //
    public function judul(){
        return "System - Version Apps Barcode ";
    }

	public function index()
	{
        $qrsversion = Qrsversion::orderBy('id', 'asc')->get();
        return view('Menus.Version.list', ['qrsversion' => $qrsversion, 'judul' => $this->judul()]);
	}

	public function add()
	{
        // $qrsversion = Qrsversion::orderBy('versi', 'desc')->first();
        return view('Menus.Version.add',['judul' => $this->judul()]);
	}
        
	public function save(Request $request)
	{
        $versi = $request->versi1 . '.' . $request->versi2 . '.' . $request->versi3;
        
        $this->validate($request, [
            'versi1' => ['required'],
            'versi2' => ['required'],
            'versi3' => ['required'],
            'perubahan' => ['required'],
            
        ]);
        
        $qrsversion = Qrsversion::orderBy('id', 'desc')->first();
        // menangkap file excel
        $file = $request->file('files');
        $nama_file = $file->getClientOriginalName();

        if ($nama_file <> 'qrcodesystemcpp.apk'){
            return 'A';
        }
        
        // if ($qrsversion) {
        //     // return '/apk/'.$nama_file;
        //     Storage::move(public_path('/apk/'.$nama_file), 
        //     public_path('/apk/'.$nama_file.'_'.$qrsversion->versi1.'_'.$qrsversion->versi2.'_'.$qrsversion->versi3.'.apk'));
        // }
        Storage::delete(['apk/'.$nama_file]);
        
        // upload ke folder file_siswa di dalam folder public
        $file->move('apk',$nama_file);
// return 'A';
        Qrsversion::create([
            'versi'     => $versi, 
            'versi1'    => $request->versi1, 
            'versi2'    => $request->versi2, 
            'versi3'    => $request->versi3, 
            'apk'       => $nama_file,
            'perubahan' => $request->perubahan
        ]);
        // return 'B';

        $qrsversion = Qrsversion::orderBy('id', 'asc')->get();
        return redirect('/version')->with('judul', $this->judul());
    }

    public function storeimage($id) {
        
        $sql = "
            SELECT apk
            from qrs_version
            WHERE id = ".$id."
        ";
        $data = DB::connection('pgsql')->select($sql);
        foreach ($data as $key => $value) {
            $my_bytea = stream_get_contents($value->apk);
            header("Content-Type: image");
            echo $my_bytea;
        }
    }


    public function edit($id)
    {
        $qrsversion = Qrsversion::find($id);
        return view('Menus.Version.edit', ['qrsversion' => $qrsversion, 'judul' => $this->judul()]);
    }
        
  public function update($id, Request $request)
    {
        

        
        $versi = $request->versi1 . '.' . $request->versi2 . '.' . $request->versi3;
        $qrsversion = Qrsversion::find($id);
        $qrsversion->versi = $versi;
        $qrsversion->versi1 = $request->versi1;
        $qrsversion->versi2 = $request->versi2;
        $qrsversion->versi3 = $request->versi3;
        $qrsversion->perubahan = $request->perubahan; 
        $qrsversion->save();

        
 
		
        



        if ($request->hasFile('files')) {
            $image=$request->file('files');
            if ($image->isValid()) {
                
                $this->validate($request, [
                    'files' => 'required|mimes:apk'
                ]);
        
                // menangkap file excel
                $file = $request->file('files');
         
                // membuat nama file unik
                // $nama_file = rand().$file->getClientOriginalName();
                $nama_file = $file->getClientOriginalName();
                
                // remove ke folder file_siswa di dalam folder public
                $file->remove('file_customer',$nama_file);

                // upload ke folder file_siswa di dalam folder public
                $file->move('file_customer',$nama_file);

            }
        }
        $qrsversion = Qrsversion::orderBy('id', 'asc')->get();
        return redirect('/version')->with('judul', $this->judul());
    }
        
  public function delete($id)
    {
        $qrsversion = Qrsversion::find($id);
        $qrsversion->delete();
        return redirect('/version')->with('judul', $this->judul());
    }
}
