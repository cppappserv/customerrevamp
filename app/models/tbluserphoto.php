<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbluserphoto extends Model
{
    //
	protected $table = "tbl_userphoto";
  protected $fillable = [
    'user_id', 
    'link',
    'zimage'
  ];
}