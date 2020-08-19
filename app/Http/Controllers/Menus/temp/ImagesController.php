<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;

use App\Models\Qrmimage;
use App\Models\Qrmfpmaster;
use DB;
use Session;
use App\Http\Controllers\Controller;
use Storage;

class ImagesController extends Controller
{
    //
    public function judul(){
        return "Master - Image Material ";
    }

	public function index()
	{
            $image = Qrmimage::orderBy('materialnumber', 'asc')->get();
            return view('Menus.Images.list', ['qrmimage' => $image, 'judul' => $this->judul()]);
	}

	public function add()
	{
        $sql = "
            select distinct a.materialnumber, a.materialdescription
            from qrm_fpmaster a
            left outer join qrm_image b on a.materialnumber = b.materialnumber
            where b.materialnumber is null
            order by a.materialnumber asc
        ";
        $qrmfpmaster = DB::connection('pgsql')->select($sql);
        return view('Menus.Images.add',['tblhelp' => $qrmfpmaster, 'judul' => $this->judul()]);
	}
        
	public function save(Request $request)
	{
        $this->validate($request, [
    		'materialnumber' => ['required', 'unique:qrm_image'],
    		'description' => ['required', 'unique:qrm_image'],
        ]);
        

        $changedby = $request->changedby;
        Qrmimage::create([
            'materialnumber' => $request->materialnumber, 
            'icon' => '0',
            'description' => $request->description,
            'changedby' => $changedby
        ]);
        $id = DB::getPdo()->lastInsertId();
        if ($request->hasFile('files')) {
            $image=$request->file('files');
            
            if ($image->isValid()) {
                $data = file_get_contents($image->getRealPath());
                $dat= pg_escape_bytea($data); 
                $sql = "update qrm_image set icon = '".$dat."' where id = ".$id."";
                
                $result = DB::connection('pgsql')->select($sql);
            }
        }

        $image = Qrmimage::orderBy('id', 'asc')->get();
        return redirect('/images')->with('judul', $this->judul());
    }

    public function storeimage($id) {
        
        $sql = "
            SELECT icon
            from qrm_image
            WHERE id = ".$id."
        ";
        $data = DB::connection('pgsql')->select($sql);
        foreach ($data as $key => $value) {
            $my_bytea = stream_get_contents($value->icon);
            header("Content-Type: image");
            echo $my_bytea;
        }
    }


    public function edit($id)
    {
        // $sql1 = "
        //     select distinct a.materialnumber, a.materialdescription
        //     from qrm_fpmaster a
        //     left outer join qrm_image b on a.materialnumber = b.materialnumber
        //     where b.materialnumber is null
        //     order by a.materialnumber desc
        // ";
        $sql = "
            select distinct a.materialnumber, a.materialdescription
            from qrm_fpmaster a
            left outer join qrm_image b on a.materialnumber = b.materialnumber
            order by a.materialnumber desc
        ";
        $qrmfpmaster = DB::connection('pgsql')->select($sql);
        $qrmimage = Qrmimage::find($id);
        return view('Menus.Images.edit', ['qrmimage' => $qrmimage, 'tblhelp' => $qrmfpmaster, 'judul' => $this->judul()]);
    }
        
  public function update($id, Request $request)
    {
        
        $this->validate($request, [
            // 'materialnumber' => ['required', 'unique:qrm_image, materialnumber, '.$id],
            'materialnumber' => ['required', 'unique:qrm_image,materialnumber, '.$id],
    		'description' => ['required'],
        ]);
        // dd($request->hasFile('files'));
        $changedby = $request->changedby;
        $qrmimage = Qrmimage::find($id);
        $qrmimage->materialnumber = $request->materialnumber;
        $qrmimage->description = $request->description; 
        $qrmimage->changedby = $changedby;
        $qrmimage->save();

        if ($request->hasFile('files')) {
            $image=$request->file('files');
            if ($image->isValid()) {
                $data = file_get_contents($image->getRealPath());
                $dat= pg_escape_bytea($data); 
                $sql = "update qrm_image set 
                    icon = '".$dat."' 
                    where id = ".$id."
                ";
                $result = DB::connection('pgsql')->select($sql);
            }
        }
        $image = Qrmimage::orderBy('id', 'asc')->get();
        return redirect('/images')->with('judul', $this->judul());
    }
        
  public function delete($id)
    {
        $qrmimage = Qrmimage::find($id);
        $qrmimage->delete();
        
        return redirect('/images')->with('judul', $this->judul());
    }
}
