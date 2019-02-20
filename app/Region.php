<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}
