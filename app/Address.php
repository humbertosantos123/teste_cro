<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Address extends Model
{
    use SoftDeletes;

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    protected $table = 'addresses';

    protected $casts = [
        'id' => 'integer'
    ];



    protected $fillable = [
        'zip_code',
        'address',
        'number',
        'complement',
        'neighborhood',
        'city',
        'state'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
