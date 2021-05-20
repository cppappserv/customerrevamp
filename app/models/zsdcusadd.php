<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class zsdcusadd extends Model
{
    protected $table = "zsdcusadd";
    protected $fillable = [
      'kodesap', 
      'headgrp', 
      'npwp', 
      'tlpush', 
      'faxush', 
      'kontakush', 
      'hpush', 
      'hubunganush', 
      'nama_sap'
    ];
}

