<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Address extends Model
{
    protected $fillable = [
        'user_id',  // integer 
        'name',     // varchar(50)
        'landmark', // varchar(200)
        'city',     // varchar(200)
        'pincode',  // 
        'state', 
        'country'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
