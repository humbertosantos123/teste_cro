<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    protected $table = 'directors';

    protected $casts = [
        'id' => 'integer'
    ];

    //relations
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
