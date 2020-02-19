<?php

use Illuminate\Database\Seeder;

class ProductsRelationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get array of ids
            
            $products = App\Models\Product::all();

            // brand_subcategory
            App\Models\FilterOption::all()->each(function ($filteroption) use ($products) { 
                $filteroption->products()->attach(
                    $products->random(rand(1, 3))->pluck('id')->toArray()
                ); 
            });
    }
}
