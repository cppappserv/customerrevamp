<?php
namespace App\Imports;
 
use App\Models\Importprofile;
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
        return new Importprofile([
            'user_id'       => $row[1], 
            'kodesap'       => $row[2], 
            'noktp'         => $row[3], 
            'almtktp'       => $row[4], 
            'kelktp'        => $row[5], 
            'kecktp'        => $row[6], 
            'kotaktp'       => $row[7], 
            'propktp'       => $row[8], 
            'kdposktp'      => $row[9], 
            'almtrmh'       => $row[10], 
            'kelrmh'        => $row[11], 
            'kecrmh'        => $row[12], 
            'kotarmh'       => $row[13], 
            'proprmh'       => $row[14], 
            'kdposrmh'      => $row[15], 
            'tlppri'        => $row[16], 
            'faxpri'        => $row[17], 
            'hppri'         => $row[18], 
            'emailpri'      => $row[19], 
            'hobby'         => $row[20], 
            'namapsgn'      => $row[21], 
            'tmptlhrpsgn'   => $row[22], 
            'tgllhrpsgn'    => $row[23], 
            'btkush'        => $row[24], 
            'tipeush'       => $row[25], 
            'npwp'          => $row[26], 
            'status'        => $row[27], 
            'almtush'       => $row[28], 
            'kelush'        => $row[29], 
            'kecush'        => $row[30], 
            'kotaush'       => $row[31], 
            'propush'       => $row[32], 
            'kdposush'      => $row[33], 
            'tlpush'        => $row[34], 
            'faxush'        => $row[35], 
            'hpush'         => $row[36], 
            'emailush'      => $row[37], 
            'lmusaha'       => $row[38], 
            'karakteristik' => $row[39], 
            'namausaha'     => $row[40], 
            'namaalias'     => $row[41], 
            'agama'         => $row[42], 
            'goldarah'      => $row[43], 
            'headgrp'       => $row[44]
        ]);
    }
}