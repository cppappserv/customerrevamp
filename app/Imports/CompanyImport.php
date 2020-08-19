<?php

namespace App\Imports;

use App\Models\Qrmcompany;
use Maatwebsite\Excel\Concerns\ToModel;

class CompanyImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Qrmcompany([
            'companycode'    =>  $row[1],
            'companyname'     =>  $row[2],
            'changedby'   =>  $row[3],
        ]);
    }
}
