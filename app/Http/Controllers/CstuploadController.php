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
    

   

    public function prosesexcel(){

        

        $tblgroupuser = Tblgroupuser::get();
        foreach ($tblgroupuser as $key => $value) {
            $value->namegroup = strtoupper($value->namegroup);
        }
        $tblgroupuser_blank = Tblgroupuser::where('namegroup', '=', 'Other - End User')->first();
        $vsta_usaha = "";
        $ssta_usaha = "";
        $sta_usaha = Dtadditional::where('type', '=', 'STATUS_USAHA')->get();
        foreach ($sta_usaha as $key => $value) {
            $value->desc = strtoupper($value->desc);
        }
        $vbentuk_usaha = "";
        $sbentuk_usaha = "";
        $bentuk_usaha = Dtadditional::where('type', '=', 'BENTUK_USAHA')->get();
        foreach ($bentuk_usaha as $key => $value) {
            $value->desc = strtoupper($value->desc);
        }

        



        $tbluserarray = array();
        $usrprofilearray = array();

        $baca = '';
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        foreach ($data_upload as $key => $value) {
            $usergroup = $tblgroupuser_blank->idusergroup;
            if ($value['user_type']){
                foreach ($tblgroupuser as $key2 => $value2) {
                    $position = strpos($value2['namegroup'], strtoupper(  substr($value['user_type'],1,4)));
                    if ($position !== false){
                        $usergroup = $value2['idusergroup'];
                    break;  
                    }
                }
            } 
            $vbentuk_usaha = "";
            if($value['bentuk_usaha']){
                if ($sbentuk_usaha <> $value['bentuk_usaha']){
                    $sbentuk_usaha = $value['bentuk_usaha'];
                    foreach ($bentuk_usaha as $key2 => $value2) {
                        if ($value2->desc == strtoupper($value['bentuk_usaha'])){
                            $vbentuk_usaha = $value2->seq;
                        break;  
                        }
                    }
                }
            }
            $vsta_usaha = "";
            if($value['status_usaha']){
                if ($ssta_usaha <> $value['status_usaha']){
                    $ssta_usaha = $value['status_usaha'];
                    foreach ($sta_usaha as $key2 => $value2) {
                        if ($value2->desc == strtoupper($value['status_usaha'])){
                            $vsta_usaha = $value2->seq;
                        break;  
                        }
                    }
                }
                
            }

            

        
            $value['kelurahan'] = $value['kelurahan'] .',,,';
            $kelurahans = explode( ',', $value['kelurahan']);
            $tbluser = Tbluser::where('user_id', '=', $value['user_id'])->first();
            if (!$tbluser){
                // // $tbluser = new Tbluser;
                // array_push($tbluserarray, array(
                //     'user_id' => $value['user_id'],
                //     'password' => "123",
                //     'usergroup' => $usergroup,
                //     'fullname' => $value['nama_pribadi'],
                //     'birthdate' => ($value['tgl_lahir']==''?null:$value['tgl_lahir']),
                //     'birthplace' => $value['tmpt_lahir'],
                //     'company' => $value['usercode'],
                //     'branch' => $value['company'],
                //     'inactive' => ($value['status_customer'] <> 'AKTIF'? 'Y' : null)
                // ));

                $tbluser = new Tbluser;
                $tbluser->user_id = $value['user_id'];
                $tbluser->password = "123";
                $tbluser->usergroup = $usergroup;
                $tbluser->fullname = ($value['nama_pribadi']==''?$value['name_1_usaha']:$value['nama_pribadi']);
                $tbluser->birthdate = ($value['tgl_lahir']==''?null:$value['tgl_lahir']);
                $tbluser->birthplace = $value['tmpt_lahir'];
                $tbluser->company = $value['usercode'];
                $tbluser->branch = $value['company'];
                $tbluser->inactive = ($value['status_customer'] <> 'AKTIF'? 'Y' : null);
                $tbluser->save();
            } else {
                $tbluser->user_id = $value['user_id'];
                $tbluser->usergroup = $usergroup;
                $tbluser->fullname = ($value['nama_pribadi']==''?$value['name_1_usaha']:$value['nama_pribadi']);
                $tbluser->birthdate = ($value['tgl_lahir']=='' ? null : $value['tgl_lahir'] );
                $tbluser->birthplace = $value['tmpt_lahir'];
                $tbluser->company = $value['usercode'];
                $tbluser->branch = $value['company'];
                $tbluser->inactive = ($value['status_customer'] <> 'AKTIF'? 'Y' : null);
                $tbluser->save();
            }

            $type="KODE_SAP";
            $data_kodesap = Usradditional::where('user_id', '=', $value['user_id'])
                ->where('type', '=', $type)
                ->where('desc', '=', $value['customer'])
                ->first();
            if (!$data_kodesap){
                $data_kodesap = new Usradditional;
                $data_kodesap->seq = 1;
                $data_kodesap->user_id = $value['user_id'];
                $data_kodesap->type = $type;
                $data_kodesap->desc = $value['customer'];
            }
            $data_kodesap->sseq    = null;
            $data_kodesap->value1  = null;
            $data_kodesap->value2  = null;
            $data_kodesap->value3  = null;
            $data_kodesap->value4  = null;
            $data_kodesap->value5  = null;
            $data_kodesap->value6  = null;
            $data_kodesap->value7  = null;
            $data_kodesap->save();

            
            
            $usrprofile = Usrprofile::where('user_id', '=', $value['user_id'])->first();
            if (!$usrprofile){
                $usrprofile = new Usrprofile;
                $usrprofile->user_id     = $value['user_id'];
                // $usrprofile->kodesap     = $value['customer'];
                $usrprofile->noktp       = $value['nik'];
                $usrprofile->almtktp     = $value['street'];
                $usrprofile->kelktp      = $kelurahans[0];
                $usrprofile->kecktp      = $kelurahans[1];
                $usrprofile->kotaktp     = $kelurahans[2];
                $usrprofile->propktp     = $kelurahans[3];
                $usrprofile->kdposktp    = $value['postalcode'];
                $usrprofile->almtrmh     = $value['street'];
                $usrprofile->kelrmh      = $kelurahans[0];
                $usrprofile->kecrmh      = $kelurahans[1];
                $usrprofile->kotarmh     = $kelurahans[2];
                $usrprofile->proprmh     = $kelurahans[3];
                $usrprofile->kdposrmh    = $value['postalcode'];
                $usrprofile->tlppri      = $value['telephone_1'];
                $usrprofile->faxpri      = $value['oth_telp_hp_fax'];
                $usrprofile->emailpri    = $value['medsos'];
                $usrprofile->hobby       = $value['hobby'];
                $usrprofile->btkush      = $vbentuk_usaha;
                $usrprofile->npwp        = $value['vat_registration_no'];
                $usrprofile->status      = $vsta_usaha;
                $usrprofile->emailush    = $value['e_mail_address'];
                $usrprofile->namaalias   = $value['alias'];
                $usrprofile->agama       = $value['agama'];
                $usrprofile->goldarah    = $value['gol_darah'];
                $usrprofile->save();
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
                $usrprofile->btkush        = $vbentuk_usaha; 
                // $usrprofile->tipeush       = null; 
                $usrprofile->npwp          = $value['vat_registration_no']; 
                $usrprofile->status        = $vsta_usaha; 
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
            Usradditional::where('user_id','=',$value['user_id'])
                ->where('type', '=', 'AGEN_HUB')
                ->update(['value7' => 'X']);
            $seq = 0;
            $seq = $this->saveagenhub($value['user_id'], $value['code_cust_1'], $seq);
            $seq = $this->saveagenhub($value['user_id'], $value['code_cust_2'], $seq);
            $seq = $this->saveagenhub($value['user_id'], $value['code_cust_3'], $seq);
            $seq = $this->saveagenhub($value['user_id'], $value['code_cust_4'], $seq);
            $seq = $this->saveagenhub($value['user_id'], $value['code_cust_5'], $seq);
            DB::table('usr_additional')
                ->where('user_id', '=', $value['user_id'])
                ->where('type', '=', 'AGEN_HUB')
                ->where('value7', '=', 'X')
                ->delete();
        }

        // if(!$tbluserarray){
        //     Tbluser::insert($tbluserarray);
        // }
        // if(!$usrprofilearray){
        //     Usrprofile::insert($usrprofilearray);
        // }
        
        DB::table('import_profile')
                ->where('uid', '=', Auth::user()->uid)
                ->delete();

        return redirect()->route('upload');
        // redirect("/upload1");
    }

    public function saveagenhub($para0, $para1, $para2){
        if ($para1){
            
            $type = 'AGEN_HUB';
            $para2 = $para2 + 1;
            $cekdata = Usradditional::where('user_id','=',$para0)
                ->where('type', '=', $type)
                ->where('seq', '=', $para2)
                ->first();
            if (!$cekdata){
                $cekdata = new Usradditional;
            }
            $cekdata->user_id = $para0;
            $cekdata->type = $type;
            $cekdata->value2 = $para1;
            $cekdata->seq = $para2;
            $cekdata->value7 = null;
            $cekdata->save();
        }
        return $para2;
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
        ->where('seq', '=', $request->inputtypeupload)
        ->first();
        // dd($dtadditional);
		// import data
        $ttl = Excel::import(new CustomerImport(
            $dtadditional
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
