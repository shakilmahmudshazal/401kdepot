<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable
{
    //
    protected $guarded=[];

    public function verifyEmail()
	{
	  return $this->hasOne('App\verifyEmail');
	}
	 public function profilePic()
	{
	  return $this->hasOne('App\profilePic');
	}
	
	public function advisorBasicInfo()
	{
	  return $this->hasOne('App\advisorBasicInfo');
	}
}
