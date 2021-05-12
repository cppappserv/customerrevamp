<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zsdcusadd extends Model
{
    //
    protected $table = "zsd_cus_add";
    // protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'kodesap', 
      'npwp', 
      'tlpush', 
      'faxush', 
      'kontakush', 
      'hpush', 
      'hubunganush'
    ];
}