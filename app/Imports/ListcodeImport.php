<?php

namespace App\Imports;

use App\Models\Qrmlistcodeimp;
use Maatwebsite\Excel\Concerns\ToModel;

class ListcodeImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (count($row) > 1 ){
            return new Qrmlistcodeimp([
                'urut'    =>  $row[0],
                'qrcode'     =>  $row[1],
            ]);
        }
    }
}
