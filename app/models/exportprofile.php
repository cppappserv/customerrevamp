<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exportprofile extends Model
{
    //
   protected $table = "export_profile";
   public $timestamps = false;
   public $incrementing = false;
   protected $fillable = [
      'id', 
      'user_id', 
      'user_type', 
      'area_type', 
      'area', 
      'sorg', 
      'customer', 
      'soff', 
      'name_1_usaha', 
      'cocd', 
      'nik', 
      'vat_registration_no', 
      'street', 
      'kelurahan', 
      'postalcode', 
      'telephone_1', 
      'e_mail_address', 
      'cgrp', 
      'alias', 
      'tgl_lahir', 
      'tmpt_lahir', 
      'agama', 
      'gol_darah', 
      'oth_telp_hp_fax', 
      'medsos', 
      'hobby', 
      'bentuk_usaha', 
      'nama_pribadi', 
      'status_usaha', 
      'code_cust_1', 
      'code_cust_2', 
      'code_cust_3', 
      'code_cust_4', 
      'code_cust_5', 
      'status_customer', 
      'usercode',
      'uid'
    ];
}
