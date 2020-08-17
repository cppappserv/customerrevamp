<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zbranch extends Model
{
    //
    protected $table = "zbranch";
    protected $primaryKey = null;
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
      'branchcode', 
      'desc', 
      'office1', 
      'office2'
    ];
}