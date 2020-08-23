<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
use App\Models\Usrprofile;
use App\Models\Usradditional;
use App\Models\Dtadditional;
use App\Models\Tblgroupuser;
use App\Models\Tblobject;
use App\Models\Tbluserphoto;
use App\Models\Zbranch;
use App\Models\Usrupload;
use App\Models\Exportprofile;

use App\Exports\CustomerExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Session;
use DB;

class CstsettingController extends Controller
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
    public function getuser()
    {
        $user1 = Auth::user();
        $user = tbluser::where('uid','=',$user1->uid)->first();
        return $user;
    }

    public function index()
    {
        $user = $this->getuser();
        // SELECT * FROM dt_additional a WHERE a.type='COMPANY';
        $databu = Dtadditional::where('type', '=', 'COMPANY')
        ->select('info3')
        ->distinct()
        ->get();
        $tblobject = Tblobject::where('objtype','=','7')->get();

        return view('menusetting', [
            'user' => $user,
            'databu' => $tblobject
        ]);
    }   
    
    public function export_excel(Request $request)
	{
        $uid = Auth::user()->uid;
        $exportprofile = Exportprofile::where('uid', '=', $uid)->delete();

        $usrprofile = DB::table('usr_profile as a')
        ->join('tbluser as b', function($join){
            $join->on('b.user_id', '=', 'a.user_id' );
        })->where('b.company', '=', $request->inputcompany)
        ->select('a.*')
        ->get();
        foreach ($usrprofile as $key => $value) {
            $exportprofile = new Exportprofile;
            $exportprofile->user_id       = $value->user_id;
            $exportprofile->kodesap       = $value->kodesap;
            $exportprofile->noktp         = $value->noktp;
            $exportprofile->almtktp       = $value->almtktp;
            $exportprofile->kelktp        = $value->kelktp;
            $exportprofile->kecktp        = $value->kecktp;
            $exportprofile->kotaktp       = $value->kotaktp;
            $exportprofile->propktp       = $value->propktp;
            $exportprofile->kdposktp      = $value->kdposktp;
            $exportprofile->almtrmh       = $value->almtrmh;
            $exportprofile->kelrmh        = $value->kelrmh;
            $exportprofile->kecrmh        = $value->kecrmh;
            $exportprofile->kotarmh       = $value->kotarmh;
            $exportprofile->proprmh       = $value->proprmh;
            $exportprofile->kdposrmh      = $value->kdposrmh;
            $exportprofile->tlppri        = $value->tlppri;
            $exportprofile->faxpri        = $value->faxpri;
            $exportprofile->hppri         = $value->hppri;
            $exportprofile->emailpri      = $value->emailpri;
            $exportprofile->hobby         = $value->hobby;
            $exportprofile->namapsgn      = $value->namapsgn;
            $exportprofile->tmptlhrpsgn   = $value->tmptlhrpsgn;
            $exportprofile->tgllhrpsgn    = $value->tgllhrpsgn;
            $exportprofile->btkush        = $value->btkush;
            $exportprofile->tipeush       = $value->tipeush;
            $exportprofile->npwp          = $value->npwp;
            $exportprofile->status        = $value->status;
            $exportprofile->almtush       = $value->almtush;
            $exportprofile->kelush        = $value->kelush;
            $exportprofile->kecush        = $value->kecush;
            $exportprofile->kotaush       = $value->kotaush;
            $exportprofile->propush       = $value->propush;
            $exportprofile->kdposush      = $value->kdposush;
            $exportprofile->tlpush        = $value->tlpush;
            $exportprofile->faxush        = $value->faxush;
            $exportprofile->hpush         = $value->hpush;
            $exportprofile->emailush      = $value->emailush;
            $exportprofile->lmusaha       = $value->lmusaha;
            $exportprofile->karakteristik = $value->karakteristik;
            $exportprofile->namausaha     = $value->namausaha;
            $exportprofile->namaalias     = $value->namaalias;
            $exportprofile->agama         = $value->agama;
            $exportprofile->goldarah      = $value->goldarah;
            $exportprofile->headgrp       = $value->headgrp;
            $exportprofile->uid           = $uid;
            $exportprofile->save();
        }
        return Excel::download(new CustomerExport, 'Customer.xlsx');
	}
    
}
