<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usradditional extends Model
{
    //
	protected $table = "usr_additional";
    protected $fillable = [
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