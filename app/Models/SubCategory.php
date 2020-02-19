<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable = ['name', 'category_id'];

    public function products()
    {
    	return $this->belongsToMany('App\Models\Product');
    }

    public function brands()
    {
    	return $this->belongsToMany('App\Models\Brand');
    }

    public function filters()
    {
    	return $this->belongsToMany('App\Models\Filter');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
