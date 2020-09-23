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
        DB::beginTransaction();
        try {
            $uid = Auth::user()->uid;
            $exportprofile = Exportprofile::where('uid', '=', $uid)->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }

        $kdsap = Dtadditional::where('type', '=', 'ORG_COMPANY')
        ->where('info', '=', $request->inputcompany) 
        ->select('info2 as sorg','info3 as cocd')
        ->first();

        $vgroupuser = "";
        $tblgroupuser = Tblgroupuser::get();

        $vsta_usaha = "";
        $v1sta_usaha = "";
        $ssta_usaha = "";
        $sta_usaha = Dtadditional::where('type', '=', 'STATUS_USAHA')->get();
        
        $vbentuk_usaha = "";
        $v1bentuk_usaha = "";
        $sbentuk_usaha = "";
        $bentuk_usaha = Dtadditional::where('type', '=', 'BENTUK_USAHA')->get();
        
        
        $usrprofile = DB::table('usr_profile as a')
        ->join('tbluser as b', function($join){
            $join->on('b.user_id', '=', 'a.user_id' );
        })
        ->where('b.company', '=', $request->inputcompany)
        // ->where('b.user_id', '=', 'CKP3013306')
        ->select('a.*','b.uid as iduser', 'b.usergroup','b.fullname','b.birthdate', 'b.birthplace','b.company', 'b.branch', 'b.inactive')
        ->get();
        
        foreach ($usrprofile as $key => $value) {
            
            if ($vgroupuser <> $value->usergroup){
                $vgroupuser = 'AGEN';
                foreach ($tblgroupuser as $key2 => $value2) {
                    if($value->usergroup == $value2->idusergroup){
                        $vgroupuser = $value2->namegroup;
                    break;
                    }
                }
            }
            $vsta_usaha = "";
            if ($value->status){
                if ($ssta_usaha <> $value->status){
                    $ssta_usaha = $value->status;
                    foreach ($sta_usaha as $key2 => $value2) {
                        if ($value2->seq == $value->status){
                            $vsta_usaha = $value2->desc;
                            $v1sta_usaha = $value2->desc;
                        break;  
                        }
                    }

                } else {
                    $vsta_usaha = $v1sta_usaha;
                }
            }
            
            $vbentuk_usaha = "";
            if ($value->btkush){
                if ($sbentuk_usaha <> $value->btkush){
                    $sbentuk_usaha = $value->btkush;
                    foreach ($bentuk_usaha as $key2 => $value2) {
                        if ($value2->seq == $value->btkush){
                            $vbentuk_usaha = $value2->desc;
                            $v1bentuk_usaha = $value2->desc;
                        break;  
                        }
                    }

                } else {
                    $vbentuk_usaha = $v1bentuk_usaha;
                }
            }


            $exportprofile = new Exportprofile;
            
            $exportprofile->id                  = $value->iduser;
            $exportprofile->user_id             = $value->user_id;
            $exportprofile->user_type           = $vgroupuser;
            $exportprofile->area_type           = null;
            $exportprofile->area                = null;
            $exportprofile->sorg                = $kdsap->sorg;
            $exportprofile->customer            = substr($value->user_id,3,7);
            $exportprofile->soff                = null;
            $exportprofile->name_1_usaha        = null;
            $exportprofile->cocd                = $kdsap->cocd;
            $exportprofile->nik                 = null;
            $exportprofile->vat_registration_no = $value->npwp;
            $exportprofile->street              = $value->almtktp;
            $exportprofile->kelurahan           = $value->kelktp.", ".$value->kecktp.", ".$value->kotaktp.", ".$value->propktp;
            $exportprofile->postalcode          = $value->kdposktp;
            $exportprofile->telephone_1         = $value->tlppri;
            $exportprofile->e_mail_address      = $value->emailush;
            $exportprofile->cgrp                = null;
            $exportprofile->alias               = $value->namaalias;
            $exportprofile->tgl_lahir           = $value->birthdate;
            $exportprofile->tmpt_lahir          = $value->birthplace;
            $exportprofile->agama               = $value->agama;
            $exportprofile->gol_darah           = $value->goldarah;
            $exportprofile->oth_telp_hp_fax     = $value->faxpri;
            $exportprofile->medsos              = $value->emailpri;
            $exportprofile->hobby               = $value->hobby;
            $exportprofile->bentuk_usaha        = $vbentuk_usaha;
            $exportprofile->nama_pribadi        = $value->fullname;
            $exportprofile->status_usaha        = $vsta_usaha;
            $exportprofile->status_customer     = ($value->inactive<>null?'TIDAK AKTIF':'AKTIf');
            $exportprofile->uid                 = $uid;

            $cekdata = Usradditional::where('user_id','=',$value->user_id)
                ->where('type', '=', 'AGEN_HUB')
                ->get();
            $seq = 0;
            foreach ($cekdata as $key2 => $value2) {
                $seq = $seq + 1;
                if($seq==1){
                    $exportprofile->code_cust_1 = $value2->value2;
                } else if($seq==2){
                    $exportprofile->code_cust_2 = $value2->value2;
                } else if($seq==3){
                    $exportprofile->code_cust_3 = $value2->value2;
                } else if($seq==4){
                    $exportprofile->code_cust_4 = $value2->value2;
                } else {
                    $exportprofile->code_cust_5 = $value2->value2;
                }
            }
            $exportprofile->save();
        }
        return Excel::download(new CustomerExport, 'Customer.xlsx');
	}
    
}
