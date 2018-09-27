<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    protected $casts = [
        'id' => 'integer'
    ];

    public function director(){
        return $this->belongsTo(Director::class);
    }
}
