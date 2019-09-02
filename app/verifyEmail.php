<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifyEmail extends Model
{
    //
    protected $guarded=[];

    public function advisorLogin()
    {
        return $this->belongsTo('App\advisorLogin');
    }
}
