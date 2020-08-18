<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usradditional extends Model
{
    //
    protected $table = "usr_additional";
    // protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
        'id',
      	'user_id', 
        'type', 
        'sseq', 
        'seq', 
        'desc', 
        'value1', 
        'value2', 
        'value3', 
        'value4', 
        'flag', 
        'value5', 
        'value6', 
        'value7'
    ];
}