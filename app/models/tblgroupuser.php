<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblgroupuser extends Model
{
    //
    protected $table = "tblgroupuser";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'idusergroup', 
	    'namegroup'
    ];
}