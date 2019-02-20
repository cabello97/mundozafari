<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
