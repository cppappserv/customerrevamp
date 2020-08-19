<?php

namespace App\Imports;

use App\Cimport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Cimport([
            //
            'name'    =>  $row["name"],
            'sex'     =>  $row["sex"],
            'title'   =>  $row["title"],
            'cgroup'  =>  $row["cgroup"],
            'phone'   =>  $row["phone"],
            'ctype'   =>  $row["ctype"],
            'kecam'   =>  $row["kecam"],
            'kota'    =>  $row["kota"],
            'alamat'  =>  $row["alamat"],
            'email'   =>  $row["email"],
        ]);
    }
}
