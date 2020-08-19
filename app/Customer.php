<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
	protected $table = "mst_customer";
        protected $fillable = ['nama','phone','ctype','cgroup','kecam','kota','email','sex','title','adrbook','alamat'];
}
