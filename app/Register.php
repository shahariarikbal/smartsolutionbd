<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function product(){
        return $this->belongsTo('App\Service');
    }
}
