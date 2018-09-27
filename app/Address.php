<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
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
