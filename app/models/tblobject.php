<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblobject extends Model
{
    //
    protected $table = "tblobject";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'idobj', 
      'idobjparent', 
      'objname', 
      'objtype', 
      'desc', 
      'Code'
    ];
}