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
        
        $sql = "
            select 'sd'  id, 'sd'        sekolah union 
            select 'smp' id, 'smp'       sekolah union 
            select 'sma' id, 'sma'       sekolah union 
            select 's1'  id, 'strata-1'  sekolah
        ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function tblkelurahan()
    {
        
        $sql = "select id, concat(kelurahan, '/', kecamatan, '/', kabupaten) `desc` from `tbl_kodepos` ";
        $grp = db::connection('mysql')->select($sql);
        return $grp;
    }

    public function detail($kode, $kode2)
    {
        $inputuserid = "";
        $user = $this->getuser();
        $keluarga = $this->angotakeluarga();
        $pilcompany = $kode;
        $id = $kode2;

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
            'tblkelurahan' => $this->tblkelurahan()
            
        ]);
    }
// inputuserid, inputusertype, $inputuserarea
    public function detail_save(){
        $sql = "insert into tbluser(`user_id`,`password`,`fullname`,`birthdate`,`birthplace`,`email`,`usergroup`,`branch`,`createddate`,`creatorid`)
        values (
            '" . $inputuserid . "',
            md5('".$inputpassword."'),
            '" . $inputnamalengkap . "',
            '" . $inputtanggallahir . "',
            '" . $inputtempatlahir . "',
            '" . $inputemail . "',
            '" . $inputusertype . "',
            '" . $inputuserarea ."',
            '" . date( "y-m-d h:i:s", strtotime( "now" ) ) . "',
            '" . $checksess -> username . "' )";
//$inputStatus
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
                '" . $inputuserid . "',
                '" . $inputkodesap . "',
                '" . $inputnoktp . "',
                '" . $inputalamatktp . "',
                '" . $inputkelurahanktp . "',
                '" . $inputkecamatanktp. "',
                '" . $inputkotaktp . "',
                '" . $inputpropinsiktp . "',
                '" . $inputkodeposktp . "',          
                '" . $inputalamat . "',
                '" . $inputkelurahan . "',
                '" . $inputkecamatan. "',
                '" . $inputkota . "',
                '" . $inputpropinsi . "',
                '" . $inputkodepos . "',
                '" . $inputtelpon . "',
                '" . $inputfax . "',
                '" . $inputhp . "', 
                '" . $inputhobby . "', 
                '" . $inputnmpsgn . "', 
                '" . $inputtmptlhrpsgn . "', 
                '" . $inputtgllhrpsgn . "', 
                '" . $inputbentukusaha . "', 
                '" . $inputnpwp . "', 
                '" . $inputstatus . "', 
                '" . $inputalamatusaha . "',
                '" . $inputkelurahanusaha . "',
                '" . $inputkecamatanusaha. "',
                '" . $inputkotausaha . "',
                '" . $inputpropinsiusaha . "',
                '" . $inputkodeposusaha . "',              
                '" . $inputtelponusaha . "',
                '" . $inputfaxusaha . "',
                '" . $inputhpusaha . "',
                '" . $inputemailusaha . "', 
                '" . $inputlamausaha . "',
                '" . $inputkarakteristik . "',
                '" . $inputnamausaha . "',
                '" . $inputbadanhukum . "',
                '" . $inputnamaalias . "',
                '" . $inputagama . "',
                '" . $inputgolongandarah . "',
                '" . $inputheadgroup . "'              
            )
        ";
        // X
        if ($imgphoto!=""){
            $sql = "
                select *
                from tbl_userphoto
                where user_id = '".$inputuserid."'
                and link = '".$imglink."'
            "; 

            $sql = " 
                delete from  
                tbl_userphoto
                where user_id = '".$inputuserid."'  
                    and link = '".$imglink."'
            ";

            $imgname  = uniqid().date( "ymdhis", strtotime( "now" ) );
            $img = $imgphoto;
            $img = str_replace(' ', '+', $img);
            $data = base64_decode($img);
            $file = upload_dir . $imgname . '.png';
            $success = file_put_contents($file, $data);
        
            if ($success){
                $sql = "
                    replace into  
                    tbl_userphoto values (
                    '".$inputuserid."','".$file."' )
                "; 
                //         $newdb = new condb( "fpdappscpb", $sql );
                // echo $file.'|';    
            }
        }



        $sql = " 
            delete from usr_additional
            where user_id = '".$inputuserid ."'
        ";

        $j= 0; 
        // X
        foreach($inputareapenjualan as $key => $values) {
            $j++;
            $sql = " insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                        values ('".$inputuserid ."',
                                'area_penjualan',
                                '".$j."',
                                '".$values."')";
                        
            $newdb = new condb( "fpdappscpb", $sql );
        }

        $j= 0; 
        foreach($inputtelpons as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                        values ('".$inputuserid ."',
                                'telpon',
                                '".$j."',
                                '".$values."')";
            // $newdb = new condb( "fpdappscpb", $sql ); 
           }             
        }  
        $j= 0; 
        foreach($inputhobbys as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$inputuserid ."',
                        'hobby',
                        '".$j."',
                        '".$values."')
                ";
                      
            // $newdb = new condb( "fpdappscpb", $sql );              
           }
        }

        $j= 0; 
        foreach($inputemails as $key => $values) {
            if ($values != ""){               
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$inputuserid ."',
                        'email',
                        '".$j."',
                        '".$values."'
                    )
                ";
                        
            // $newdb = new condb( "fpdappscpb", $sql );              
            }
        }  

        $j= 0; 
        foreach($inputpakanjual as $keys => $values) {
            $j++;
            $k =0;
            $i=0;
            foreach($inputpakanjualv as $key => $value) {
                $k++;
                $l=0;
                foreach($inputpakanjualc as $keyc => $valuec) {
                    $l++;                 
                    if ($k == $j && $j==$l && ($valuec != "" or $values != "" or $value!="") ){
                        $i++;
                        $sql = " 
                            insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`)
                            values (
                                '".$inputuserid ."',
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
        foreach($inputbisnislain as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`)
                    values (
                        '".$inputuserid ."',
                        'bisnis_lain',
                        '".$j."',
                        '".$values."',
                        '".$inputbisnislainomset[$j-1]."'
                    )
                ";
                // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        } 

        $j= 0; 
        foreach($inputmodalbank as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`)
                    values (
                        '".$inputuserid ."',
                        'modal_bank',
                        '".$j."',
                        '".$values."',
                        '".$inputbankname[$j-1]."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        }  
        
        $j= 0; 
        foreach($inputagenhubnama as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`,`value4`)
                    values (
                        '".$inputuserid ."',
                        'agen_hub',
                        '".$j."',
                        '".$values."',
                        '".$inputagenhubkode[$j-1]."',
                        '".$inputagenhubstatus[$j-1]."'
                    )
                ";
                        
                // $newdb = new condb( "fpdappscpb", $sql );   
            } 
        }  
            
                       
        $j= 0; 
        foreach($inputkodesaps as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$inputuserid ."',
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
        foreach($inputkeluarganama as $key => $values) {
            $j++;
            if ($values != ""){
                $i++; 
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`value1`,`value2`,`value3`,`value4`,`value5`,`value6`)
                    values (
                        '".$inputuserid ."',
                        'data_keluarga',
                        '".$j."',
                        '".$values."',
                        '".$inputkeluargatempat[$i-1]."',
                        '".$inputkeluargatanggal[$i-1]."',
                        '".$inputkeluargakelamin[$i-1]."',
                        '".$inputkeluargastatus[$i-1]."',
                        '".$inputkeluargapendidikan[$i-1]."'
                    )
                ";
                        
            // $newdb = new condb( "fpdappscpb", $sql );   
            }           
        } 

        $j= 0; 
        foreach($inputmedsos as $key => $values) {
            if ($values != ""){
                $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$inputuserid ."',
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
        foreach($inputjaminanpribadi as $keys => $values) {
            $j++;
            $k =0;
            //echo $values;
            foreach($inputjaminanvalue as $key => $value) {
            $k++;
            //echo $value;                  
                if ($k == $j and $value != "" and $values != ""){               
                    $h=0;
                    foreach($inputjaminansseq as $keya => $valuea) {                
                        $h++;
                        //echo $valuea;
                        if ($k == $h){
                        
                        $i++;
                        $sql = " 
                            insert into usr_additional (`user_id`,`type`,`seq`,`sseq`,`desc`,`value1`,`value2`,`value3`)
                            values (
                                '".$inputuserid ."',
                                'jaminan_pribadi',
                                '".$i."',
                                '".$valuea."',
                                '".$values."',
                                '".$value."',
                                '".$inputjaminanalamat[$h-1]."',
                                '".$inputjaminanlain[$h-1]."'
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
        foreach($inputstatususahas as $key => $values) {
            if ($values != ""){
                            $j++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                    values (
                        '".$inputuserid ."',
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
        foreach($inputassetpribadi as $keys => $values) {
            $j++;
            $k =0;
            //echo $values;
            foreach($inputassetvalue as $key => $value) {
                $k++;
                //echo $value;                  
                if ($k == $j and $value != "" and $values != ""){               
                    $h=0;
                    foreach($inputassetsseq as $keya => $valuea) {                
                        $h++;
                        //echo $valuea;
                        if ($k == $h){
                        
                            $i++;
                            $sql = " 
                                insert into usr_additional (`user_id`,`type`,`seq`,`sseq`,`desc`,`value1`,`value2`,`value3`)
                                values (
                                    '".$inputuserid ."',
                                    'asset_pribadi',
                                    '".$i."',
                                    '".$valuea."',
                                    '".$values."',
                                    '".$value."',
                                    '".$inputassetalamat[$h-1]."',
                                    '".$inputassetlain[$h-1]."'
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
        foreach($inputmodal as $key => $values) {
            $j++;
            $sql = " 
                insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                values (
                    '".$inputuserid ."',
                    'modal',
                    '".$j."',
                    '".$values."'
                )
            ";
                    
            // $newdb = new condb( "fpdappscpb", $sql );              
        } 

        $j= 0; 
        foreach($inputnamasubagen as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$inputuserid ."',
                        'area_subagen',
                        '".$i."',
                        '".$inputqtysubagen[$j-1]."',
                        '".$values."',
                        '".$inputlokasisubagen[$j-1]."',
                        '".$inputinfosubagen[$j-1]."'
                    )
                ";
                //echo $sql;          
                // $newdb = new condb( "fpdappscpb", $sql );  
            }            
        }


        $j= 0; 
        foreach($inputnamapetambak as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$inputuserid ."',
                        'area_petambak',
                        '".$i."',
                        '".$inputqtypetambak[$j-1]."',
                        '".$values."',
                        '".$inputlokasipetambak[$j-1]."',
                        '".$inputinfopetambak[$j-1]."'
                    )
                ";
                //echo $sql;          
                $newdb = new condb( "fpdappscpb", $sql );   
            }           
        }

        $j= 0; 
        foreach($inputnamalain as $key => $values) {
            $j++;
            $i=0;
            if ($values != ""){
                $i++;
                $sql = " 
                    insert into usr_additional (`user_id`,`type`,`seq`,`desc`,`value1`,`value2`,`value3`)
                    values (
                        '".$inputuserid ."',
                        'area_lain',
                        '".$i."',
                        '".$inputqtylain[$j-1]."',
                        '".$values."',
                        '".$inputlokasilain[$j-1]."',
                        '".$inputinfolain[$j-1]."'
                    )
                ";
                //echo $sql;          
                // $newdb = new condb( "fpdappscpb", $sql );     
            }         
        }

        $j= 0; 
        foreach($inputterminpenjualan as $key => $values) {
            $j++;
            $sql = " 
                insert into usr_additional (`user_id`,`type`,`seq`,`desc`)
                values (
                    '".$inputuserid ."',
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
            $dataModified[] = $data->kelurahan."|".$data->kecamatan."|".$data->kabupaten."|-".$data->provinsi."|".$data->kodepos."|".$data->id;
        }
        return response()->json($dataModified);
    } 
   

    
}
