<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tblfile extends Model
{
    //
    protected $table = "tbl_file";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'fid', 
      'ids', 
      'desc', 
      'format', 
      'tblname', 
      'type'
    ];
}