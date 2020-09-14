<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usrprofile extends Model
{
    //
   protected $table = "usr_profile";
  //  protected $primaryKey = null;
   public $timestamps = false;
   public $incrementing = false;
   protected $fillable = [
      'id',
      'user_id', 
      'kodesap', 
      'noktp', 
      'almtktp', 
      'kelktp', 
      'kecktp', 
      'kotaktp', 
      'propktp', 
      'kdposktp', 
      'almtrmh', 
      'kelrmh', 
      'kecrmh', 
      'kotarmh', 
      'proprmh', 
      'kdposrmh', 
      'tlppri', 
      'faxpri', 
      'hppri', 
      'emailpri', 
      'hobby', 
      'namapsgn', 
      'tmptlhrpsgn', 
      'tgllhrpsgn', 
      'btkush', 
      'tipeush', 
      'npwp', 
      'status', 
      'almtush', 
      'kelush', 
      'kecush', 
      'kotaush', 
      'propush', 
      'kdposush', 
      'tlpush', 
      'faxush', 
      'hpush', 
      'emailush', 
      'lmusaha', 
      'karakteristik', 
      'namausaha', 
      'namaalias', 
      'agama', 
      'goldarah', 
      'headgrp'
    ];
}
