<?php

namespace App\Http\Controllers\Menus;

use Illuminate\Http\Request;
use App\User;
use App\Models\Rcvrmplant;
use Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Redirect;
use DB;

class OtorisasiwebController extends Controller
{
    public function judul(){
        return 'Adminstrator / User Web'; 
    }
    //
	public function index()
	{
        if(!DB::connection()->getDatabaseName())
        {
            return view('auth.login');
        }
        $akses = $this->judul();
        $nama = Auth::user();
        
        $user = User::get();
        return view('Menus.Otorisasiweb.list', ['user' => $user, 'jdl' => $akses]);
    }

	public function add()
	{
        $akses = $this->judul();
        $rcvrmplant = Rcvrmplant::get();
        return view('Menus.Otorisasiweb.add', ['jdl' => $akses, 'rcvrmplant' =>$rcvrmplant]);
	}

	public function save(Request $request)
	{
        
        $this->validate($request, [
            'name' => ['required', 'string', 'max:12', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:1', 'confirmed'],
            'groupadmin' => ['required'],
            'plant' => ['required'],
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  Hash::make($request->password),
            'plant'  => $request->plant,
            'groupadmin'  => $request->groupadmin,
        ]);
        $akses = $this->judul();
        return redirect('/otorisasiweb')->with('jdl', $akses);
    }

    public function edit($id)
    {
        $akses = $this->judul();
        $user = User::find($id);
        $rcvrmplant = Rcvrmplant::get();
        return view('Menus.Otorisasiweb.edit', ['user' => $user, 'jdl' => $akses, 'rcvrmplant' => $rcvrmplant]);
    }
    
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:12', 'unique:users,name,'.$id],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'groupadmin' => ['required'],
            'plant' => ['required'],
        ]);

        $user = User::find($id);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->plant = $request->plant;
        $user->groupadmin = $request->groupadmin;
        $user->save();
        $akses = $this->judul();
        return redirect('/otorisasiweb')->with('jdl', $akses);
    }

    public function resetpass($id)
    {
        $akses = $this->judul('Rest Password');
        $user = User::find($id);
        return view('Menus.Otorisasiweb.editpass', ['user' => $user, 'akses' => $akses]);
    }

    public function resetupdate($id, Request $request)
    {
        $this->validate($request, [
            'password' => ['required', 'string', 'min:1', 'confirmed'],
        ]);

        $user = User::find($id);
        $user->password = Hash::make($request->password);
        $user->save();
        $akses = $this->judul();
        return redirect('/otorisasiweb')->with('jdl', $akses);
    }
        
  public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        $akses = $this->judul();
        return redirect('/otorisasiweb')->with('jdl', $akses);
    }
    
	public function filter(Request $request) 
	{

        $user = User::orderBy('updated_at','desc')
        ->where('name', 'like', '%'.$request->name.'%') 
        ->where('email', 'like', '%'.$request->email.'%') 
        ->get();
        $akses = $this->judul();
        return view('Menus.Otorisasiweb.list', ['user' => $user, 'jdl' => $akses]);
    }
}