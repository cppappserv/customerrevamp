<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loglogin extends Model
{
    //
  protected $table = "log_login";
  //  public $timestamps = false;
  //  public $incrementing = false;
  protected $fillable = [
    'id', 
    'email', 
    'Latitude', 
    'Longitude', 
    'created_dt', 
    'updated_at'
  ];
}
