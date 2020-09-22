<?php

namespace App\Exports;
use Auth;
use App\Models\Exportprofile;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use DB;

class CustomerExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    public function registerEvents(): array {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $cellRange = 'A1:AH1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function collection(){
        return DB::table('export_profile')->select(
            'user_id', 
            'user_type', 
            'area_type', 
            'area', 
            'sorg', 
            'customer', 
            'soff', 
            'name_1_usaha', 
            'cocd', 
            'nik', 
            'vat_registration_no', 
            'street', 
            'kelurahan', 
            'postalcode', 
            'telephone_1', 
            'e_mail_address', 
            'cgrp', 
            'alias', 
            'tgl_lahir', 
            'tmpt_lahir', 
            'agama', 
            'gol_darah', 
            'oth_telp_hp_fax', 
            'medsos', 
            'hobby', 
            'bentuk_usaha', 
            'nama_pribadi', 
            'status_usaha', 
            'code_cust_1', 
            'code_cust_2', 
            'code_cust_3', 
            'code_cust_4', 
            'code_cust_5', 
            'status_customer'
        ) 
        ->where('uid', '=', Auth::user()->uid)
        ->get();
    }

    public function headings(): array
    {
        return [
            'User ID',
            'User Type',
            'Area Type',
            'Area',
            'SOrg.',
            'Customer',
            'SOff.',
            'Name 1 / Usaha',
            'CoCd',
            'NIK',
            'VAT Registration No.',
            'Street',
            'Kelurahan',
            'PostalCode',
            'Telephone 1',
            'E-Mail Address',
            'CGrp',
            'Alias',
            'Tgl Lahir',
            'Tmpt Lahir',
            'Agama',
            'Gol. Darah',
            'Oth. Telp / HP / Fax',
            'Medsos',
            'Hobby',
            'Bentuk Usaha',
            'Nama Pribadi',
            'Status Usaha',
            'Code Cust.1',
            'Code Cust.2',
            'Code Cust.3',
            'Code Cust.4',
            'Code Cust.5',
            'Status Customer'
        ];
    }
}
