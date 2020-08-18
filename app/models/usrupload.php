<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usrupload extends Model
{
    //
    protected $table = "usr_upload";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'id', 
      'filename', 
      'file_status', 
      'upload_time', 
      'proses_time', 
      'proses_row', 
      'uploadby'
    ];
}