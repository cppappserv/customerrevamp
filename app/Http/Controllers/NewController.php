<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbluser;
use App\Models\kodepost;
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
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function datacompany()
    {
        $sql = "
            select 'kt3005901' customer_id, 'eddie susanto 01' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005902' customer_id, 'eddie susanto 02' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005903' customer_id, 'eddie susanto 03' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005904' customer_id, 'eddie susanto 04' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005905' customer_id, 'eddie susanto 05' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005906' customer_id, 'eddie susanto 06' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005907' customer_id, 'eddie susanto 07' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005908' customer_id, 'eddie susanto 08' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005909' customer_id, 'eddie susanto 09' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time union
            select 'kt3005910' customer_id, 'eddie susanto 10' customer_name, 'agri inti prima' bu, 'aditya yudha' created_by, '01-11-2019' created_dt, '17:58:40' created_time, 'rahmat' changed_by, '14-05-2020' changed_dt, '13:21:24' changed_time 
        ";
        
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function grpcompany()
    {
        $sql = "
            select 1 urut, 'cpb/'       des, 'pt central pertiwi bahari'   des2, '' des3, 1201 ttl union 
            select 2 urut, 'cpgp smg/'  des, 'pt central pangan pertiwi '  des2, 'semarang' des3, 1202 ttl union
            select 3 urut, 'cpgp/'      des, 'pt central pangan pertiwi '  des2, 'jakarta' des3, 1203 ttl union
            select 4 urut, 'cpp medan/' des, 'pt. central proteina prima ' des2, 'medan' des3, 1204 ttl union
            select 5 urut, 'cpgp ckp/'  des, 'pt central pangan pertiwi '  des2, 'cikampek' des3, 1205 ttl union
            select 6 urut, 'cpp sda/'   des, 'pt. central proteina prima ' des2, 'sidoarjo' des3, 1206 ttl
        ";
        $grp = db::connection('mysql')->select($sql);
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
        $sql = "select info id, `desc` medsos from `dt_additional` where `type` = 'medsos'";
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
        $grpcmp = $this->grpcompany();
        $pilcompany = $kode;
        return view('menubu', [
            'user' => $user,
            'percompany' => $grpcmp,
            'pilcompany' => $pilcompany
        ]);
    }

    public function subcompany($kode, $kode2)
    {
        $user = $this->getuser();
        $datacmp = $this->datacompany();
        $pilcompany = $kode;
        return view('menubusub', [
            'user' => $user,
            'listdata' => $datacmp,
            'pilcompany' => $pilcompany
        ]);
    }

    public function tblsex()
    {
        
        $sql = "select info id, `desc` sex from `dt_additional` where `type` = 'jenis_kelamin'";
        $sql = "
            select 'l' id, 'laki-laki'  sex union 
            select 'w' id, 'wanita'  sex
        ";
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
        
        $sql = "select info id, `desc` sekolah from `dt_additional` where `type` = 'pendidikan'";
        
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

    

    public function dataadditional($para)
    {
        $sql = "
            SELECT a.*, b.desc desc1, b.info, b.info2, b.info3, b.info4 FROM usr_additional a
            INNER JOIN dt_additional b ON b.type = a.type AND b.seq = a.seq
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

    public function tabelstatus_usaha()
    {
        $sql = "
            SELECT * FROM dt_additional a WHERE TYPE = 'STATUS_USAHA';
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    

   

    public function detail($kode, $kode2)
    {
        $user_id = 'agent1'; 
        $inputuserid = "";
        $user = $this->getuser();
        $keluarga = $this->angotakeluarga();
        $pilcompany = $kode;
        $id = $kode2;
        $data_add = $this->dataadditional($user_id);
        $tabelarea_subagen = $this->tabelarea_subagen();
        // dd($tabelarea_subagen);

        // $datamedsos = $this->dataamedsos('MEDSOS', $data_add);
        return view('menudetail',[
            'inputuserid' => $inputuserid,
            'user' => $user,
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
            'tblpakan' => $this->tblpakan(),
            'tabelstatus_usaha' => $this->tabelstatus_usaha()
            
        ]);
    }

    public function detailsave(Request $request){

//         $sql = "insert into tbluser(`user_id`,`password`,`fullname`,`birthdate`,`birthplace`,`email`,`usergroup`,`branch`,`createddate`,`creatorid`)
//         values (
//             '" . $request->inputuserid . "',
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

        $sql = " 
            replace into usr_profile (`user_id`,`kodesap`,`noktp`,
                `almtktp`,`kelktp`,`kecktp`,`kotaktp`,`propktp`,`kdposktp`,
                `almtrmh`,`kelrmh`,`kecrmh`,`kotarmh`,`proprmh`,`kdposrmh`,
                `tlppri`,`faxpri`,`hppri`,
                `hobby`,`namapsgn`,`tmptlhrpsgn`,`tgllhrpsgn`,`btkush`,`npwp`,`status`,
                `almtush`,`kelush`,`kecush`,`kotaush`,`propush`,`kdposush`,
                `tlpush`,`faxush`,`hpush`,`emailush`,`lmusaha`,`karakteristik`,`namausaha`, 
                `tipeush` ,`namaalias`,`agama`,`goldarah`,`headgrp`           
            ) values ( 
                '" . $request->inputuserid . "',
                '" . $request->inputkodesap . "',
                '" . $request->inputnoktp . "',
                '" . $request->inputalamatktp . "',
                '" . $request->inputkelurahanktp . "',
                '" . $request->inputkecamatanktp. "',
                '" . $request->inputkotaktp . "',
                '" . $request->inputpropinsiktp . "',
                '" . $request->inputkodeposktp . "',          
                '" . $request->inputalamat . "',
                '" . $request->inputkelurahan . "',
                '" . $request->inputkecamatan. "',
                '" . $request->inputkota . "',
                '" . $request->inputpropinsi . "',
                '" . $request->inputkodepos . "',
                '" . $request->inputtelpon . "',
                '" . $request->inputfax . "',
                '" . $request->inputhp . "', 
                '" . $request->inputhobbys . "', 
                '" . $request->inputkeluarganama[0] . "', 
                '" . $request->inputkeluargatempat[0] . "', 
                '" . $request->inputkeluargatanggallahir[0] . "', 
                '" . $request->inputbentukusaha . "', 
                '" . $request->inputnpwp . "', 
                '" . $request->inputstatus . "',   
                '" . $request->inputalamatusaha . "',
                '" . $request->inputkelurahanusaha . "',
                '" . $request->inputkecamatanusaha. "',
                '" . $request->inputkotausaha . "',
                '" . $request->inputpropinsiusaha . "',
                '" . $request->inputkodeposusaha . "',              
                '" . $request->inputtelponusaha . "',
                '" . $request->inputfaxusaha . "',
                '" . $request->inputhpusaha . "',
                '" . $request->inputemailusaha . "', 
                '" . $request->inputlamausaha . "',
                '" . $request->inputkarakteristik . "',
                '" . $request->inputnamausaha . "',
                '" . $request->inputbadanhukum . "',
                '" . $request->inputnamaalias . "',
                '" . $request->inputagama . "',
                '" . $request->inputgolongandarah . "',
                '" . $request->inputheadgroup . "'              
            )
        ";
        echo $sql;
        exit;
        // X
        if ($imgphoto!=""){
            $sql = "
                select *
                from tbl_userphoto
                where user_id = '".$request->inputuserid."'
                and link = '".$request->imglink."'
            "; 

            $sql = " 
                delete from  
                tbl_userphoto
                where user_id = '".$request->inputuserid."'  
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
                    '".$request->inputuserid."','".$file."' )
                "; 
                //         $newdb = new condb( "fpdappscpb", $sql );
                // echo $file.'|';    
            }
        }



        $sql = " 
            delete from usr_additional
            where user_id = '".$request->inputuserid ."'
        ";

        $j= 0; 
        // X
        foreach($request->inputareapenjualan as $key => $values) {
            $j++;
            $sql = " insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                        values ('".$request->inputuserid ."',
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
                        values ('".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                                '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                                '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                                    '".$request->inputuserid ."',
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
                    '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                        '".$request->inputuserid ."',
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
                    '".$request->inputuserid ."',
                    'term_penjualan',
                    '".$j."',
                    '".$values."'
                )
            ";
            //echo $sql;          
            // $newdb = new condb( "fpdappscpb", $sql );              
        }
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
        $sql = "
            select '1' urut, 'supram.maharwantijo@cpp.co.id' userid, 'administrator' usertype, 'jakarta' userarea, '1234' userpassword  union
            select '2' urut, 'supram2.maharwantijo@cpp.co.id' userid, 'user' usertype, 'jakarta' userarea, '1234' userpassword
        ";
        $grp = db::connection('mysql')->select($sql);
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
            'listuseredit' => $listuseredit
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
   

    
}
