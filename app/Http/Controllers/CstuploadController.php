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
use Session;
use Response;
use Image;
use Excel;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;

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
        $sql = "
        SELECT * FROM tbl_file WHERE COALESCE(`format`,'') <> '';
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }
    

    public function prosesexcel(){
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        foreach ($data_upload as $key => $value) {
            $usrprofile = Usrprofile::where('user_id', '=', $value->user_id)
                ->where('noktp', '=', $value->noktp)->first();
            if($usrprofile){
                $usrprofile = new Usrprofile;
            }
            $usrprofile->user_id        = $value->user_id; 
            $usrprofile->kodesap        = $value->kodesap; 
            $usrprofile->noktp          = $value->noktp; 
            $usrprofile->almtktp        = $value->almtktp; 
            $usrprofile->kelktp         = $value->kelktp; 
            $usrprofile->kecktp         = $value->kecktp; 
            $usrprofile->kotaktp        = $value->kotaktp; 
            $usrprofile->propktp        = $value->propktp; 
            $usrprofile->kdposktp       = $value->kdposktp; 
            $usrprofile->almtrmh        = $value->almtrmh; 
            $usrprofile->kelrmh         = $value->kelrmh; 
            $usrprofile->kecrmh         = $value->kecrmh; 
            $usrprofile->kotarmh        = $value->kotarmh; 
            $usrprofile->proprmh        = $value->proprmh; 
            $usrprofile->kdposrmh       = $value->kdposrmh; 
            $usrprofile->tlppri         = $value->tlppri; 
            $usrprofile->faxpri         = $value->faxpri; 
            $usrprofile->hppri          = $value->hppri; 
            $usrprofile->emailpri       = $value->emailpri; 
            $usrprofile->hobby          = $value->hobby; 
            $usrprofile->namapsgn       = $value->namapsgn; 
            $usrprofile->tmptlhrpsgn    = $value->tmptlhrpsgn; 
            $usrprofile->tgllhrpsgn     = $value->tgllhrpsgn; 
            $usrprofile->btkush         = $value->btkush; 
            $usrprofile->tipeush        = $value->tipeush; 
            $usrprofile->npwp           = $value->npwp; 
            $usrprofile->status         = $value->status; 
            $usrprofile->almtush        = $value->almtush; 
            $usrprofile->kelush         = $value->kelush; 
            $usrprofile->kecush         = $value->kecush; 
            $usrprofile->kotaush        = $value->kotaush; 
            $usrprofile->propush        = $value->propush; 
            $usrprofile->kdposush       = $value->kdposush; 
            $usrprofile->tlpush         = $value->tlpush; 
            $usrprofile->faxush         = $value->faxush; 
            $usrprofile->hpush          = $value->hpush; 
            $usrprofile->emailush       = $value->emailush; 
            $usrprofile->lmusaha        = $value->lmusaha; 
            $usrprofile->karakteristik  = $value->karakteristik; 
            $usrprofile->namausaha      = $value->namausaha; 
            $usrprofile->namaalias      = $value->namaalias; 
            $usrprofile->agama          = $value->agama; 
            $usrprofile->goldarah       = $value->goldarah; 
            $usrprofile->headgrp        = $value->headgrp;
            $usrprofile->save();
        }
        redirect("/upload1");
    }

    public function callh($var){
        $tbllogh = DB::table('tbl_log as a')
            ->join('tbluser as b', function($join){
            $join->on('b.uid', '=', 'a.fid' );
        })
        ->select('a.id as urut', 'a.filename', 'a.stat as status', 'a.upltime as uploadtime',
        'a.etime as processtime','a.row as totalrow','b.fullname as user')
        ->get();
        return $tbllogh;
    }

    public function calln($var)
    {
        $now = Carbon::now();
        dd($now); 
        $tbllog = DB::table('tbl_log as a')
            ->join('tbluser as b', function($join){
            $join->on('b.uid', '=', 'a.fid' );
        })
        ->where('upltime', '=', $now->format('Y-m-d'))
        ->select('a.id as urut', 'a.filename', 'a.stat as status', 'a.upltime as uploadtime',
        'a.etime as processtime','a.row as totalrow','b.fullname as user')
        ->orderby('a.upltime', 'desc')
        ->limit(1)
        ->get();
        dd($tbllog);
        return $tbllog;
    }

    public function index()
    {

        $user = $this->getuser();
        $fileupload = $this->fileupload();
        $data_upload = Importprofile::where('uid', '=', $user->user_id)->get();
        
        $tbllog = $this->calln($user->user_id);
        $tbllogh = $this->callh($user->user_id);
        $typefileupload = $this->typefileupload();
        
        $i=0;
        foreach ($tbllog as $key => $value) {
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
        
		// import data
        $ttl = Excel::import(new CustomerImport, public_path('/file_customer/'.$nama_file));
		// notifikasi dengan session
        $nmformat = Tblfile::where('type','=',$request->inputtypeupload)
        ->select('format as nmformat')
        ->first();
 

        $user = $this->getuser();
        // $fileupload = $this->fileupload();
        $data_upload = Importprofile::where('uid', '=', Auth::user()->uid)->get();
        $now = Carbon::now();
        $tbllog = new Tbllog;
        $tbllog->fid = Auth::user()->uid;
        $tbllog->uplid = Auth::user()->uid;
        $tbllog->filename = $nmformat;
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
        $tbllog = $this->calln($user->user_id);
        $i=0;
         foreach ($tbllog as $key => $value) {
            $i++;
            $value->urut = $i;
         }
         $tbllogh = $this->callh($user->user_id);

      
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
