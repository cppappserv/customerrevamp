<?php
namespace App\Imports;
 
use App\Models\Importprofile;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
 
class CustomerImport2 implements ToModel, WithHeadingRow
{
    public $usercode;

    public function __construct(
        $usercode
    )
    {
        $this->usercode       = $usercode;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         if(count($row)>1) {
            $usercode = $this->usercode;
            $telephone_1 = $row[14];
            if ($telephone_1 && substr($telephone_1,0,1) <> '0' ){
                $telephone_1 = '0'.$telephone_1;
            } 
            $oth_telp_hp_fax = $row[22];
            if ($oth_telp_hp_fax && substr($oth_telp_hp_fax,0,1) <> '0' ){
                $oth_telp_hp_fax = '0'.$oth_telp_hp_fax;
            } 
            
            
            return new Importprofile([
                'user_id'             => $row[0], 
                'user_type'           => $row[1], 
                'area_type'           => $row[2], 
                'area'                => $row[3], 
                'sorg'                => $row[4], 
                'customer'            => $row[5], 
                'soff'                => $row[6], 
                'name_1_usaha'        => $row[7], 
                'cocd'                => $row[8], 
                'nik'                 => $row[9], 
                'vat_registration_no' => $row[10], 
                'street'              => $row[11], 
                'kelurahan'           => $row[12], 
                'postalcode'          => $row[13], 
                'telephone_1'         => $telephone_1, 
                'e_mail_address'      => $row[15], 
                'cgrp'                => $row[16], 
                'alias'               => $row[17], 
                'tgl_lahir'           => $row[18], 
                'tmpt_lahir'          => $row[19], 
                'agama'               => $row[20], 
                'gol_darah'           => $row[21], 
                'oth_telp_hp_fax'     => $oth_telp_hp_fax, 
                'medsos'              => $row[23], 
                'hobby'               => $row[24], 
                'bentuk_usaha'        => $row[25], 
                'nama_pribadi'        => $row[26], 
                'status_usaha'        => $row[27], 
                'code_cust_1'         => $row[28], 
                'code_cust_2'         => $row[29], 
                'code_cust_3'         => $row[30], 
                'code_cust_4'         => $row[31], 
                'code_cust_5'         => $row[32], 
                'status_customer'     => $row[33], 
                'usercode'            => $usercode, 
                'uid'                 => Auth::user()->uid,

                 // 'user_id'       => $row[0], 
                // 'kodesap'       => $row[1], 
                // 'noktp'         => $row[2], 
                // 'almtktp'       => $row[3], 
                // 'kelktp'        => $row[4], 
                // 'kecktp'        => $row[5], 
                // 'kotaktp'       => $row[6], 
                // 'propktp'       => $row[7], 
                // 'kdposktp'      => $row[8], 
                // 'almtrmh'       => $row[9], 
                // 'kelrmh'        => $row[10], 
                // 'kecrmh'        => $row[11], 
                // 'kotarmh'       => $row[12], 
                // 'proprmh'       => $row[13], 
                // 'kdposrmh'      => $row[14], 
                // 'tlppri'        => $row[15], 
                // 'faxpri'        => $row[16], 
                // 'hppri'         => $row[17], 
                // 'emailpri'      => $row[18], 
                // 'hobby'         => $row[19], 
                // 'namapsgn'      => $row[20], 
                // 'tmptlhrpsgn'   => $row[21], 
                // 'tgllhrpsgn'    => $row[22], 
                // 'btkush'        => $row[23], 
                // 'tipeush'       => $row[24], 
                // 'npwp'          => $row[25], 
                // 'status'        => $row[26], 
                // 'almtush'       => $row[27], 
                // 'kelush'        => $row[28], 
                // 'kecush'        => $row[29], 
                // 'kotaush'       => $row[30], 
                // 'propush'       => $row[31], 
                // 'kdposush'      => $row[32], 
                // 'tlpush'        => $row[33], 
                // 'faxush'        => $row[34], 
                // 'hpush'         => $row[35], 
                // 'emailush'      => $row[36], 
                // 'lmusaha'       => $row[37], 
                // 'karakteristik' => $row[38], 
                // 'namausaha'     => $row[39], 
                // 'namaalias'     => $row[40], 
                // 'agama'         => $row[41], 
                // 'goldarah'      => $row[42], 
                // 'headgrp'       => $row[43],
                // 'uid'           => Auth::user()->uid,
            ]);
        }
    }

    public function headingRow(): int
    {
        return 4;
    }
}