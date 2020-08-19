<?php

namespace App\Imports;

use App\Models\Qrmplant;
use Maatwebsite\Excel\Concerns\ToModel;

class PlantImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Qrmplant([
            'plantname'    =>  $row[1],
            'plantkode'     =>  $row[2],
            'companycode'   =>  $row[3],
            'batchplant'   =>  $row[4],
            'changedby'   =>  $row[5],
        ]);
    }
}