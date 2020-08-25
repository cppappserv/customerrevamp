<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tbluser extends Model
{
    //
  protected $table = "tbluser";
  protected $primaryKey = 'uid';
  public $timestamps = false;
  public $incrementing = false;
    protected $fillable = [
      'uid', 
      'user_id', 
      'password', 
      'fullname', 
      'birthplace', 
      'birthdate', 
      'userdesc', 
      'usergroup', 
      'createddate', 
      'updateddate', 
      'createdby', 
      'updatedby', 
      'lastsync', 
      'locked', 
      'lockcount', 
      'passwd_date', 
      'email', 
      'email2', 
      'tracehost', 
      'company', 
      'sess_forgot', 
      'forgot_stat', 
      'macaddress', 
      'nik', 
      'branch', 
      'validfrom', 
      'validto', 
      'statnew', 
      'flag', 
      'imei', 
      'office', 
      'phone1', 
      'phone2', 
      'svisorid', 
      'svisorname', 
      'creatorid', 
      'lastchangeby', 
      'ldap', 
      'inactive'
    ];
}