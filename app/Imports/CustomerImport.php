<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            'nama'    =>  $row[1],
            'sex'     =>  $row[2],
            'title'   =>  $row[3],
            'cgroup'  =>  $row[4],
            'phone'   =>  $row[5],
            'ctype'   =>  $row[6],
            'kecam'   =>  $row[7],
            'kota'    =>  $row[8],
            'alamat'  =>  $row[9],
            'email'   =>  $row[10],
            'adrbook' =>  $row[11],
        ]);
    }
}
