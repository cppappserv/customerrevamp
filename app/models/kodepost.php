<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kodepost extends Model
{
    //
	protected $table = "tbl_kodepos";
    protected $fillable = [
      'id', 
	'kelurahan', 
	'kecamatan', 
	'kabupaten', 
	'provinsi', 
	'kodepos'
    ];
}