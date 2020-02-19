<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    protected $fillable = ['name'];

    public function filteroptions()
    {
    	return $this->hasMany('App\Models\FilterOption');
    }

    public function subcategories()
    {
    	return $this->belongsToMany('App\Models\SubCategory');
    }
}
