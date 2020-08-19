<?php

namespace App\Exports;

use App\Models\Qrmplant;
use Maatwebsite\Excel\Concerns\FromCollection;

class PlantExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Qrmplant::all();
    }
}
