<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create records of brands and products
        factory(App\Models\Brand::class, 5)->create()->each(function ($brand) {
            
            // Seed the relation 
            $products = factory(App\Models\Product::class, 20)->make();
            $brand->products()->saveMany($products);
        });
    }
}
