<?php

use Illuminate\Database\Seeder;

class SubCategoriesRelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Seed all the pivot tables connnected with subcategory in here.
            
            $subcategories = App\Models\SubCategory::all();

            // seed brand_subcategory
            App\Models\Brand::all()->each(function ($brand) use ($subcategories) { 
                $brand->subcategories()->attach(
                    $subcategories->random(rand(1, 5))->pluck('id')->toArray()
                ); 
            });


            // seed product_subcategory
            App\Models\Product::all()->each(function ($product) use ($subcategories) { 
                $product->subcategories()->attach(
                    $subcategories->random(rand(1, 5))->pluck('id')->toArray()
                ); 
            });


            // seed filter_subcategory
            App\Models\Filter::all()->each(function ($filter) use ($subcategories) { 
                $filter->subcategories()->attach(
                    $subcategories->random(rand(1, 5))->pluck('id')->toArray()
                ); 
            });
    }
}
