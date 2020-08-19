<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home1');
    }

    public function logout(Request $request)
    {
        // dd($request->session());
        // $this->guard()->logout();
        
        $request->session()->flush();
        $request->session()->regenerate();
        return view('auth.login');
 
        // return redirect('/')
        //     ->withSuccess('Terimakasih, selamat datang kembali!');
    }
}
