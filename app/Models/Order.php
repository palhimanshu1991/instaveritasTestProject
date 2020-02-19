<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'email', 'phone', 'address_id', 'type', 'discount', 'discount_code', 'tax', 'subtotal', 'total'];

    public function products()
    {
    	return $this->belongsToMany('App\Product')->withPivot('quantity');
    }

    public function order_metas()
    {
    	return $this->hasMany('App\OrderMeta');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
