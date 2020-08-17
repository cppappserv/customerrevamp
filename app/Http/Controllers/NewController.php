<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
use App\Models\Usrprofile;
use App\Models\Usradditional;
use App\Models\Dtadditional;
use App\Models\Tblgroupuser;
use App\Models\Tblobject;
use App\Models\Zbranch;

use DB;

class NewController extends Controller
{
    /**
     * create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * show the application dashboard.
     *
     * @return \illuminate\contracts\support\renderable
     */

    public function getuser()
    {
        $user = tbluser::where('user_id','=','supram.maharwantijo@cpp.co.id')->first();
        return $user;
    }

    public function grpbu()
    {
        $sql = "
            select 1 urut, 'fish feed' des, 1200 ttl union 
            select 2 urut, 'fish fry' des, 502 ttl union
            select 3 urut, 'food' des, 2492 ttl union
            select 4 urut, 'fpd' des, 1592 ttl union
            select 5 urut, 'pet cws' des, 2049 ttl union
            select 6 urut, 'pet suhs' des, 902 ttl union
            select 7 urut, 'probiotik' des, 557 ttl union
            select 8 urut, 'shrimp feed' des, 1692 ttl union
            select 9 urut, 'shrimp fry' des, 375 ttl
        ";
        $sql = "
            SELECT 0 AS urut, c1.info3 des ,COUNT(*) ttl 
            FROM tbluser a1
            INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
            INNER JOIN dt_additional c1 ON c1.info = a1.company
            GROUP BY c1.info3
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
        SELECT a1.uid, a1.user_id customer_id, a1.fullname customer_name, c1.info4 bu, a2.fullname created_by, 
        DATE_FORMAT(a1.createddate,'%Y-%m-%d') created_dt, DATE_FORMAT(a1.createddate,'%H:%i:%s') created_time, 
        a3.fullname changed_by, 
        DATE_FORMAT(a1.updateddate,'%Y-%m-%d') changed_dt, DATE_FORMAT(a1.updateddate,'%H:%i:%s') changed_time
        FROM tbluser a1
        INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
        INNER JOIN dt_additional c1 ON c1.info = a1.company
        LEFT OUTER JOIN tbluser a2 ON a1.createdby = a2.uid
        LEFT OUTER JOIN tbluser a3 ON a1.updatedby = a3.uid
        WHERE c1.info3 = '".$para1."' AND a1.company = '".$para2."'
           ";
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
        
    }

    public function grpcompany($para)
    {
        $sql = "
            select 1 urut, 'cpb/'       des, 'pt central pertiwi bahari'   des2, '' des3, 1201 ttl union 
            select 2 urut, 'cpgp smg/'  des, 'pt central pangan pertiwi '  des2, 'semarang' des3, 1202 ttl union
            select 3 urut, 'cpgp/'      des, 'pt central pangan pertiwi '  des2, 'jakarta' des3, 1203 ttl union
            select 4 urut, 'cpp medan/' des, 'pt. central proteina prima ' des2, 'medan' des3, 1204 ttl union
            select 5 urut, 'cpgp ckp/'  des, 'pt central pangan pertiwi '  des2, 'cikampek' des3, 1205 ttl union
            select 6 urut, 'cpp sda/'   des, 'pt. central proteina prima ' des2, 'sidoarjo' des3, 1206 ttl
        ";

        $sql = "
            SELECT 0 urut, c1.info, CONCAT(c1.info2,'/') des, CONCAT(c1.info4,'/') des2, IF(c1.info5 IS NULL,'',CONCAT(c1.info5,'/')) des3 ,COUNT(*) ttl 
            FROM tbluser a1
            INNER JOIN tblobject b1 ON b1.objtype='7' AND a1.branch = b1.objname
            INNER JOIN dt_additional c1 ON c1.info = a1.company
            WHERE c1.info3 = '".$para."'
            GROUP BY c1.info, c1.info2, c1.info4, c1.info5;
        ";
        $grp = db::connection('mysql')->select($sql);
        $i=0;
        foreach ($grp as $key => $value) {
            $i++;
            $value->urut = $i;
        }
        return $grp;
    }

    public function angotakeluarga()
    {
        $sql = "
            select 1 urut, 'rita andriana' nama, 'lampung'        tmplahir, date_format('2020-02-01','%d %b %y') tgllahir, 'perempuan' sex, 'istri' stakel, 's1' stapendidikan union 
            select 2 urut, 'martinus'      nama, 'tanjung karang' tmplahir, date_format('2020-03-02','%d %b %y') tgllahir, 'laki-laki' sex, 'anak'  stakel, 'sma' stapendidikan union
            select 3 urut, 'gisela'        nama, 'bogor'          tmplahir, date_format('2020-04-03','%d %b %y') tgllahir, 'perempuan' sex, 'anak'  stakel, 'sd' stapendidikan
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblagama()
    {
        $sql = "select seq id, `desc` agama from `dt_additional` where `type` = 'agama_list'";
        // $sql = "
        //     select 1 id, 'katolik' agama union 
        //     select 2 id, 'islam' agama union 
        //     select 3 id, 'budha' agama union 
        //     select 4 id, 'hindu' agama union 
        //     select 5 id, 'kristem' agama union 
        //     select 6 id, 'konghucu' agama 
        // ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tbldarah()
    {   
        $sql = "select seq id, `desc` darah from `dt_additional` where `type` = 'darah_list'";
        // $sql = "
        //     select 'o'  id, 'o'  darah union 
        //     select 'a'  id, 'a'  darah union 
        //     select 'b'  id, 'b'  darah union 
        //     select 'ab' id, 'ab' darah 
        // ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblmedsos()
    {
        $sql = "SELECT * FROM `dt_additional`  WHERE TYPE = 'MEDSOS';";
        // $sql = "
        //     select '1' id, 'wa'  medsos union 
        //     select '2' id, 'gmail'  medsos
        // ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblagenhubunganstatus()
    {
        $sql = "SELECT * FROM `dt_additional`  WHERE TYPE = 'AGEN_HUB_STATUS'";
        // $sql = "
        //     select '1' id, 'wa'  medsos union 
        //     select '2' id, 'gmail'  medsos
        // ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    

  

    public function index()
    {
        $user = $this->getuser();
        $grpcmp = $this->grpbu();
        return view('menuutama', [
            'user' => $user,
            'perbu' => $grpcmp
        ]);
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
        $sql = "SELECT * FROM `dt_additional`  WHERE TYPE = 'JENIS_KELAMIN'";
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
        
        // $sql = "
        //     select 'sd'  id, 'sd'        sekolah union 
        //     select 'smp' id, 'smp'       sekolah union 
        //     select 'sma' id, 'sma'       sekolah union 
        //     select 's1'  id, 'strata-1'  sekolah
        // ";
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
        $sql = "
            SELECT * FROM dt_additional a WHERE TYPE = 'BENTUK_USAHA';
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tabelbadanhukum()
    {
        $sql = "
            SELECT * FROM dt_additional a WHERE TYPE = 'BADAN_HUKUM';
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tabelstatus_usaha()
    {
        $sql = "
            SELECT * FROM dt_additional a WHERE TYPE = 'STATUS_USAHA'
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
          TYPE = 'NAMABANK'
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
            SELECT CONCAT(seq,'/',COALESCE(`desc`,'/'),'/',COALESCE(info,'-'),'/',COALESCE(info2,'-'),'/',COALESCE(info3,'-'),'/',COALESCE(info4,'-')) seq,`desc` 
            FROM dt_additional 
            WHERE  TYPE = '".$para."' and coalesce(`desc`,'') <> ''
            ORDER BY seq
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function addasset($para, $para2)
    {
        $sql = "
            SELECT b.*, 
                a.desc, 
                a.info, 
                a.info2, 
                a.info3, 
                a.info4, 
                a.parent, 
                a.display, 
                a.info5
            FROM dt_additional A
                    INNER JOIN usr_additional B
                    ON A.type = B.type
                    AND B.user_id='".$para."'
                    WHERE  A.type IN ('".$para2."')
                    AND a.seq = b.sseq
                    ORDER BY A.seq
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function addasset2($para, $para2)
    {
        $sql = "
            SELECT b.*, 
                    a.desc, 
                    a.info, 
                    a.info2, 
                    a.info3, 
                    a.info4, 
                    a.parent, 
                    a.display, 
                    a.info5
            FROM dt_additional a 
            LEFT OUTER JOIN usr_additional b 
                ON A.type = B.type
                    AND B.user_id='".$para."'
                    AND a.seq = b.seq
            WHERE a.type IN ('".$para2."')
                AND b.user_id IS NOT NULL
            ORDER BY A.seq
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }



    

    
   

    public function detail($kode, $kode2)
    {
        $user = $this->getuser();  // login pertama

        $kode2 = 157;  // data yang di pilih
        $id = $kode2;
        $tbluser = Tbluser::where('uid', '=', $id)->first();
        $iduser = $tbluser->user_id; 
        $usr_profile = Usrprofile::where('user_id', '=', $tbluser->user_id)->first();
        $data_add = Usradditional::where('user_id', '=', $tbluser->user_id)->get();
        $data_add_asset = $this->addasset($tbluser->user_id,'ASSET_PRIBADI');
        $data_add_modalsendiri = $this->addasset2($tbluser->user_id,'MODAL');

// DD($data_add_modalsendiri);
        // $data_add = $this->dataadditional($iduser);
        
        $keluarga = $this->angotakeluarga();
        $pilcompany = $kode;
        
        
        
        $tabelarea_subagen = $this->tabelarea_subagen();
        // dd($tabelarea_subagen);

        // $datamedsos = $this->dataamedsos('MEDSOS', $data_add);
        return view('menudetail',[
            'idedit' => $iduser,
            'user' => $user,
            'tbluser' => $tbluser,
            'pilcompany' => $pilcompany,
            'id' => $id,
            'keluarga' => $keluarga,
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
            'data_add_modalbank' => $this->addasset2($tbluser->user_id,'MODAL_BANK'),
            'data_add_jaminanpribadi' => $this->addasset2($tbluser->user_id,'JAMINAN_PRIBADI')
        ]);
    }

    public function detailsave(Request $request){

//         $sql = "insert into tbluser(`user_id`,`password`,`fullname`,`birthdate`,`birthplace`,`email`,`usergroup`,`branch`,`createddate`,`creatorid`)
//         values (
//             '" . $request->inputuser_id . "',
//             md5('".$request->inputpassword."'),
//             '" . $inputnamalengkap . "',
//             '" . $inputtanggallahir . "',
//             '" . $inputtempatlahir . "',
//             '" . $inputemail . "',
//             '" . $inputusertype . "',
//             '" . $inputuserarea ."',
//             '" . date( "y-m-d h:i:s", strtotime( "now" ) ) . "',
//             '" . $checksess -> username . "' )";
// //$inputStatus

DB::beginTransaction();

    try {
        if(!$request->inputuserid){
            $tbluser = new Tbluser;
            $tbluser->userid = $request->inputfullname;

        } else {
            $tbluser = Tbluser::where('uid','=',$request->inputuid)->first();
        }
        $tbluser->fullname = $request->inputfullname;
        $tbluser->birthdate = $request->inputbirthdate;
        $tbluser->birthdate = $request->inputbirthplace;
        // $tbluser->save();

        dd($tbluser);
        
        


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
                
        
        
        

        $usrprofile = Usrprofile::where('user_id', '=', $tbluser->userid)->first();
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
        $usrprofile->namapsgn      = $request->inputnamapsgn; 
        $usrprofile->tmptlhrpsgn   = $request->inputtmptlhrpsgn; 
        $usrprofile->tgllhrpsgn    = $request->inputtgllhrpsgn; 
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
        $usrprofile->emailush      = $request->inputemailush; 
        $usrprofile->lmusaha       = $request->inputlmusaha; 
        $usrprofile->karakteristik = $request->inputkarakteristik; 
        $usrprofile->namausaha     = $request->inputnamausaha; 
        $usrprofile->namaalias     = $request->inputnamaalias; 
        $usrprofile->agama         = $request->inputagama; 
        $usrprofile->goldarah      = $request->inputgoldarah; 
        $usrprofile->headgrp       = $request->inputheadgrp;
        // $usrprofile->save();
        dd($usrprofile);
        exit;


        Usradditional::where('user_id', '=', $request->inputuser_id)
        ->update(['value7' => '']);

        $j=0;
        $type="MEDSOS";
        foreach($request->inputmedsospri as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                $data->sseq = $values;
                $data->desc = $request->inputmedsosakunpri[$j];
                $data->value7 = '';
                $data->save();
            }
        }
        $j=0;
        $type="MEDSOSUSH";
        foreach($request->inputmedsosush as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                $data->sseq = $values;
                $data->desc = $request->inputmedsosakunush[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="DATA_KELUARGA";
        foreach($request->inputkeluargastatus as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                $data->sseq = $values;
                // $data->desc = $request->inputmedsosakunush[$j];
                $data->value1 = $request->inputkeluarganama[$j];
                $data->value2 = $request->inputkeluargatempat[$j];
                $data->value3 = $request->inputkeluargatanggallahir[$j];
                $data->value4 = $request->inputkeluargasex[$j];
                $data->value5 = 'P';
                $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="STATUSUSAHA";
        foreach($request->inputstatusush as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $values;
                // $data->value1 = $request->inputkeluarganama[$j];
                // $data->value2 = $request->inputkeluargatempat[$j];
                // $data->value3 = $request->inputkeluargatanggallahir[$j];
                // $data->value4 = $request->inputkeluargasex[$j];
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="AGEN_HUB";
        foreach($request->inputstatusush as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                // $data->desc = $values;
                $data->value1 = $request->inputagenhubnama[$j];
                $data->value2 = $request->inputagenaubkode[$j];
                // $data->value3 = $request->inputkeluargatanggallahir[$j];
                $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }


        $j=0;
        // $type="AGEN_HUB";
        foreach($request->inputNamaarea as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $values)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $values;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $request->inputQtySubAgen;
                $data->value1 = $request->inputNamaSubAgen[$j];
                $data->value2 = $request->inputLokasiSubAgen[$j];
                $data->value3 = $request->inputInfoSubAgen[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="PAKAN_JUAL";
        foreach($request->inputPakanJualC as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $values;
                $data->value1 = $request->inputPakanJualV[$j];
                $data->value2 = $request->inputPakanJual[$j];
                // $data->value3 = $request->inputInfoSubAgen[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="BISNIS_LAIN";
        foreach($request->inputbisnislain as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $values;
                $data->value1 = $request->inputbisnislainrp[$j];
                // $data->value2 = $request->inputPakanJual[$j];
                // $data->value3 = $request->inputInfoSubAgen[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="BISNIS_LAIN";
        foreach($request->inputbisnislain as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $values;
                $data->value1 = $request->inputbisnislainrp[$j];
                // $data->value2 = $request->inputPakanJual[$j];
                // $data->value3 = $request->inputInfoSubAgen[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="ASSET_PRIBADI";
        foreach($request->inputasetpribadi as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                $data->desc = $values;
                $data->value1 = $request->inputAssetValue[$j];
                $data->value2 = $request->inputAssetSseq[$j];
                $data->value3 = $request->inputAssetLain[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }



        $j=0;
        $type="MODAL";
        foreach($request->inputmodalid as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $values;
                // $data->sseq = $values;
                $data->desc = $inputmodal[$j];
                // $data->value1 = $request->inputmodal[$j];
                // $data->value2 = $request->inputAssetSseq[$j];
                // $data->value3 = $request->inputAssetLain[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }


        $j=0;
        $type="MODAL_BANK";
        foreach($request->inputmodalbankpersent as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                // $data->sseq = $values;
                // $data->desc = $values;
                $data->value1 = $values;
                $data->value2 = $request->inputmodalbanknamaid[$j];
                // $data->value3 = $request->inputAssetLain[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        $j=0;
        $type="JAMINAN_PRIBADI";
        foreach($request->inputJaminanid as $key => $values) {
            if ($values != ""){
                $j++;
                $data = Usradditional::where('user_id', '=', $request->inputuser_id)
                ->where('type', '=', $type)
                ->where('seq', '=', $j)->first();
                if (!$data){
                    $data = new Usradditional;
                }
                $data->user_id = $request->inputuser_id;
                $data->type = $type;
                $data->seq = $j;
                $data->sseq = $values;
                $data->desc = $request->inputJaminanPribadi[$j];
                $data->value1 = $request->inputJaminanValue[$j];
                $data->value2 = $request->inputJaminanAlamat[$j];
                $data->value3 = $request->inputJaminanLain[$j];
                // $data->value4 = $values;
                // $data->value5 = 'P';
                // $data->value6 = $request->inputkeluargapendidikan[$j];
                $data->value7 = '';
                $data->save();
            }
        }

        DB::table('usr_additional')->where('user_id', '=', $request->inputuser_id)
        ->where('value7', '=', 'X')->delete();

        DB::commit();
    } catch (\Exception $e) {
        DB::rollback();
        // something went wrong
    }

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
                        '".$request->inputbisnislainomset[$j-1]."'
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
                        '".$request->inputbankname[$j-1]."'
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
                        '".$request->inputagenhubkode[$j-1]."',
                        '".$request->inputagenhubstatus[$j-1]."'
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
                        '".$request->inputqtysubagen[$j-1]."',
                        '".$values."',
                        '".$request->inputlokasisubagen[$j-1]."',
                        '".$request->inputinfosubagen[$j-1]."'
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
                        '".$request->inputqtypetambak[$j-1]."',
                        '".$values."',
                        '".$request->inputlokasipetambak[$j-1]."',
                        '".$request->inputinfopetambak[$j-1]."'
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
                        '".$request->inputqtylain[$j-1]."',
                        '".$values."',
                        '".$request->inputlokasilain[$j-1]."',
                        '".$request->inputinfolain[$j-1]."'
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

    public function infoedit()
    {
        return view('infoedit');
    }

    

    public function pribadi()
    {
        return view('pribadi');
    }

    public function usaha()
    {
        return view('usaha');
    }

    public function logout()
    {
        return view('logout');
    }

    public function kepemilikan()
    {
        return view('kepemilikan');
    }

    public function jaminan()
    {
        return view('jaminan');
    }

    public function karakteristik()
    {
        return view('karakteristik');
    }

    public function edit0101()
    {
        return view('edit0101');
    }

    public function edit0201()
    {
        return view('edit0201');
    }

    public function edit0301()
    {
        return view('edit0301');
    }

    public function edit0401()
    {
        return view('edit0401');
    }

    public function edit0501()
    {
        return view('edit0501');
    }

    public function edit0501upload()
    {
        return view('edit0501upload');
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

    public function infosave(Request $request){
        // dd($request->all());
        if ($request->inputbaris == ""){
            $this->validate($request, [
                'inputuserid'      => ['required'],
                'inputusertype'    => ['required'],
                'inputuserarea'    => ['required'],
                'inputuserpass'    => ['required'],
                'inputuserrepass'  => ['required'],
                'inputusercompany' => ['required'],
            ]);

            $tbluser = new Tbluser;
            $nama = explode( '@', $request->inputuserid );
            $tbluser->fullname = $nama[0];
            
        } else {
            $tbluser = Tbluser::where('uid','=',$request->inputuid)->first();
        }
        
        $tbluser->user_id   = $request->inputuserid;
        $tbluser->usergroup = $request->inputusertype ;
        $tbluser->branch    = $request->inputuserarea;
        if($request->inputuserpass <> $tbluser->password){
            $tbluser->password  = md5($request->inputuserpass);
        }
        $tbluser->company   = $request->inputusercompany ;
        $tbluser->save();
        return redirect('/info1');
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
}
