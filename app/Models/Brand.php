<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public function products()
    {
    	return $this->hasMany('App\Models\Product', 'brand_id');
    }

    public function subcategories()
    {
    	return $this->belongsToMany('App\Models\SubCategory');
    }
}
