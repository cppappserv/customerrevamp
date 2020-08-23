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
                $cellRange = 'A1:AR1'; // All headers
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }

    public function collection(){
        return DB::table('export_profile')->select(
            'user_id', 
            'kodesap', 
            'noktp', 
            'almtktp', 
            'kelktp', 
            'kecktp', 
            'kotaktp', 
            'propktp', 
            'kdposktp', 
            'almtrmh', 
            'kelrmh', 
            'kecrmh', 
            'kotarmh', 
            'proprmh', 
            'kdposrmh', 
            'tlppri', 
            'faxpri', 
            'hppri', 
            'emailpri', 
            'hobby', 
            'namapsgn', 
            'tmptlhrpsgn', 
            'tgllhrpsgn', 
            'btkush', 
            'tipeush', 
            'npwp', 
            'status', 
            'almtush', 
            'kelush', 
            'kecush', 
            'kotaush', 
            'propush', 
            'kdposush', 
            'tlpush', 
            'faxush', 
            'hpush', 
            'emailush', 
            'lmusaha', 
            'karakteristik', 
            'namausaha', 
            'namaalias', 
            'agama', 
            'goldarah', 
            'headgrp'
        ) 
        ->where('uid', '=', Auth::user()->uid)
        ->get();
    }

    public function headings(): array
    {
        return [
            'user_id', 
            'kodesap', 
            'noktp', 
            'almtktp', 
            'kelktp', 
            'kecktp', 
            'kotaktp', 
            'propktp', 
            'kdposktp', 
            'almtrmh', 
            'kelrmh', 
            'kecrmh', 
            'kotarmh', 
            'proprmh', 
            'kdposrmh', 
            'tlppri', 
            'faxpri', 
            'hppri', 
            'emailpri', 
            'hobby', 
            'namapsgn', 
            'tmptlhrpsgn', 
            'tgllhrpsgn', 
            'btkush', 
            'tipeush', 
            'npwp', 
            'status', 
            'almtush', 
            'kelush', 
            'kecush', 
            'kotaush', 
            'propush', 
            'kdposush', 
            'tlpush', 
            'faxush', 
            'hpush', 
            'emailush', 
            'lmusaha', 
            'karakteristik', 
            'namausaha', 
            'namaalias', 
            'agama', 
            'goldarah', 
            'headgrp'
        ];
    }
}
