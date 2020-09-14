<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbllog extends Model
{
    //
   protected $table = "tbl_log1";
   public $timestamps = false;
   public $incrementing = false;
   protected $fillable = [
    'id', 
    'fid', 
    'uplid', 
    'filename', 
    'bpath', 
    'upltime', 
    'stime', 
    'etime', 
    'stat', 
    'prog', 
    'procid', 
    'row', 
    'log'
    ];
}
