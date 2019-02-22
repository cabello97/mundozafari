<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name', 'scientific', 'photo', 'description','habitat','region','feeding',
    ];

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
}
