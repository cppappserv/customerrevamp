<?php

namespace App\Exports;

use App\Models\Qrxtxhistoryexcel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use DB;

class QrxtxhistoryExport implements FromCollection, WithHeadings
{

    public function collection()
    {
        return Qrxtxhistoryexcel::all();
    }
    
    public function headings(): array
    {
        return [
            'Plnt',
            'Trx Type',
            'QR Code',
            'Material',
            'Batch',
            'Ref Number',
            'Prod Date',
            'Source SLoc',
            'Destination SLoc',
            'Stock type',
            'Destination SType',
            'User Name',
            'Doc Number',
            'Status',
            'Created Date',
            'Time',
            'Qty'
        ];
    }
}