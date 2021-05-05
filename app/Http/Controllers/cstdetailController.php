<?php
namespace App\Http\Controllers;
use Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
use App\Models\Usrprofile;
use App\Models\Usradditional;
use App\Models\Dtadditional;
use App\Models\Tblgroupuser;
use App\Models\Tblobject;
use App\Models\Tbluserphoto;
use App\Models\Tbluserphotoadd;
use App\Models\Zbranch;
use App\Models\Usrupload;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Loglogin;
use Redirect;
use Response;
use Image;
use DB;

class CstdetailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $variable;
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

    public function grpbu()
    {
        $sql = "
        select 0 as urut, c1.info3 des ,count(*) ttl 
        from tbluser a1
        inner join tblobject b1 on b1.objtype='7' and a1.branch = b1.objname
        inner join dt_additional c1 on c1.info = a1.company
        group by c1.info3
        ";
        $grp = db::connection('mysql')->select($sql);
        $i=0;
        foreach ($grp as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        return $grp;
    }

    public function datacompany($para1, $para2)
    {
        // $para1 = "FISH FEED";
        // $para2 = "12345";
        $sql = "
        select a1.uid, a1.user_id customer_id, a1.fullname customer_name, c1.info4 bu, a2.fullname created_by, 
        date_format(a1.createddate,'%y-%m-%d') created_dt, date_format(a1.createddate,'%h:%i:%s') created_time, 
        a3.fullname changed_by, 
        date_format(a1.updateddate,'%y-%m-%d') changed_dt, date_format(a1.updateddate,'%h:%i:%s') changed_time
        from tbluser a1
        inner join tblobject b1 on b1.objtype='7' and a1.branch = b1.objname
        inner join dt_additional c1 on c1.info = a1.company
        left outer join tbluser a2 on a1.createdby = a2.uid
        left outer join tbluser a3 on a1.updatedby = a3.uid
        where c1.info3 = '".$para1."' and a1.company = '".$para2."'
           ";
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
        
    }

    public function grpcompany($para)
    {
        $sql = "
        select 0 urut, c1.info, concat(c1.info2,'/') des, concat(c1.info4,'/') des2, if(c1.info5 is null,'',concat(c1.info5,'/')) des3 ,count(*) ttl 
        from tbluser a1
        inner join tblobject b1 on b1.objtype='7' and a1.branch = b1.objname
        inner join dt_additional c1 on c1.info = a1.company
        where c1.info3 = '".$para."'
        group by c1.info, c1.info2, c1.info4, c1.info5;
        ";
        $grp = db::connection('mysql')->select($sql);
        $i=0;
        foreach ($grp as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        return $grp;
    }

    
    public function tblagama()
    {
        $sql = "select seq id, `desc` agama from `dt_additional` where `type` = 'agama_list'";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tbldarah()
    {   
        $sql = "select seq id, `desc` darah from `dt_additional` where `type` = 'darah_list'";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblmedsos()
    {
        $sql = "SELECT * FROM `dt_additional`  WHERE `type` = 'MEDSOS'";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblagenhubunganstatus()
    {
        $sql = "SELECT * FROM `dt_additional`  WHERE TYPE = 'AGEN_HUB_STATUS'";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    

  

    

    public function company($kode)
    {
        $user = $this->getuser();
        $grpcmp = $this->grpcompany($kode);
        $pilcompany = $kode;
        return view('menubu', [
            'user' => $user,
            'percompany' => $grpcmp,
            'pilcompany' => $pilcompany
        ]);
    }

    public function subcompany($kode, $kode2)
    {
        // echo $kode."<br>".$kode2;
        // exit;
        $user = $this->getuser();
        $datacmp = $this->datacompany($kode, $kode2);
        $pilcompany = $kode;
        $pilcompany2 = $kode2;
        return view('menubusub', [
            'user' => $user,
            'listdata' => $datacmp,
            'pilcompany' => $pilcompany,
            'pilcompany2' => $pilcompany2
        ]);
    }

    public function tblsex()
    {
        
        // $sql = "select info id, `desc` sex from `dt_additional` where `type` = 'jenis_kelamin'";
        $sql = "select * from `dt_additional`  where type = 'jenis_kelamin'";
        // $sql = "
        //     select 'l' id, 'laki-laki'  sex union 
        //     select 'w' id, 'wanita'  sex
        // ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblstatus()
    {
        $sql = "select info id, `desc` status from `dt_additional` where `type` = 'hub_keluarga'";
        
        $sql = "
            select 'istri' id, 'istri' status union 
            select 'suami' id, 'suami' status union 
            select 'a1' id, 'anak-1' status union 
            select 'a2' id, 'anak-2'  status
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblsekolah()
    {
        
        // $sql = "select info id, `desc` sekolah from `dt_additional` where `type` = 'pendidikan'";
        $sql = "SELECT * FROM `dt_additional`  WHERE TYPE = 'PENDIDIKAN'";

        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblpakan()
    {
        $sql = "SELECT * FROM dt_additional WHERE  TYPE = 'PAKAN_JUAL'
        ORDER BY seq ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblhubkelga()
    {
        $sql = "SELECT * FROM dt_additional WHERE  TYPE = 'HUB_KELUARGA'
        ORDER BY seq ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    } 

    

    public function dataadditional($para)
    {
        $sql = "
            SELECT a.*, b.desc desc1, b.info, b.info2, b.info3, b.info4 
            FROM usr_additional a
            left outer JOIN dt_additional b ON b.type = a.type AND b.seq = a.seq
            WHERE a.user_id = '$para'
        ";
        // AND a.type = 'MEDSOS'
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function datausr_profile($para)
    {
        $sql = "
            SELECT *
            FROM usr_profile
            WHERE a.user_id = '$para'
        ";
        // AND a.type = 'MEDSOS'
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }
    


    public function tabelarea_subagen()
    {
        $sql = "
            SELECT * FROM dt_additional a WHERE TYPE IN ('AREA_SUBAGEN','AREA_PETAMBAK','AREA_LAIN');
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function tabelbentukusaha()
    {
        // $sql = "
        //     SELECT * FROM dt_additional a WHERE TYPE = 'BENTUK_USAHA';
        // ";

        // $grp = db::connection('mysql')->select($sql);
        // return $grp;

        return db::table('dt_additional')->where('TYPE', '=', 'BENTUK_USAHA')->orderby('seq', 'asc')->get();
    }

    public function tabelbadanhukum()
    {
        // $sql = "
        //     SELECT * FROM dt_additional a WHERE TYPE = 'BADAN_HUKUM';
        // ";
        // $grp = db::connection('mysql')->select($sql);
        // return $grp;

        return db::table('dt_additional')->where('TYPE', '=', 'BADAN_HUKUM')->where('parent', '=', '1')->orderby('seq', 'asc')->get();
    }

    public function tabelstatus_usaha()
    {
        $sql = "
            SELECT * FROM dt_additional a WHERE `type` = 'STATUS_USAHA'
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tabelarea_usaha()
    {
        $sql = "
        SELECT * 
        FROM dt_additional WHERE
          TYPE IN  ('AREA_PETAMBAK','AREA_SUBAGEN','AREA_LAIN')
                  ORDER BY seq 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function tblassetpribadi()
    {
        $sql = "
        SELECT * 
        FROM dt_additional WHERE
          TYPE = 'ASSET_PRIBADI'
                  ORDER BY seq 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblbank()
    {
        $sql = "
        SELECT * 
        FROM dt_additional WHERE
          TYPE = 'NAMA_BANK'
                  ORDER BY seq 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tbljudulbank()
    {
        $sql = "
        SELECT * 
        FROM dt_additional WHERE
          TYPE = 'MODAL_BANK'
                  ORDER BY seq 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tbljaminanpribadi($para)
    {
        $sql = "
        select concat(seq,'/',coalesce(`desc`,'-'),'/',coalesce(info,'-'),'/',coalesce(info2,'-'),'/',coalesce(info3,'-'),'/',coalesce(info4,'-')) seq,`desc` 
        from dt_additional 
        where  type = '".$para."'
        order by seq
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function addasset($para, $para2)
    {
        $sql = "
        select b.*, 
        a.desc, 
        a.info, 
        a.info2, 
        a.info3, 
        a.info4, 
        a.parent, 
        a.display, 
        a.info5
    from dt_additional a
            inner join usr_additional b
            on a.type = b.type
            and b.user_id='".$para."'
            where  a.type in ('".$para2."')
            and a.seq = b.sseq
            order by a.seq
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function addasset2($para, $para2)
    {
        if ($para == 0){
            $sql = "
            select b.*, 
                    a.desc desc1, 
                    a.info, 
                    a.info2, 
                    a.info3, 
                    a.info4, 
                    a.parent, 
                    a.display, 
                    a.info5
            from dt_additional a 
            left outer join usr_additional b 
                on a.type = b.type
                    and b.user_id='".$para."'
                    and a.seq = b.seq
            where a.type in ('".$para2."')
            order by a.seq
        ";
        } else {
            $sql = "
            select b.*, 
                    a.desc, 
                    a.info, 
                    a.info2, 
                    a.info3, 
                    a.info4, 
                    a.parent, 
                    a.display, 
                    a.info5
            from dt_additional a 
            left outer join usr_additional b 
                on a.type = b.type
                    and b.user_id='".$para."'
                    and a.seq = b.seq
            where a.type in ('".$para2."')
                and b.user_id is not null
            order by a.seq
        ";
        }
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function addasset4($para, $para2)
    {
        
        $sql = "
        select a.* , b.desc desc1, 
        b.info, 
        b.info2, 
        b.info3, 
        b.info4, 
        b.parent, 
        b.display, 
        b.info5
    from usr_additional a
    inner join dt_additional b on b.type = a.type and a.sseq = b.seq
    where a.type in ('".$para2."')
    and user_id = '".$para."'
    order by a.seq
        ";
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function addasset3($para, $para2)
    {
        $sql = "
        select b.*, 
        a.desc desc1, 
        a.info, 
        a.info2, 
        a.info3, 
        a.info4, 
        a.parent, 
        a.display, 
        a.info5
from dt_additional a 
cross join usr_additional b 
    on a.type = b.type
        and b.user_id='".$para."'
where a.type in ('".$para2."')
order by a.seq
        ";
        
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function storeimage($image_id) {
        $image = Tbluserphoto::where('user_id', '=', $image_id)->first();
        if(!$image or $image->zimage == ""){
            $image = Tbluserphoto::where('user_id', '=', '-123')->first();
        }
        // if($image->zimage == ""){
        //     $image = Tbluserphoto::where('user_id', '=', '-123')->first();
        // }
        
		$image_file = Image::make($image->zimage);
		$response = Response::make($image_file->encode('jpeg'));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
    }

    public function storeimageother($image_id) {
        $image = Tbluserphotoadd::where('id', '=', $image_id)->first();
        if(!$image or $image->zimage == ""){
            $image = Tbluserphoto::where('user_id', '=', '-123')->first();
        }
		$image_file = Image::make($image->zimage);
		$response = Response::make($image_file->encode('jpeg'));
		$response->header('Content-Type', 'image/jpeg');
		return $response;
    }

    public function index($kode, $kode3, $kode2, $kode4)
    {
        // FISH FEED - 12345
        // FISH FEED - 12345 - 157 - 1 -
        // echo $kode." - ".$kode3." - ".$kode2." - ".$kode4." - ";
        // exit;
        $user = $this->getuser();  // login pertama
        $idcusto = Dtadditional::where('type', '=', 'COMPANY')
        ->where('info', '=', $kode3)
        ->where('desc', '=', $kode)
        ->select('info6')
        ->first();
        if(!$idcusto){
            $idcustokd = 'CKK'; 
        } else {
            $idcustokd = $idcusto->info6;
        }
        // $id = 0;
        $idx = $kode;
        $idy = $kode3;
        $id = $kode2;
        $tbluser = Tbluser::where('uid', '=', $id)->first();
        if (!$tbluser){
            $tbluser = new Tbluser;
            $tbluser->user_id='0';
        }
        
        $iduser = $tbluser->user_id; 
        $usr_profile = Usrprofile::where('user_id', '=', $tbluser->user_id)->first();
        $data_add = Usradditional::where('user_id', '=', $tbluser->user_id)->get();

        $data_add_asset = $this->addasset($tbluser->user_id,'ASSET_PRIBADI');
        $data_add_modalsendiri = $this->addasset2($tbluser->user_id,'MODAL');
        $pilcompany = $kode;
        $tabelarea_subagen = $this->tabelarea_subagen();
        // $datamedsos = $this->dataamedsos('MEDSOS', $data_add);
        $photo = Tbluserphotoadd::where('user_id', '=', $tbluser->user_id)->orderBy('seq', 'asc')
        ->select('id','seq')
        ->get();


        return view('menudetail',[
            'idcusto' => $idcustokd,
            'idedit' => $iduser,
            'user' => $user,
            'tbluser' => $tbluser,
            'pilcompany' => $pilcompany,
            'id' => $id,
            'idx' => $idx,
            'idy' => $idy,
            'tblagama' => $this->tblagama(),
            'tbldarah' => $this->tbldarah(),
            'tblmedsos' => $this->tblmedsos(),
            'tblsex' => $this->tblsex(),
            'tblstatus' => $this->tblstatus(),
            'tblsekolah' => $this->tblsekolah(),
            'tabelarea_subagen' => $tabelarea_subagen,
            'data_additional' => $data_add,
            'data_profile' => $usr_profile,
            'tblpakan' => $this->tblpakan(),
            'tabelstatus_usaha' => $this->tabelstatus_usaha(),
            'tblhubkelga' => $this->tblhubkelga(),
            'tblagenhubunganstatus' => $this->tblagenhubunganstatus(),
            'tabelarea_usaha' => $this->tabelarea_usaha(),
            // 'tblassetpribadi' => $this->tblassetpribadi(),
            'tblbank' => $this->tblbank(),
            'tbljudulbank' => $this->tbljudulbank(),
            'tbljaminanpribadi' => $this->tbljaminanpribadi('JAMINAN_PRIBADI'),
            'tblassetpribadi' => $this->tbljaminanpribadi('ASSET_PRIBADI'),
            'tabelbentukusaha' => $this->tabelbentukusaha(),
            'tabelbadanhukum' => $this->tabelbadanhukum(),
            'data_add_asset' => $data_add_asset,
            'data_add_modalsendiri' => $data_add_modalsendiri,
            'data_add_modalbank' => $this->addasset3($tbluser->user_id,'MODAL_BANK'),
            'data_add_jaminanpribadi' => $this->addasset4($tbluser->user_id,'JAMINAN_PRIBADI'),
            'edit_noedit' => 0,
            'pos_page' => $kode4,
            'data_photo' => $photo
            

        ]);


    }

    

    // public function edit($kode, $kode3, $kode2, $kode4){
    // {
    //     $user = $this->getuser();  // login pertama

    //     $id = $kode2;
    //     // $id = 0;
    //     $idx = $kode;
    //     $idy = $kode3;
    //     $tbluser = Tbluser::where('uid', '=', $id)->first();
    //     if (!$tbluser){
    //         $tbluser = new Tbluser;
    //         $tbluser->user_id='';
    //     }
        
    //     $iduser = $tbluser->user_id; 
        
       
    //     $usr_profile = Usrprofile::where('user_id', '=', $tbluser->user_id)->first();
    //     $data_add = Usradditional::where('user_id', '=', $tbluser->user_id)->get();

    //     $data_add_asset = $this->addasset($tbluser->user_id,'ASSET_PRIBADI');
    //     $data_add_modalsendiri = $this->addasset2($tbluser->user_id,'MODAL');
    //     $pilcompany = $kode;
    //     $tabelarea_subagen = $this->tabelarea_subagen();
        

    //     // $datamedsos = $this->dataamedsos('MEDSOS', $data_add);
    //     return view('menudetail',[
    //         'idedit' => $iduser,
    //         'user' => $user,
    //         'tbluser' => $tbluser,
    //         'pilcompany' => $pilcompany,
    //         'id' => $id,
    //         'idx' => $idx,
    //         'idy' => $idy,
    //         'tblagama' => $this->tblagama(),
    //         'tbldarah' => $this->tbldarah(),
    //         'tblmedsos' => $this->tblmedsos(),
    //         'tblsex' => $this->tblsex(),
    //         'tblstatus' => $this->tblstatus(),
    //         'tblsekolah' => $this->tblsekolah(),
    //         'tabelarea_subagen' => $tabelarea_subagen,
    //         'data_additional' => $data_add,
    //         'data_profile' => $usr_profile,
    //         'tblpakan' => $this->tblpakan(),
    //         'tabelstatus_usaha' => $this->tabelstatus_usaha(),
    //         'tblhubkelga' => $this->tblhubkelga(),
    //         'tblagenhubunganstatus' => $this->tblagenhubunganstatus(),
    //         'tabelarea_usaha' => $this->tabelarea_usaha(),
    //         // 'tblassetpribadi' => $this->tblassetpribadi(),
    //         'tblbank' => $this->tblbank(),
    //         'tbljudulbank' => $this->tbljudulbank(),
    //         'tbljaminanpribadi' => $this->tbljaminanpribadi('JAMINAN_PRIBADI'),
    //         'tblassetpribadi' => $this->tbljaminanpribadi('ASSET_PRIBADI'),
    //         'tabelbentukusaha' => $this->tabelbentukusaha(),
    //         'tabelbadanhukum' => $this->tabelbadanhukum(),
    //         'data_add_asset' => $data_add_asset,
    //         'data_add_modalsendiri' => $data_add_modalsendiri,
    //         'data_add_modalbank' => $this->addasset3($tbluser->user_id,'MODAL_BANK'),
    //         'data_add_jaminanpribadi' => $this->addasset4($tbluser->user_id,'JAMINAN_PRIBADI'),
    //         'edit_noedit' => 1,
    //         'pos_page' => $kode4
    //     ]);


    // }
    // }

public function detailsave($id, Request $request){

    if ($request->para3 == "0"){
        $this->validate($request,[
            'inputuserid' => ['required', 'string', 'max:10'],
            'inputfullname' => ['required', 'string', 'max:35'],
            'inputnamaalias' => ['required', 'string', 'max:35'],
            'inputbirthdate' => ['required', 'string', 'max:10'],
            'inputbirthplace' => ['required', 'string', 'max:35'],
            // 'inputnoktp' => ['required', 'string', 'max:16'],
            'inputagama' => ['required'],
            // 'inputgoldarah' => ['required'],
            'inputalmtktp' => ['required', 'string', 'max:100'],
            'inputkdposktp' => ['required', 'string', 'max:35'],
            'inputuserid' => ['required', 'string', 'max:35'],
            'inputuserid' => ['unique:tbluser,user_id']
        ]);
    }

    $dtadditional = Dtadditional::where('type','=','COMPANY')
    ->where('info','=',$request->para2)->first();
    $para1 = $dtadditional->info3;
    $para2 = $dtadditional->info;

    

    
    // print_r($request->filenames2);
    DB::beginTransaction();
    try {
        if($id==0){
            $tbluser = Tbluser::where('user_id', '=', $request->inputuserid)->first();
            if(!$tbluser){
                $tbluser = new Tbluser;
            }    
            $tbluser->user_id = $request->inputuserid;
            $tbluser->company = $dtadditional->info;
            $tbluser->branch  = $dtadditional->desc;
            $tbluser->password  = "123";
        } else {
            $tbluser = Tbluser::where('uid','=',$request->inputuid)->first();
        }
        $tbluser->fullname = $request->inputfullname;
        $tbluser->birthdate = $request->inputbirthdate;
        $tbluser->birthplace = $request->inputbirthplace;
        $tbluser->save();
        
        // Usradditional::where('user_id', '=', $tbluser->user_id)
        // ->update(['value7' => 'X']);

        if ($request->hasFile('files')) {
            $image_file = $request->files;
            $gambar = $request->file('files')->getClientOriginalName();
            $image = Image::make($request->file('files')->getRealPath());
            Response::make($image->encode('jpeg'));
            $form_data = array(
                'user_id' => $tbluser->user_id,
                'zimage' => $image
            );
            // print_r($form_data);
            // exit;
            $tbluserphoto = Tbluserphoto::where('user_id', '=', $tbluser->user_id)->first();
            // dd($tbluserphoto);
            if (!$tbluserphoto){
                Tbluserphoto::create($form_data);
            } else {
                DB::table('tbl_userphoto')->where('user_id', '=', $tbluser->user_id)->update($form_data);
            }
        }
        

        

        // $inputuid           = $tbluser->uid;
        // $inputuser_id       = $tbluser->user_id; 
        // $inputpassword      = $tbluser->password; 
        // $inputfullname      = $tbluser->fullname; 
        // $inputbirthplace    = $tbluser->birthplace; 
        // $inputbirthdate     = $tbluser->birthdate; 
        // $inputuserdesc      = $tbluser->userdesc; 
        // $inputusergroup     = $tbluser->usergroup; 
        // $inputcreateddate   = $tbluser->createddate; 
        // $inputupdateddate   = $tbluser->updateddate; 
        // $inputcreatedby     = $tbluser->createdby; 
        // $inputupdatedby     = $tbluser->updatedby; 
        // $inputlastsync      = $tbluser->lastsync; 
        // $inputlocked        = $tbluser->locked; 
        // $inputlockcount     = $tbluser->lockcount; 
        // $inputpasswd_date   = $tbluser->passwd_date; 
        // $inputemail         = $tbluser->email; 
        // $inputemail2        = $tbluser->email2; 
        // $inputtracehost     = $tbluser->tracehost; 
        // $inputcompany       = $tbluser->company; 
        // $inputsess_forgot   = $tbluser->sess_forgot; 
        // $inputforgot_stat   = $tbluser->forgot_stat; 
        // $inputmacaddress    = $tbluser->macaddress; 
        // $inputnik           = $tbluser->nik; 
        // $inputbranch        = $tbluser->branch; 
        // $inputvalidfrom     = $tbluser->validfrom; 
        // $inputvalidto       = $tbluser->validto; 
        // $inputstatnew       = $tbluser->statnew; 
        // $inputflag          = $tbluser->flag; 
        // $inputimei          = $tbluser->imei; 
        // $inputoffice        = $tbluser->office; 
        // $inputphone1        = $tbluser->phone1; 
        // $inputphone2        = $tbluser->phone2; 
        // $inputsvisorid      = $tbluser->svisorid; 
        // $inputsvisorname    = $tbluser->svisorname; 
        // $inputcreatorid     = $tbluser->creatorid; 
        // $inputlastchangeby  = $tbluser->lastchangeby; 
        // $inputldap          = $tbluser->ldap; 
        // $inputinactive      = $tbluser->inactive;
         
        
        Usradditional::where('user_id', '=', $tbluser->user_id)
        ->update(['value7' => 'X']);
        // ganti di delete


        // Usradditional::where('user_id', '=', $tbluser->user_id)
        // ->where('type','=','DATA_KELUARGA')->delete(); 
        // db::commit();       

        $namapsgn      = null; 
        $tmptlhrpsgn   = null; 
        $tgllhrpsgn    = null; 
        
        $j=0;
        $k=-1;
        $type="DATA_KELUARGA";
        if ($request->inputkeluargastatus){
            foreach($request->inputkeluargastatus as $key => $values) {
                $k++;
                
                if ($values != ""){
                    $j++;
                    $tbl = Dtadditional::where('type', '=', 'HUB_KELUARGA')
                        ->where('seq', '=', $values)
                        ->first();
                    $data_klg = Usradditional::where('user_id', '=', $tbluser->user_id)
                        ->where('type', '=', $type)
                        ->where('seq', '=', $j)->first();
                    
                    if (!$data_klg){
                        $data_klg = new Usradditional;
                    }
                    $data_klg->user_id = $tbluser->user_id;
                    $data_klg->type    = $type;
                    $data_klg->seq     = $values;
                    $data_klg->sseq    = null;
                    $data_klg->desc    = null;
                    $data_klg->value1  = $request->inputkeluarganama[$k];
                    $data_klg->value2  = $request->inputkeluargatempat[$k];
                    $data_klg->value3  = $request->inputkeluargatanggallahir[$k];
                    $data_klg->value4  = $request->inputkeluargasex[$k];
                    $data_klg->value5  = $tbl->info;
                    $data_klg->value6  = $request->inputkeluargapendidikan[$k];
                    $data_klg->value7  = '';
                    $data_klg->save();
                    
                    if ($tbl->info == 'P'){
                        $namapsgn      = $data_klg->value1; 
                        $tmptlhrpsgn   = $data_klg->value2; 
                        $tgllhrpsgn    = $data_klg->value3; 
                    }
                }
            
            }
        }
        
        $usrprofile = Usrprofile::where('user_id', '=', $tbluser->user_id)->first();
        if (!$usrprofile){
            $usrprofile = new Usrprofile;
        }
        $usrprofile->user_id       = $request->inputuserid; 
        $usrprofile->kodesap       = $request->inputkodesap; 
        $usrprofile->noktp         = $request->inputnoktp; 
        $usrprofile->almtktp       = $request->inputalmtktp; 
        $usrprofile->kelktp        = $request->inputkelktp; 
        $usrprofile->kecktp        = $request->inputkecktp; 
        $usrprofile->kotaktp       = $request->inputkotaktp; 
        $usrprofile->propktp       = $request->inputpropktp; 
        $usrprofile->kdposktp      = $request->inputkdposktp; 
        $usrprofile->almtrmh       = $request->inputalmtrmh; 
        $usrprofile->kelrmh        = $request->inputkelrmh; 
        $usrprofile->kecrmh        = $request->inputkecrmh; 
        $usrprofile->kotarmh       = $request->inputkotarmh; 
        $usrprofile->proprmh       = $request->inputproprmh; 
        $usrprofile->kdposrmh      = $request->inputkdposrmh; 
        $usrprofile->tlppri        = $request->inputtlppri; 
        $usrprofile->faxpri        = $request->inputfaxpri; 
        $usrprofile->hppri         = $request->inputhppri; 
        $usrprofile->emailpri      = $request->inputemailpri; 
        $usrprofile->hobby         = $request->inputhobby; 
        $usrprofile->namapsgn      = $namapsgn; 
        $usrprofile->tmptlhrpsgn   = $tmptlhrpsgn; 
        $usrprofile->tgllhrpsgn    = $tgllhrpsgn; 
        $usrprofile->btkush        = $request->inputbtkush; 
        $usrprofile->tipeush       = $request->inputtipeush; 
        $usrprofile->npwp          = $request->inputnpwp; 
        $usrprofile->status        = $request->inputstatus; 
        $usrprofile->almtush       = $request->inputalmtush; 
        $usrprofile->kelush        = $request->inputkelush; 
        $usrprofile->kecush        = $request->inputkecush; 
        $usrprofile->kotaush       = $request->inputkotaush; 
        $usrprofile->propush       = $request->inputpropush; 
        $usrprofile->kdposush      = $request->inputkdposush; 
        $usrprofile->tlpush        = $request->inputtlpush; 
        $usrprofile->faxush        = $request->inputfaxush; 
        $usrprofile->hpush         = $request->inputhpush; 

        $usrprofile->kontakush     = $request->inputkontakush; 
        $usrprofile->hubunganush   = $request->inputhubunganush; 

        $usrprofile->emailush      = $request->inputemailush; 
        $usrprofile->lmusaha       = $request->inputlmusaha; 
        $usrprofile->karakteristik = $request->inputkarakteristik; 

        $usrprofile->trackrecord = $request->inputtrackrecord; 

        $usrprofile->namausaha     = $request->inputnamausaha; 
        $usrprofile->namaalias     = $request->inputnamaalias; 
        $usrprofile->agama         = $request->inputagama; 
        $usrprofile->goldarah      = $request->inputgoldarah; 
        $usrprofile->headgrp       = $request->inputheadgrp;
        $usrprofile->save();

        

        
        $j=0;
        $k=-1;
        $type="MEDSOS";
        if ($request->inputmedsospri){
            foreach($request->inputmedsospri as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data_medsospri = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $values)
                    ->where('desc', '=', $request->inputmedsosakunpri[$k])
                    ->first();
                    
                    if (!$data_medsospri){
                        $data_medsospri = new Usradditional;
                    }
                    $data_medsospri->user_id = $tbluser->user_id;
                    $data_medsospri->type    = $type;
                    $data_medsospri->seq     = $values;
                    $data_medsospri->sseq    = null;
                    $data_medsospri->desc    = $request->inputmedsosakunpri[$k];
                    $data_medsospri->value1  = null;
                    $data_medsospri->value2  = null;
                    $data_medsospri->value3  = null;
                    $data_medsospri->value4  = null;
                    $data_medsospri->value5  = null;
                    $data_medsospri->value6  = null;
                    $data_medsospri->value7  = null;
                    $data_medsospri->save();
                    
                    // dd($data);
                }
            }
        }

        $k=-1;
        $j=0;
        $type="MEDSOSUSH";
        if ($request->inputmedsosush){
            foreach($request->inputmedsosush as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data_medsosush = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $values)
                    ->where('desc', '=', $request->inputmedsosakunush[$k])
                    ->first();
                    if (!$data_medsosush){
                        $data_medsosush = new Usradditional;
                    }
                    $data_medsosush->user_id = $tbluser->user_id;
                    $data_medsosush->type    = $type;
                    $data_medsosush->seq     = $values;
                    $data_medsosush->sseq    = null;
                    $data_medsosush->desc    = $request->inputmedsosakunush[$k];
                    $data_medsosush->value1  = null;
                    $data_medsosush->value2  = null;
                    $data_medsosush->value3  = null;
                    $data_medsosush->value4  = null;
                    $data_medsosush->value5  = null;
                    $data_medsosush->value6  = null;
                    $data_medsosush->value7  = null;
                    $data_medsosush->save();
                }
            }
        }

        
      
        $k=-1;
        $j=0;
        // print_r($request->inputstatusush)."<br>";
        // exit;
        $type="STATUSUSAHA";
        if ($request->inputstatusush){
            foreach($request->inputstatusush as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data_statusush = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)
                    ->first();
                    if (!$data_statusush){
                        $data_statusush = new Usradditional;
                    }
                    $data_statusush->user_id = $tbluser->user_id;
                    $data_statusush->type    = $type;
                    $data_statusush->sseq    = null;
                    $data_statusush->seq     = $j;
                    $data_statusush->desc    = $values;
                    $data_statusush->value1  = null;
                    $data_statusush->value2  = null;
                    $data_statusush->value3  = null;
                    $data_statusush->value4  = null;
                    $data_statusush->value5  = null;
                    $data_statusush->value6  = null;
                    $data_statusush->value7  = null;
                    $data_statusush->save();
                }
            }
        }

        
     
        
        
        $j=0;
        $k=-1;
        $type="AGEN_HUB";
        if ($request->inputAgenHubStatus){
            foreach($request->inputAgenHubStatus as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data_agenHubStatus = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data_agenHubStatus){
                        $data_agenHubStatus = new Usradditional;
                    }
                    $data_agenHubStatus->user_id = $tbluser->user_id;
                    $data_agenHubStatus->type    = $type;
                    $data_agenHubStatus->seq     = $j;
                    $data_agenHubStatus->sseq    = null;
                    $data_agenHubStatus->desc    = null;
                    $data_agenHubStatus->value1  = $request->inputagenhubnama[$k];
                    $data_agenHubStatus->value2  = $request->inputagenaubkode[$k];
                    $data_agenHubStatus->value3  = null;
                    $data_agenHubStatus->value4  = $values;
                    $data_agenHubStatus->value5  = null;
                    $data_agenHubStatus->value6  = null;
                    $data_agenHubStatus->value7  = null;
                    $data_agenHubStatus->save();
                }
            }
        }
        
        
        $j=0;
        $k=-1;
        // $type="AGEN_HUB";

        // print_r($request->inputNamaarea);
        if ($request->inputNamaarea){
            foreach($request->inputNamaarea as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $seq_Namaarea = Dtadditional::
                    whereIn('type', ['AREA_PETAMBAK','AREA_SUBAGEN','AREA_LAIN'])
                    ->where('desc', '=', $values)->first();
                    $data_Namaarea = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $values)
                    ->where('seq', '=', $seq_Namaarea->seq)
                    ->where('desc', '=', $request->inputQtySubAgen[$k])
                    ->where('value1', '=', $request->inputNamaSubAgen[$k])->first();
                    if (!$data_Namaarea){
                        $data_Namaarea = new Usradditional;
                    }
                    $data_Namaarea->user_id = $tbluser->user_id;
                    $data_Namaarea->type    = $values;
                    $data_Namaarea->seq     = $seq_Namaarea->seq;
                    $data_Namaarea->sseq    = null;
                    $data_Namaarea->desc    = $request->inputQtySubAgen[$k];
                    $data_Namaarea->value1  = $request->inputNamaSubAgen[$k];
                    $data_Namaarea->value2  = $request->inputLokasiSubAgen[$k];
                    $data_Namaarea->value3  = $request->inputInfoSubAgen[$k];
                    $data_Namaarea->value4  = null;
                    $data_Namaarea->value5  = null;
                    $data_Namaarea->value6  = null;
                    $data_Namaarea->value7  = null;
                    $data_Namaarea->save();
                }
            }
        }
 
        

        $j=0;
        $k=-1;
        $type="PAKAN_JUAL";
        if ($request->inputPakanJualC){
            foreach($request->inputPakanJualC as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data_pakan = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data_pakan){
                        $data_pakan = new Usradditional;
                    }
                    $data_pakan->user_id = $tbluser->user_id;
                    $data_pakan->type    = $type;
                    $data_pakan->seq     = $j;
                    $data_pakan->sseq    = null;
                    $data_pakan->desc    = $request->inputPakanJual[$k];
                    $data_pakan->value1  = $request->inputPakanJualV[$k];
                    $data_pakan->value2  = $values;
                    $data_pakan->value3  = $request->inputPakanbranch[$k];
                    $data_pakan->value4  = null;
                    $data_pakan->value5  = null;
                    $data_pakan->value6  = null;
                    $data_pakan->value7  = null;
                    $data_pakan->save();
                }
            }
        }

       

        
        

        $j=0;
        $k=-1;
        $type="BISNIS_LAIN";
        if ($request->inputbisnislain){
            foreach($request->inputbisnislain as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data){
                        $data = new Usradditional;
                    }
                    $data->user_id = $tbluser->user_id;
                    $data->type = $type;
                    $data->seq = $j;
                    $data->sseq = null;
                    $data->desc = $values;
                    $data->value1 = $request->inputbisnislainrp[$k];
                    $data->value2 = null;
                    $data->value3 = null;
                    $data->value4 = null;
                    $data->value5 = null;
                    $data->value6 = null;
                    $data->value7 = null;
                    $data->save();
                }
            }
        }

        

        $j=0;
        $k=-1;
        $type="ASSET_PRIBADI";
        if ($request->inputasetpribadi){
            foreach($request->inputasetpribadi as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $seq_Namaarea = Dtadditional::where('type', '=', $type)
                    ->where('desc', '=', $values)->first();
                    $data_asetpribadi = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data_asetpribadi){
                        $data_asetpribadi = new Usradditional;
                    }
                    $data_asetpribadi->user_id = $tbluser->user_id;
                    $data_asetpribadi->type    = $type;
                    $data_asetpribadi->seq     = $j;
                    $data_asetpribadi->sseq    = $seq_Namaarea->seq;
                    $data_asetpribadi->desc    = $values;
                    $data_asetpribadi->value1  = $request->inputAssetValue[$k];
                    $data_asetpribadi->value2  = $request->inputAssetAlamat[$k];
                    $data_asetpribadi->value3  = $request->inputAssetLain[$k];
                    $data_asetpribadi->value4  = null;
                    $data_asetpribadi->value5  = null;
                    $data_asetpribadi->value6  = null;
                    $data_asetpribadi->value7  = null;
                    $data_asetpribadi->save();
                }
            }
        }

        
        
        

        $k=-1;
        $j=0;
        $type="MODAL";
        if ($request->inputmodalid){
            foreach($request->inputmodalid as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data){
                        $data = new Usradditional;
                    }
                    $data->user_id = $tbluser->user_id;
                    $data->type = $type;
                    $data->seq = $values;
                    $data->sseq = null;
                    $data->desc = $request->inputmodal[$k];
                    $data->value1 = null;
                    $data->value2 = null;
                    $data->value3 = null;
                    $data->value4 = null;
                    $data->value5 = null;
                    $data->value6 = null;
                    $data->value7 = null;
                    $data->save();
                }
            }
        }

        
        
        $j=0;
        $k=-1;
        $type="MODAL_BANK";
        if ($request->inputmodalbankpersent){
            foreach($request->inputmodalbankpersent as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $data = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data){
                        $data = new Usradditional;
                    }
                    $data->user_id = $tbluser->user_id;
                    $data->type = $type;
                    $data->seq = $j;
                    $data->sseq = null;
                    $data->desc = null;
                    $data->value1 = $values;
                    $data->value2 = $request->inputmodalbanknamaid[$k];
                    $data->value3 = null;
                    $data->value4 = null;
                    $data->value5 = null;
                    $data->value6 = null;
                    $data->value7 = null;
                    $data->save();
                }
            }
        }

        // db::commit();
        // print_r($request->inputJaminanid)."<br>";
        // print_r($request->inputJaminanValue)."<br>";
        // print_r($request->inputJaminanAlamat)."<br>";
        // print_r($request->inputJaminanLain)."<br>";
        // exit;
        
        $j=0;
        $k=-1;
        $type="JAMINAN_PRIBADI";
        if ($request->inputJaminanid){
            foreach($request->inputJaminanid as $key => $values) {
                $k++;
                if ($values != ""){
                    $j++;
                    $seq_Namaarea = Dtadditional::where('type', '=', $type)
                    ->where('seq', '=', $values)->first();
                    $data_jaminanpribadi = Usradditional::where('user_id', '=', $tbluser->user_id)
                    ->where('type', '=', $type)
                    ->where('seq', '=', $j)->first();
                    if (!$data_jaminanpribadi){
                        $data_jaminanpribadi = new Usradditional;
                    }
                    $data_jaminanpribadi->user_id = $tbluser->user_id;
                    $data_jaminanpribadi->type    = $type;
                    $data_jaminanpribadi->seq     = $j;
                    $data_jaminanpribadi->sseq    = $values;
                    $data_jaminanpribadi->desc    = $seq_Namaarea->desc;
                    $data_jaminanpribadi->value1  = $request->inputJaminanValue[$k];
                    $data_jaminanpribadi->value2  = $request->inputJaminanAlamat[$k];
                    $data_jaminanpribadi->value3  = $request->inputJaminanLain[$k];
                    $data_jaminanpribadi->value4  = null;
                    $data_jaminanpribadi->value5  = null;
                    $data_jaminanpribadi->value6  = null;
                    $data_jaminanpribadi->value7  = null;
                    $data_jaminanpribadi->save();
                }
            }
        }
       
        DB::table('usr_additional')->where('user_id', '=', $tbluser->user_id)
        ->where('value7', '=', 'X')->delete();

        Tbluserphotoadd::where('user_id', '=', $tbluser->user_id)
        ->update(['flag' => 'X']);
        
        if ($request->idgambar){
            $j=0;
            $k=-1;
            foreach($request->idgambar as $key => $values) {
                $k++;
                $var = 'filenames'.$values;
                if ($request->hasfile($var)){
                    $image_file = $request->files;
                    $gambar = $request->file($var)->getClientOriginalName();
                    $image = Image::make($request->file($var)->getRealPath())->fit(340, 340);
                   
                    $hsl = Response::make($image->encode('jpeg'));
                    $form_data = array(
                        'user_id' => $tbluser->user_id,
                        'zimage' => $image,
                        'seq'    => $values,
                        'flag'    => null
                    );
             
                    Tbluserphotoadd::create($form_data);
                   
                } else {
                    $form_data = array(
                        'user_id' => $tbluser->user_id,
                        'flag'    => null
                    );
                    
                    DB::table('tbl_userphoto_add')
                    ->where('user_id', '=', $tbluser->user_id)
                    ->where('seq', '=', $values)
                    ->update($form_data);
    
                }
            }
        }        
        DB::table('tbl_userphoto_add')->where('user_id', '=', $tbluser->user_id)
        ->where('flag', '=', 'X')->delete();
        
        // $datasort = Tbluserphotoadd::where('user_id', '=', $tbluser->user_id)
        // ->orderby('seq', 'asc')
        // ->get();
        // $i=0;
        // foreach ($datasort as $key => $value) {
        //     $i++;
        //     if ($value <> $i){
        //         $form_data = array(
        //             'seq' => $i
        //         );
        //         DB::table('tbl_userphoto_add')
        //             ->where('id', '=', $value->$id)
        //             ->update($form_data);
        //     } 
        // }







        DB::commit();
    } catch (\Exception $e) {
        DB::rollback();
        return response()->json(['code'=>500, 'message' => $e->getMessage()]);
       // something went wrong
    }
    $para1=$request->input('para1');
    $para2=$request->input('para2');
    return redirect('/subcompany1/'.$para1.'/'.$para2)->with('success', 'Applicant Removed');
    

    

    /*
        if ($imgphoto!=""){
            $sql = "
                select *
                from tbl_userphoto
                where user_id = '".$request->inputuser_id."'
                and link = '".$request->imglink."'
            "; 

            $sql = " 
                delete from  
                tbl_userphoto
                where user_id = '".$request->inputuser_id."'  
                    and link = '".$request->imglink."'
            ";

            $imgname  = uniqid().date( "ymdhis", strtotime( "now" ) );
            $img = $request->imgphoto;
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            $file = upload_dir . $imgname . '.png';
            $success = file_put_contents($file, $data);
        
            if ($success){
                $sql = "
                    replace into  
                    tbl_userphoto values (
                    '".$request->inputuser_id."','".$file."' )
                "; 
                //         $newdb = new condb( "fpdappscpb", $sql );
                // echo $file.'|';    
            }
        }



        $sql = " 
            delete from usr_additional
            where user_id = '".$request->inputuser_id ."'
        ";

        $j= 0; 
        // X
        foreach($request->inputareapenjualan as $key => $values) {
            $j++;
            $sql = " insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                        values ('".$request->inputuser_id ."',
                                'area_penjualan',
                                '".$j."',
                                '".$values."')";
                        
            $newdb = new condb( "fpdappscpb", $sql );
        }

        $j= 0; 
        foreach($request->inputtelpons as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                        values ('".$request->inputuser_id ."',
                                'telpon',
                                '".$j."',
                                '".$values."')";
            // $newdb = new condb( "fpdappscpb", $sql ); 
           }             
        }  
        $j= 0; 
        foreach($request->inputhobbys as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$request->inputuser_id ."',
                        'hobby',
                        '".$j."',
                        '".$values."')
                ";
                      
            // $newdb = new condb( "fpdappscpb", $sql );              
           }
        }

        $j= 0; 
        foreach($request->inputemails as $key => $values) {
            if ($values != ""){               
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$request->inputuser_id ."',
                        'email',
                        '".$j."',
                        '".$values."'
                    )
                ";
                        
            // $newdb = new condb( "fpdappscpb", $sql );              
            }
        }  

        $j= 0; 
        foreach($request->inputpakanjual as $keys => $values) {
            $j++;
            $k =0;
            $i=0;
            foreach($request->inputpakanjualv as $key => $value) {
                $k++;
                $l=0;
                foreach($request->inputpakanjualc as $keyc => $valuec) {
                    $l++;                 
                    if ($k == $j && $j==$l && ($valuec != "" or $values != "" or $value!="") ){
                        $i++;
                        $sql = " 
                            insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`)
                            values (
                                '".$request->inputuser_id ."',
                                'pakan_jual',
                                '".$j."',
                                '".$values."',
                                '".$value."',
                                '".$valuec."'
                            )
                        ";
                        // $newdb = new condb( "fpdappscpb", $sql );   
                    }
                }             
            }                             
        }  

        $j= 0; 
        foreach($request->inputbisnislain as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`)
                    values (
                        '".$request->inputuser_id ."',
                        'bisnis_lain',
                        '".$j."',
                        '".$values."',
                        '".$request->inputbisnislainomset[$k]."'
                    )
                ";
                // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        } 

        $j= 0; 
        foreach($request->inputmodalbank as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`)
                    values (
                        '".$request->inputuser_id ."',
                        'modal_bank',
                        '".$j."',
                        '".$values."',
                        '".$request->inputbankname[$k]."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        }  
        
        $j= 0; 
        foreach($request->inputagenhubnama as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`,`value4`)
                    values (
                        '".$request->inputuser_id ."',
                        'agen_hub',
                        '".$j."',
                        '".$values."',
                        '".$request->inputagenhubkode[$k]."',
                        '".$request->inputagenhubstatus[$k]."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );   
            } 
        }  
            
                       
        $j= 0; 
        foreach($request->inputkodesaps as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$request->inputuser_id ."',
                        'kode_sap',
                        '".$j."',
                        '".$values."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        }

        $j= 0; 
        $i = 0;
        foreach($request->inputkeluarganama as $key => $values) {
            $j++;
            if ($values != ""){
                $i++; 
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`,`value3`,`value4`,`value5`,`value6`)
                    values (
                        '".$request->inputuser_id ."',
                        'data_keluarga',
                        '".$j."',
                        '".$values."',
                        '".$request->inputkeluargatempat[$i-1]."',
                        '".$request->inputkeluargatanggal[$i-1]."',
                        '".$request->inputkeluargakelamin[$i-1]."',
                        '".$request->inputkeluargastatus[$i-1]."',
                        '".$request->inputkeluargapendidikan[$i-1]."'
                    )
                ";
                        
            // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        } 

        $j= 0; 
        foreach($request->inputmedsos as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$request->inputuser_id ."',
                        'medsos',
                        '".$j."',
                        '".$values."'
                    )
                ";
                        
            // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        } 
            
        $j= 0; 
        $i= 0;
        foreach($request->inputjaminanpribadi as $keys => $values) {
            $j++;
            $k =0;
            //echo $values;
            foreach($request->inputjaminanvalue as $key => $value) {
            $k++;
            //echo $value;                  
                if ($k == $j and $value != "" and $values != ""){               
                    $h=0;
                    foreach($request->inputjaminansseq as $keya => $valuea) {                
                        $h++;
                        //echo $valuea;
                        if ($k == $h){
                        
                        $i++;
                        $sql = " 
                            insert into usr_additional (`user_id`,`type`,`seq`,`sseq`,`desc`,`value1`,`value2`,`value3`)
                            values (
                                '".$request->inputuser_id ."',
                                'jaminan_pribadi',
                                '".$i."',
                                '".$valuea."',
                                '".$values."',
                                '".$value."',
                                '".$request->inputjaminanalamat[$h-1]."',
                                '".$request->inputjaminanlain[$h-1]."'
                            )
                        ";
                        //echo $sql;         
                        // $newdb = new condb( "fpdappscpb", $sql ); 
                        }
                    }
                }             
            }
        } 
        
        $j= 0; 
        foreach($request->inputstatususahas as $key => $values) {
            if ($values != ""){
                            $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$request->inputuser_id ."',
                        'statususaha',
                        '".$j."',
                        '".$values."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );
            }              
        } 
        
        $j= 0; 
        $i= 0;
        foreach($request->inputassetpribadi as $keys => $values) {
            $j++;
            $k =0;
            //echo $values;
            foreach($request->inputassetvalue as $key => $value) {
                $k++;
                //echo $value;                  
                if ($k == $j and $value != "" and $values != ""){               
                    $h=0;
                    foreach($request->inputassetsseq as $keya => $valuea) {                
                        $h++;
                        //echo $valuea;
                        if ($k == $h){
                        
                            $i++;
                            $sql = " 
                                insert into usr_additional (`user_id`,`type`,`seq`,`sseq`,`desc`,`value1`,`value2`,`value3`)
                                values (
                                    '".$request->inputuser_id ."',
                                    'asset_pribadi',
                                    '".$i."',
                                    '".$valuea."',
                                    '".$values."',
                                    '".$value."',
                                    '".$request->inputassetalamat[$h-1]."',
                                    '".$request->inputassetlain[$h-1]."'
                                )
                            ";
                            //echo $sql;         
                            $newdb = new condb( "fpdappscpb", $sql ); 
                        }
                    }
                }             
            }
        }

        $j= 0; 
        foreach($request->inputmodal as $key => $values) {
            $j++;
            $sql = " 
                insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                values (
                    '".$request->inputuser_id ."',
                    'modal',
                    '".$j."',
                    '".$values."'
                )
            ";
                    
            // $newdb = new condb( "fpdappscpb", $sql );              
        } 

        $j= 0; 
        foreach($request->inputnamasubagen as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$request->inputuser_id ."',
                        'area_subagen',
                        '".$i."',
                        '".$request->inputqtysubagen[$k]."',
                        '".$values."',
                        '".$request->inputlokasisubagen[$k]."',
                        '".$request->inputinfosubagen[$k]."'
                    )
                ";
                //echo $sql;          
                // $newdb = new condb( "fpdappscpb", $sql );  
            }            
        }


        $j= 0; 
        foreach($request->inputnamapetambak as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$request->inputuser_id ."',
                        'area_petambak',
                        '".$i."',
                        '".$request->inputqtypetambak[$k]."',
                        '".$values."',
                        '".$request->inputlokasipetambak[$k]."',
                        '".$request->inputinfopetambak[$k]."'
                    )
                ";
                //echo $sql;          
                $newdb = new condb( "fpdappscpb", $sql );   
            }           
        }

        $j= 0; 
        foreach($request->inputnamalain as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$request->inputuser_id ."',
                        'area_lain',
                        '".$i."',
                        '".$request->inputqtylain[$k]."',
                        '".$values."',
                        '".$request->inputlokasilain[$k]."',
                        '".$request->inputinfolain[$k]."'
                    )
                ";
                //echo $sql;          
                // $newdb = new condb( "fpdappscpb", $sql );     
            }         
        }

        $j= 0; 
        foreach($request->inputterminpenjualan as $key => $values) {
            $j++;
            $sql = " 
                insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                values (
                    '".$request->inputuser_id ."',
                    'term_penjualan',
                    '".$j."',
                    '".$values."'
                )
            ";
            //echo $sql;          
            // $newdb = new condb( "fpdappscpb", $sql );              
        }
        */
    }

    

    public function detaildelete($id)
    {
        return view('detaildelete');
    }

    public function setting()
    {
        $user = $this->getuser();
        
        return view('menusetting', ['user' => $user]);
    }

    public function fileupload(){
        $sql = "
            select '1' urut, 'file name'   filename, 'status'   status, '2020-01-01 08:00:00' uploadtime, '2020-01-01 08:02:00' processtime, 100 totalrow, 'supram' user union
            select '2' urut, 'file name-2' filename, 'status-2' status, '2020-01-01 08:00:00' uploadtime, '2020-01-01 08:02:00' processtime, 100 totalrow, 'supram' user 
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function listuserpassword(){
        $grp = Tbluser::get();
        // $sql = "
        //     select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 'administrator' usertype, 'jakarta' userarea, '1234' userpassword  union
        //     select '2' urut, 'supram2.maharwantijo@cpp.co.id' userid, 'user' usertype, 'jakarta' userarea, '1234' userpassword
        // ";
        // $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function listuserpasswordedit(){
        $sql = "
            select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 'administrator' usertype, 'jakarta' userarea, '1234' userpassword, '1234' userrepassword
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function listuserstatus(){
        $sql = "
            select '1' urut, 'administrator' tblstatus  union
            select '2' urut, 'user' tblstatus
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function listuserarea(){
        $sql = "
            select '1' urut, 'jakarta' tblarea union
            select '2' urut, 'jawa barat' tblarea
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }
    public function listcompany(){
        $sql = "
            select '1' urut, 'cpp' tblcompany union
            select '2' urut, 'cpb' tblcompany
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }


    public function upload()
    {
        $user = $this->getuser();
        $fileupload = $this->fileupload();
        
        return view('menuupload',[
            'user' => $user,
            'fileupload' => $fileupload
        ]);
    }

    public function upload_history()
    {
        return view('upload_history');
    }

    public function download()
    {
        return view('download');
    }

    public function syncronize()
    {
        return view('sync');
    }

    public function info()
    {
        
        
        $user = $this->getuser();
        $listuser = $this->listuserpassword();
        $listuseredit = $this->listuserpasswordedit();

        $listgroup = Tblgroupuser::get();
        $tblobject = Tblobject::where('objtype','=','7')->get();

        // dd($listuser);
        $listcompany = $this->listcompany();
        $liststatus = $this->listuserstatus();
        $listarea = $this->listuserarea();
        return view('menuinformasi',[
            'user' => $user,
            'listuser' => $listuser,
            'liststatus' => $liststatus,
            'listarea' => $listarea,
            'listcompany' => $listcompany,
            'listuseredit' => $listuseredit,
            'listgroup' => $listgroup,
            'tblobject' => $tblobject

        ]);
    }


    public function search(Request $request)
    {
        
          $search = $request->get('term');
      
          $result = kodepost::where('kelurahan', 'LIKE', $search. '%')->get();

        //   return response()->json($result);

        $dataModified = array();
        foreach ($result as $data)
        {
            $dataModified[] = $data->kelurahan."-/-".$data->kecamatan."-/-".$data->kabupaten."-/-".$data->provinsi."-/-".$data->kodepos."-/-".$data->id;
        }
        return response()->json($dataModified);
    } 

    public function searchhubkelga(Request $request)
    {
        $search = $request->get('term');
        $result = kodepost::where('type', '=', 'HUB_KELUARGA')->where('desc', 'LIKE', '%' . $search. '%')->get();
        $dataModified = array();
        foreach ($result as $data)
        {
            $dataModified[] = $data->descr;
        }
        return response()->json($dataModified);
    } 

    


    public function destroy(Request $request)
    { 
        $para1=$request->input('para1');
        $para2=$request->input('para2');
        
        $applicant_id=$request->input('applicant_id');
        $tbluser = Tbluser::where('uid',$applicant_id)->first();
        
        DB::beginTransaction();
        try {
            $usradditional = Usradditional::where('user_id','=',$tbluser->user_id)->delete();
            $usrprofile = Usrprofile::where('user_id','=',$tbluser->user_id)->delete();
            // Tbluser::destroy($applicant_id);
            $tbluser = Tbluser::where('uid','=',$applicant_id)->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return response()->json(['code'=>500, 'message' => $e->getMessage()]);
        }
        
        return redirect('/subcompany1/'.$para1.'/'.$para2)->with('success', 'Applicant Removed');
    }

    public function uploadexcel(Request $request)
    {
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
		Excel::import(new CustomerImport, public_path('/file_customer/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Customer Berhasil Diimport!');
 
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

    function load_tipebadanhukum(Request $request){
        $inputbtkush = ($request->inputbtkush==''?3:$request->inputbtkush);
        // $inputbtkush = $request->inputbtkush;

        $back = db::table('dt_additional as a')
        ->where('a.TYPE', '=', 'BADAN_HUKUM')
        ->where('a.parent', '=', $inputbtkush)
        ->orderby('a.seq', 'asc')
            ->select('a.seq', 'a.desc')
            ->pluck('a.seq', 'a.desc');  
        return response()->json($back); 
    }
    
}
