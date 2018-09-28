<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Director extends Model
{
    use SoftDeletes;

    protected $table = 'directors';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $casts = [
        'id' => 'integer'
    ];

    //relations
    public function movies(){
        return $this->hasMany(Movie::class);
    }
}
