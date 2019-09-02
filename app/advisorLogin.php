<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class advisorLogin extends Model
{
    //
    protected $guarded=[];

    public function verifyEmail()
	{
	  return $this->hasOne('App\VerifyEmail');
	}

}
