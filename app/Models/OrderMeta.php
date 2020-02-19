<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderMeta extends Model
{
    protected $fillable = ['order_id', 'name_on_card', 'payment_gateway', 'success', 'error'];

    public function order()
    {
    	return $this->belongsTo('App\Order');
    }

}
