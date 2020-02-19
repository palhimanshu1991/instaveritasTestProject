<?php

namespace App\Http\Transformers;

use App\Models\Product;
use App\Models\Brand;
use App\Models\Filter;
use App\Models\SubCategory;
use Illuminate\Support\Collection;
use App\Transformers\Transformer;
use Illuminate\Database\Eloquent\Model;

class ProductTransform extends Transformer
{
	
	public function transform($product)
	{
		return [
				'products' =>  [
					            	'id'    => $product->id,
					                'name'  => $product->name,
					                'image' => $product->image,
					                'detail' => $product->detail,
					                'description' => $product->description,
					                'extra_image' => $product->extra_images,
					                'rating'      => $product->averageRating(),
				            	],
				            	
				'reviews' => $product->reviews->transform(function($review) {
					            return [
					            	'id'   => $review->id,
					                'description' => $review->description,
					            ];
					         }),
       			 ];
	}

}