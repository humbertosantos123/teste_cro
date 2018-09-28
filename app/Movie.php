<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;

    protected $table = 'movies';

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    const arrayRating = [1,2,3,4,5];

    protected $casts = [
        'id' => 'integer'
    ];

    public function director(){
        return $this->belongsTo(Director::class);
    }
}
