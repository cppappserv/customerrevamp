<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\Importprofile;
use App\Models\Tbllog;
use App\Exports\CustomerExport;
use App\Imports\CustomerImport;
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
use App\Models\Tblfile;
use Illuminate\Support\Str;
use Session;
use Response;
use Image;
use Excel;
use DB;
use Carbon\Carbon;
// use Illuminate\Support\Str;

class CstuploadController extends Controller
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
        $user1 = Auth::user(); // tbluser::where('user_id','=','supram.maharwantijo@cpp.co.id')->first();
        $user = tbluser::where('uid','=',$user1->uid)->first();
        
        return $user;
    }

    public function fileupload(){
        $sql = "
            select '1' urut, 'file name'   filename, 'status'   status, '2020-01-01 08:00:00' uploadtime, '2020-01-01 08:02:00' processtime, 100 totalrow, 'supram' user union
            select '2' urut, 'file name-2' filename, 'status-2' status, '2020-01-01 08:00:00' uploadtime, '2020-01-01 08:02:00' processtime, 100 totalrow, 'supram' user 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function typefileupload(){
        $grp = Dtadditional::where('type', '=', 'COMPANY')->get();
        // $sql = "
        //     SELECT * FROM tbl_file WHERE COALESCE(`format`,'') <> ''
        // ";
        // $grp = db::connection('mysql')->select($sql);
        return $grp;
    }
    

    public function zprosesexcel(){
        $tblgroupuser = Tblgroupuser::get();
        foreach ($tblgroupuser as $key => $value) {
            $value->namegroup = strtoupper($value->namegroup);
        }
        $tbluserarray = array();
        $usrprofilearray = array();

        $baca = '';
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        foreach ($data_upload as $key => $value) {
           
            $usergroup = '11';

            if ($value['user_type']){
                foreach ($tblgroupuser as $key2 => $value2) {
                    $position = strpos($value2['namegroup'], strtoupper($value['user_type']));
                    if ($position !== false){
                        $usergroup = $value2['idusergroup'];
                    break;  
                    }
                }
            }
            
            
            $value['kelurahan'] = $value['kelurahan'] .',,,';
            $kelurahans = explode( ',', $value['kelurahan']);
            $tbluser = Tbluser::where('user_id', '=', $value['user_id'])->first();
            if (!$tbluser){
                // $tbluser = new Tbluser;
                array_push($tbluserarray, array(
                    'user_id' => $value['user_id'],
                    'password' => "123",
                    'usergroup' => $usergroup,
                    'fullname' => $value['nama_pribadi'],
                    'birthdate' => ($value['tgl_lahir']==''?null:$value['tgl_lahir']),
                    'birthplace' => $value['tmpt_lahir'],
                    'company' => $value['desc'],
                    'branch' => $value['usercode'],
                    'inactive' => ($value['status_customer'] <> 'AKTIF'? 'Y' : null)
                ));
            } else {
                $user_id = $value['user_id'];
                $usergroup = $usergroup;
                $fullname = $value['nama_pribadi'];
                $birthdate = ($value['tgl_lahir']=='' ? null : $value['tgl_lahir'] );
                $birthplace = $value['tmpt_lahir'];
                $company = $value['desc'];
                $branch = $value['usercode'];
                $inactive = ($value['status_customer'] <> 'AKTIF'? 'Y' : null);

                DB::update('update tbluser 
                    set usergroup=?,fullname=?,birthdate=?,birthplace=?,company=?,branch=?,inactive=?
                    where user_id = ?'
                    ,[$usergroup,$fullname,$birthdate,$birthplace,$company,$branch,$inactive,$user_id]
                );

            }
            
            
            $usrprofile = Usrprofile::where('user_id', '=', $value['user_id'])->first();
            if (!$usrprofile){
                array_push($usrprofilearray, array(
                    'user_id'       => $value['user_id'],
                    'kodesap'       => $value['customer'],
                    'noktp'         => $value['nik'],
                    'almtktp'       => $value['street'],
                    'kelktp'        => $kelurahans[0],
                    'kecktp'        => $kelurahans[1],
                    'kotaktp'       => $kelurahans[2],
                    'propktp'       => $kelurahans[3],
                    'kdposktp'      => $value['postalcode'],
                    'almtrmh'       => $value['street'],
                    'kelrmh'        => $kelurahans[0],
                    'kecrmh'        => $kelurahans[1],
                    'kotarmh'       => $kelurahans[2],
                    'proprmh'       => $kelurahans[3],
                    'kdposrmh'      => $value['postalcode'],
                    'tlppri'        => $value['telephone_1'],
                    'faxpri'        => $value['oth_telp_hp_fax'],
                    'emailpri'      => $value['medsos'],
                    'hobby'         => $value['hobby'],
                    'btkush'        => $value['bentuk_usaha'],
                    'npwp'          => $value['vat_registration_no'],
                    'status'        => $value['status_usaha'],
                    'emailush'      => $value['e_mail_address'],
                    'namaalias'     => $value['alias'],
                    'agama'         => $value['agama'],
                    'goldarah'      => $value['gol_darah']
                ));
            } else {
                $user_id       = $value['user_id']; 
                $kodesap       = $value['customer']; 
                $noktp         = $value['nik']; 
                $almtktp       = $value['street']; 
                $kelktp        = $kelurahans[0];
                $kecktp        = $kelurahans[1]; 
                $kotaktp       = $kelurahans[2]; 
                $propktp       = $kelurahans[3]; 
                $kdposktp      = $value['postalcode']; 
                $almtrmh       = $value['street']; 
                $kelrmh        = $kelurahans[0];
                $kecrmh        = $kelurahans[1];
                $kotarmh       = $kelurahans[2];
                $proprmh       = $kelurahans[3]; 
                $kdposrmh      = $value['postalcode']; 
                $tlppri        = $value['telephone_1']; 
                $faxpri        = $value['oth_telp_hp_fax']; 
                $emailpri      = $value['medsos']; 
                $hobby         = $value['hobby']; 
                $btkush        = $value['bentuk_usaha']; 
                $npwp          = $value['vat_registration_no']; 
                $status        = $value['status_usaha']; 
                $emailush      = $value['e_mail_address']; 
                $namaalias     = $value['alias']; 
                $agama         = $value['agama']; 
                $goldarah      = $value['gol_darah']; 

                DB::table('schools')
                    ->where('user_id', $postal->postal_code)
                    ->update(['lat' => $address['lat'], 'lng' => $address['lng']]);


                DB::update('
                update usr_profile set 
                    kodesap=?,noktp=?,almtktp=?,kelktp=?,kecktp=?,kotaktp=?,propktp=?,
                    kdposktp=?,almtrmh=?,kelrmh=?,kecrmh=?,kotarmh=?,proprmh=?,kdposrmh=?,tlppri=?,
                    faxpri=?,emailpri=?,hobby=?,btkush=?,npwp=?,status=?,emailush=?,namaalias=?,agama=?,goldarah=? 
                where id = ?'
                ,[$kodesap,$noktp,$almtktp,$kelktp,$kecktp,$kotaktp,$propktp,
                $kdposktp,$almtrmh,$kelrmh,$kecrmh,$kotarmh,$proprmh,$kdposrmh,$tlppri,
                $faxpri,$emailpri,$hobby,$btkush,$npwp,$status,$emailush,$namaalias,$agama,$goldarah
                ,$user_id]);
            }  
            if ($value['user_id'] == 'CKP3016857'){
                dd($value); 
            }
        }

        
        return redirect()->route('upload');
        // redirect("/upload1");
    }


    public function prosesexcel(){
        $tblgroupuser = Tblgroupuser::get();
        foreach ($tblgroupuser as $key => $value) {
            $value->namegroup = strtoupper($value->namegroup);
        }
        $tbluserarray = array();
        $usrprofilearray = array();

        $baca = '';
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        foreach ($data_upload as $key => $value) {
           
            $usergroup = '11';

            if ($value['user_type']){
                foreach ($tblgroupuser as $key2 => $value2) {
                    $position = strpos($value2['namegroup'], strtoupper($value['user_type']));
                    if ($position !== false){
                        $usergroup = $value2['idusergroup'];
                    break;  
                    }
                }
            }
            
            
            $value['kelurahan'] = $value['kelurahan'] .',,,';
            $kelurahans = explode( ',', $value['kelurahan']);
            $tbluser = Tbluser::where('user_id', '=', $value['user_id'])->first();
            if (!$tbluser){
                // $tbluser = new Tbluser;
                array_push($tbluserarray, array(
                    'user_id' => $value['user_id'],
                    'password' => "123",
                    'usergroup' => $usergroup,
                    'fullname' => $value['nama_pribadi'],
                    'birthdate' => ($value['tgl_lahir']==''?null:$value['tgl_lahir']),
                    'birthplace' => $value['tmpt_lahir'],
                    'company' => $value['desc'],
                    'branch' => $value['usercode'],
                    'inactive' => ($value['status_customer'] <> 'AKTIF'? 'Y' : null)
                ));
            } else {
                $tbluser->user_id = $value['user_id'];
                $tbluser->usergroup = $usergroup;
                $tbluser->fullname = $value['nama_pribadi'];
                $tbluser->birthdate = ($value['tgl_lahir']=='' ? null : $value['tgl_lahir'] );
                $tbluser->birthplace = $value['tmpt_lahir'];
                $tbluser->company = $value['desc'];
                $tbluser->branch = $value['usercode'];
                $tbluser->inactive = ($value['status_customer'] <> 'AKTIF'? 'Y' : null);
                $tbluser->save();
            }
            
            
            $usrprofile = Usrprofile::where('user_id', '=', $value['user_id'])->first();
            if (!$usrprofile){
                array_push($usrprofilearray, array(
                    'user_id'       => $value['user_id'],
                    'kodesap'       => $value['customer'],
                    'noktp'         => $value['nik'],
                    'almtktp'       => $value['street'],
                    'kelktp'        => $kelurahans[0],
                    'kecktp'        => $kelurahans[1],
                    'kotaktp'       => $kelurahans[2],
                    'propktp'       => $kelurahans[3],
                    'kdposktp'      => $value['postalcode'],
                    'almtrmh'       => $value['street'],
                    'kelrmh'        => $kelurahans[0],
                    'kecrmh'        => $kelurahans[1],
                    'kotarmh'       => $kelurahans[2],
                    'proprmh'       => $kelurahans[3],
                    'kdposrmh'      => $value['postalcode'],
                    'tlppri'        => $value['telephone_1'],
                    'faxpri'        => $value['oth_telp_hp_fax'],
                    'emailpri'      => $value['medsos'],
                    'hobby'         => $value['hobby'],
                    'btkush'        => $value['bentuk_usaha'],
                    'npwp'          => $value['vat_registration_no'],
                    'status'        => $value['status_usaha'],
                    'emailush'      => $value['e_mail_address'],
                    'namaalias'     => $value['alias'],
                    'agama'         => $value['agama'],
                    'goldarah'      => $value['gol_darah']
                ));
            } else {
                $usrprofile->user_id       = $value['user_id']; 
                $usrprofile->kodesap       = $value['customer']; 
                $usrprofile->noktp         = $value['nik']; 
                $usrprofile->almtktp       = $value['street']; 
                $usrprofile->kelktp        = $kelurahans[0];
                $usrprofile->kecktp        = $kelurahans[1]; 
                $usrprofile->kotaktp       = $kelurahans[2]; 
                $usrprofile->propktp       = $kelurahans[3]; 
                $usrprofile->kdposktp      = $value['postalcode']; 
                $usrprofile->almtrmh       = $value['street']; 
                $usrprofile->kelrmh        = $kelurahans[0];
                $usrprofile->kecrmh        = $kelurahans[1];
                $usrprofile->kotarmh       = $kelurahans[2];
                $usrprofile->proprmh       = $kelurahans[3]; 
                $usrprofile->kdposrmh      = $value['postalcode']; 
                $usrprofile->tlppri        = $value['telephone_1']; 
                $usrprofile->faxpri        = $value['oth_telp_hp_fax']; 
                // $usrprofile->hppri         = null; 
                $usrprofile->emailpri      = $value['medsos']; 
                $usrprofile->hobby         = $value['hobby']; 
                // $usrprofile->namapsgn      = null; 
                // $usrprofile->tmptlhrpsgn   = null;
                // $usrprofile->tgllhrpsgn    = null; 
                $usrprofile->btkush        = $value['bentuk_usaha']; 
                // $usrprofile->tipeush       = null; 
                $usrprofile->npwp          = $value['vat_registration_no']; 
                $usrprofile->status        = $value['status_usaha']; 
                // $usrprofile->almtush       = null; 
                // $usrprofile->kelush        = null; 
                // $usrprofile->kecush        = null; 
                // $usrprofile->kotaush       = null;
                // $usrprofile->propush       = null;
                // $usrprofile->kdposush      = null;
                // $usrprofile->tlpush        = null;
                // $usrprofile->faxush        = null;
                // $usrprofile->hpush         = null;
                $usrprofile->emailush      = $value['e_mail_address']; 
                // $usrprofile->lmusaha       = null; 
                // $usrprofile->karakteristik = null;
                // $usrprofile->namausaha     = null;
                $usrprofile->namaalias     = $value['alias']; 
                $usrprofile->agama         = $value['agama']; 
                $usrprofile->goldarah      = $value['gol_darah']; 
                // $usrprofile->headgrp       = null;
                $usrprofile->save();    
            }  
        }

        if(!$tbluserarray){
            Tbluser::insert($tbluserarray);
        }
        if(!$usrprofilearray){
            Usrprofile::insert($usrprofilearray);
        }

        return redirect()->route('upload');
        // redirect("/upload1");
    }

    public function xprosesexcel(){
        $tblgroupuser = Tblgroupuser::get();
        foreach ($tblgroupuser as $key => $value) {
            $value->namegroup = strtoupper($value->namegroup);
        }
        $baca = '';
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        foreach ($data_upload as $key => $value) {
            $usergroup = '11';

            if ($value->user_type){
                foreach ($tblgroupuser as $key2 => $value2) {
                    $position = strpos($value2->namegroup, strtoupper($value->user_type));
                    if ($position !== false){
                        $usergroup = $value2->idusergroup;
                    break;  
                    }
                }
            }
            
            if ($baca <> $value->usercode){
                $dtadditional = Dtadditional::where('type', '=', 'COMPANY')
                ->where('info', '=', $value->usercode)
                ->first();
                $baca = $value->usercode;
            } 
            $value->kelurahan = $value->kelurahan .',,,';
            $kelurahans = explode( ',', $value->kelurahan);
            $user_id = $dtadditional->info6.$value->customer;
            $tbluser = Tbluser::where('user_id', '=', $user_id)->first();
            if (!$tbluser){
                $tbluser::create([

                    'user_id' => $user_id,
                    'password' => "123",

                    'usergroup' => $usergroup,
                    'fullname' => $value->nama_pribadi,
                    'birthdate' => ($value->tgl_lahir=='0000-00-00'?null:$value->tgl_lahir),
                    'birthplace' => $value->tmpt_lahir,
                    'company' => $dtadditional->desc,
                    'branch' => $dtadditional->info,
                    'inactive' => ($value->status_customer <> 'AKTIF'? 'Y' : null)

                ]);
                
                
                


            } else {
                $tbluser->usergroup = $usergroup;
                $tbluser->fullname = $value->nama_pribadi;
                if ($value->tgl_lahir){
                    $tbluser->birthdate = $value->tgl_lahir;
                }
                $tbluser->birthplace = $value->tmpt_lahir;
                $tbluser->company = $dtadditional->desc;
                $tbluser->branch = $dtadditional->info;
                if ($value->status_customer <> 'AKTIF'){
                    $tbluser->inactive = 'Y';
                } else {
                    $tbluser->inactive = null;
                }
                
                $tbluser->save();
            }

            $usrprofile = Usrprofile::where('user_id', '=', $user_id)->first();
            if (!$usrprofile){
                Usrprofile::create([
                    'user_id'       => $user_id,
                    'kodesap'       => $value->customer,
                    'noktp'         => $value->nik,
                    'almtktp'       => $value->street,
                    'kelktp'        => $kelurahans[0],
                    'kecktp'        => $kelurahans[1],
                    'kotaktp'       => $kelurahans[2],
                    'propktp'       => $kelurahans[3],
                    'kdposktp'      => $value->postalcode,
                    'almtrmh'       => $value->street,
                    'kelrmh'        => $kelurahans[0],
                    'kecrmh'        => $kelurahans[1],
                    'kotarmh'       => $kelurahans[2],
                    'proprmh'       => $kelurahans[3],
                    'kdposrmh'      => $value->postalcode,
                    'tlppri'        => $value->telephone_1,
                    'faxpri'        => $value->oth_telp_hp_fax,
                    'emailpri'      => $value->medsos,
                    'hobby'         => $value->hobby,
                    'btkush'        => $value->bentuk_usaha,
                    'npwp'          => $value->vat_registration_no,
                    'status'        => $value->status_usaha,
                    'emailush'      => $value->e_mail_address,
                    'namaalias'     => $value->alias,
                    'agama'         => $value->agama,
                    'goldarah'      => $value->gol_darah
                ]);
            } else {
                $usrprofile->user_id       = $user_id; 
                $usrprofile->kodesap       = $value->customer; 
                $usrprofile->noktp         = $value->nik; 
                $usrprofile->almtktp       = $value->street; 
                $usrprofile->kelktp        = $kelurahans[0];
                $usrprofile->kecktp        = $kelurahans[1]; 
                $usrprofile->kotaktp       = $kelurahans[2]; 
                $usrprofile->propktp       = $kelurahans[3]; 
                $usrprofile->kdposktp      = $value->postalcode; 
                $usrprofile->almtrmh       = $value->street; 
                $usrprofile->kelrmh        = $kelurahans[0];
                $usrprofile->kecrmh        = $kelurahans[1];
                $usrprofile->kotarmh       = $kelurahans[2];
                $usrprofile->proprmh       = $kelurahans[3]; 
                $usrprofile->kdposrmh      = $value->postalcode; 
                $usrprofile->tlppri        = $value->telephone_1; 
                $usrprofile->faxpri        = $value->oth_telp_hp_fax; 
                // $usrprofile->hppri         = null; 
                $usrprofile->emailpri      = $value->medsos; 
                $usrprofile->hobby         = $value->hobby; 
                // $usrprofile->namapsgn      = null; 
                // $usrprofile->tmptlhrpsgn   = null;
                // $usrprofile->tgllhrpsgn    = null; 
                $usrprofile->btkush        = $value->bentuk_usaha; 
                // $usrprofile->tipeush       = null; 
                $usrprofile->npwp          = $value->vat_registration_no; 
                $usrprofile->status        = $value->status_usaha; 
                // $usrprofile->almtush       = null; 
                // $usrprofile->kelush        = null; 
                // $usrprofile->kecush        = null; 
                // $usrprofile->kotaush       = null;
                // $usrprofile->propush       = null;
                // $usrprofile->kdposush      = null;
                // $usrprofile->tlpush        = null;
                // $usrprofile->faxush        = null;
                // $usrprofile->hpush         = null;
                $usrprofile->emailush      = $value->e_mail_address; 
                // $usrprofile->lmusaha       = null; 
                // $usrprofile->karakteristik = null;
                // $usrprofile->namausaha     = null;
                $usrprofile->namaalias     = $value->alias; 
                $usrprofile->agama         = $value->agama; 
                $usrprofile->goldarah      = $value->gol_darah; 
                // $usrprofile->headgrp       = null;
                $usrprofile->save();
            }
        }
        return redirect()->route('upload');
        // redirect("/upload1");
    }

    public function callh($var){
        $tbllogh = DB::table('tbl_log1 as a')
            ->join('tbluser as b', function($join){
            $join->on('b.uid', '=', 'a.fid' );
        })
        ->where('b.uid', '=', $var)
        ->select('a.id as urut', 'a.filename', 'a.stat as status', 'a.upltime as uploadtime',
        'a.etime as processtime','a.row as totalrow','b.fullname as user')
        ->get();
        return $tbllogh;
    }

    public function calln($var)
    {
        $now = Carbon::now();
        $tbllog = DB::table('tbl_log1 as a')
            ->join('tbluser as b', function($join){
            $join->on('b.uid', '=', 'a.fid' );
        })
        ->where('upltime', 'like', $now->format('Y-m-d').'%')
        ->where('b.uid', '=', $var)
        ->select('a.id as urut', 'a.filename', 'a.stat as status', 'a.upltime as uploadtime',
        'a.etime as processtime','a.row as totalrow','b.fullname as user')
        ->orderby('a.upltime', 'desc')
        ->limit(1)
        ->get();
        return $tbllog;
    }

    public function index()
    {
        $user = $this->getuser();
        $fileupload = $this->fileupload();
        $data_upload = Importprofile::where('uid', '=', $user->user_id)
        ->select('nama_pribadi as namaalias','street as almtktp','telephone_1 as hppri')
        ->get();
        $tbllog = $this->calln($user->uid);
        $tbllogh = $this->callh($user->uid);
        
        $typefileupload = $this->typefileupload();
        
        $i=0;
        foreach ($tbllog as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        $i=0;
        foreach ($tbllogh as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        return view('menuupload',[
            'user' => $user,
            'fileupload' => $tbllog,
            'data_upload' => $data_upload,
            'fileuploadh' => $tbllogh,
            'typefileupload' => $typefileupload
        ]);
    }

    public function uploadexcel(Request $request)
    {
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
        ]);
        
        Importprofile::where('uid', '=', Auth::user()->id)->delete();
 
		// menangkap file excel
        $file = $request->file('file');
        
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
        $file->move('file_customer',$nama_file);
        
        $dtadditional = Dtadditional::where('type', '=', 'COMPANY')
        ->where('info', '=', $request->inputtypeupload)
        ->first();
		// import data
        $ttl = Excel::import(new CustomerImport(
            $request->inputtypeupload, 
            $dtadditional->info6,
            $dtadditional->desc
        ), public_path('/file_customer/'.$nama_file));
		// notifikasi dengan session
        // $nmformat = Tblfile::where('type','=',$request->inputtypeupload)
        // ->select('format as nmformat')
        // ->first();

        
            

        $user = $this->getuser();
        // $fileupload = $this->fileupload();
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)
        ->select('nama_pribadi as namaalias','street as almtktp','telephone_1 as hppri')
        ->get();
        

        $now = Carbon::now();
        $tbllog = new Tbllog;
        $tbllog->fid = Auth::user()->uid;
        $tbllog->uplid = Auth::user()->uid;
        $tbllog->filename = $request->inputtypeupload;
        $tbllog->bpath = public_path('/file_customer/'.$nama_file);
        $tbllog->upltime = now(); 
        $tbllog->stime = now();
        $tbllog->etime = now();
        $tbllog->stat = '5';
        $tbllog->prog = '100';
        $tbllog->procid = '100';
        $tbllog->row =  $data_upload->count();
        $tbllog->log = null;
        $tbllog->save();

       

        // $tbllog = DB::table('tbl_log as a')
        //     ->join('tbluser as b', function($join){
        //     $join->on('b.uid', '=', 'a.fid' );
        //     // $join->on('b.bukrs', '=', 'a.company_code');
        //  })
        // ->select('a.id as urut', 'a.filename', 'a.stat as status', 'a.upltime as uploadtime',
        // 'a.etime as processtime','a.row as totalrow','b.fullname as user')
        // ->get();
        // echo $data_upload;
        // exit;
        $tbllog = $this->calln($user->uid);
        $i=0;
         foreach ($tbllog as $key => $value) {
            $i++;
            $value->urut = $i;
         }
         $tbllogh = $this->callh($user->uid);

         
        return view('menuupload',[
            'user' => $user,
            'fileupload' => $tbllog,
            'data_upload' => $data_upload,
            'fileuploadh' => $tbllogh
        ]);
 
        $txt='
            <div class="card-body">
                <div class="row">
                    <div class="col-md-1">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="no[]" name="no[]" value="20">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="nama[]" name="nama[]" value="21">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="alamat[]" name="alamat[]" value="22">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" id="hp[]" name="hp[]" value="22">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
        return response()->json(array('msg'=> $txt), 200);
    }
}
