<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'detail', 'description', 'image', 'extra_images', 'quantity', 'brand_id', 'featured'];

    public function subcategories()
    {
    	return $this->belongsToMany('App\Models\SubCategory');
    }

    public function filteroptions()
    {
    	return $this->belongsToMany('App\Modles\FilterOption');
    }

    public function reviews()
    {
    	return $this->hasMany('App\Models\Review');
    }

    public function brand()
    {
    	return $this->belongsTo('App\Models\Brand');
    }

    public function averageRating()
    {
        $count = $this->reviews()->count();

        if(empty($count))
        {
            return 0;
        }

        $starCountSum = $this->reviews()->sum('rating');
        $average = $starCountSum/$this->reviews()->count();

        $average = round($average, 1);

        return $average;
    }
}
