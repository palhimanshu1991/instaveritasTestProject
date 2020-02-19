<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create records of category and subcategory
        factory(App\Models\Category::class, 3)->create()->each(function ($category){

            // Seed the relation with 5 sub categories
            $subcategories = factory(App\Models\SubCategory::class, 5)->make();
            $category->subcategories()->saveMany($subcategories);

        });

    }
}
