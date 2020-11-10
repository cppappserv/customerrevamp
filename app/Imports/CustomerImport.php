<?php
namespace App\Imports;
 
use App\Models\Importprofile;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
 
class CustomerImport implements ToModel, WithHeadingRow
{
    public $dtadditional;

    public function __construct(
        $dtadditional
    )
    {
        $this->dtadditional = $dtadditional;
    }
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        $dtadditional = $this->dtadditional;
         if($row["sorg"]<>"") {
            $usercode = $dtadditional->info;
            $company = $dtadditional->company;
            
            // $code = $dtadditional->info6;
            if ($row["telephone_1"] && substr($row["telephone_1"],0,1) <> '0' ){
                $row["telephone_1"] = '0'.$row["telephone_1"];
            } 
            if ($row["oth_telp_hp_fax"] && substr($row["oth_telp_hp_fax"],0,1) <> '0' ){
                $row["oth_telp_hp_fax"] = '0'.$row["oth_telp_hp_fax"];
            } 
            // $row["user_id"] = ($row["user_id"]==""?$code.$row["customer"]:$row["user_id"]);
            return new Importprofile([
                'user_id'             => $dtadditional->info6.$row["customer"], 
                'user_type'           => $row["user_type"], 
                'area_type'           => $row["area_type"], 
                'area'                => $row["area"], 
                'sorg'                => $row["sorg"], 
                'customer'            => $row["customer"], 
                'soff'                => $row["soff"], 
                'name_1_usaha'        => $row["name_1_usaha"], 
                'cocd'                => $row["cocd"], 
                'nik'                 => $row["nik"], 
                'vat_registration_no' => $row["vat_registration_no"], 
                'street'              => $row["street"], 
                'kelurahan'           => $row["kelurahan"], 
                'postalcode'          => $row["postalcode"], 
                'telephone_1'         => $row["telephone_1"], 
                'e_mail_address'      => $row["e_mail_address"], 
                'cgrp'                => $row["cgrp"], 
                'alias'               => $row["alias"], 
                'tgl_lahir'           => $row["tgl_lahir"], 
                'tmpt_lahir'          => $row["tmpt_lahir"], 
                'agama'               => $row["agama"], 
                'gol_darah'           => $row["gol_darah"], 
                'oth_telp_hp_fax'     => $row["oth_telp_hp_fax"], 
                'medsos'              => $row["medsos"], 
                'hobby'               => $row["hobby"], 
                'bentuk_usaha'        => $row["bentuk_usaha"], 
                'nama_pribadi'        => $row["nama_pribadi"], 
                'status_usaha'        => $row["status_usaha"], 
                'code_cust_1'         => $row["code_cust1"], 
                'code_cust_2'         => $row["code_cust2"], 
                'code_cust_3'         => $row["code_cust3"], 
                'code_cust_4'         => $row["code_cust4"], 
                'code_cust_5'         => $row["code_cust5"], 
                'status_customer'     => $row["status_customer"], 
                'usercode'            => $usercode, 
                'uid'                 => Auth::user()->uid,
                'company'             => $company
            ]);
        }
    }

    public function headingRow(): int
    {
        return 4;
    }
}