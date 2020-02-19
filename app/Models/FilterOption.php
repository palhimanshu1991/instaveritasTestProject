<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilterOption extends Model
{
    protected $fillable = ['name', 'filter_id'];

    public function products()
    {
    	return $this->belongsToMany('App\Models\Product');
    }

}
