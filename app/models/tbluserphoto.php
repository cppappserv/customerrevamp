<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbluserphoto extends Model
{
    //
  protected $table = "tbl_userphoto";
  public $timestamps = false;
  public $incrementing = false;
  protected $fillable = [
    'user_id', 
    'link',
    'zimage'
  ];
}