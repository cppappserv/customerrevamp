<?php

namespace App\Exports;

use App\Models\Qrmcompany;
use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Qrmcompany::all();
    }
}
