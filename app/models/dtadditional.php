<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dtadditional extends Model
{
    //
    protected $table = "dt_additional";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'type', 
      'seq', 
      'desc', 
      'info', 
      'info2', 
      'info3', 
      'info4', 
      'parent', 
      'display', 
      'info5'
    ];
}