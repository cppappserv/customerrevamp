<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbluserphotoadd extends Model
{
    //
  protected $table = "tbl_userphoto_add";
  public $timestamps = false;
  public $incrementing = false;
  protected $fillable = [
    'id', 
	'user_id', 
	'zimage', 
  'seq',
  'flag'
  ];
}