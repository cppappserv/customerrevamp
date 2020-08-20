<?php
namespace App\Imports;
 
use App\Models\Importprofile;
use Auth;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
 
class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
         if(count($row)>1) {
            return new Importprofile([
                'user_id'       => $row[0], 
                'kodesap'       => $row[1], 
                'noktp'         => $row[2], 
                'almtktp'       => $row[3], 
                'kelktp'        => $row[4], 
                'kecktp'        => $row[5], 
                'kotaktp'       => $row[6], 
                'propktp'       => $row[7], 
                'kdposktp'      => $row[8], 
                'almtrmh'       => $row[9], 
                'kelrmh'        => $row[10], 
                'kecrmh'        => $row[11], 
                'kotarmh'       => $row[12], 
                'proprmh'       => $row[13], 
                'kdposrmh'      => $row[14], 
                'tlppri'        => $row[15], 
                'faxpri'        => $row[16], 
                'hppri'         => $row[17], 
                'emailpri'      => $row[18], 
                'hobby'         => $row[19], 
                'namapsgn'      => $row[20], 
                'tmptlhrpsgn'   => $row[21], 
                'tgllhrpsgn'    => $row[22], 
                'btkush'        => $row[23], 
                'tipeush'       => $row[24], 
                'npwp'          => $row[25], 
                'status'        => $row[26], 
                'almtush'       => $row[27], 
                'kelush'        => $row[28], 
                'kecush'        => $row[29], 
                'kotaush'       => $row[30], 
                'propush'       => $row[31], 
                'kdposush'      => $row[32], 
                'tlpush'        => $row[33], 
                'faxush'        => $row[34], 
                'hpush'         => $row[35], 
                'emailush'      => $row[36], 
                'lmusaha'       => $row[37], 
                'karakteristik' => $row[38], 
                'namausaha'     => $row[39], 
                'namaalias'     => $row[40], 
                'agama'         => $row[41], 
                'goldarah'      => $row[42], 
                'headgrp'       => $row[43],
                'uid'           => Auth::user()->uid,
            ]);
        }
    }

    // public function headingRow(): int
    // {
    //     return 2;
    // }
}