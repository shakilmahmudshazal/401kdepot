<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class verifyEmail extends Model
{
    //
    protected $guarded=[];

    public function user()
    {
        return $this->belongsTo('App\user');
    }
}
