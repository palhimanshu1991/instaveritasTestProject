<?php

use Illuminate\Database\Seeder;

class ProductReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create records of category and subcategory
        factory(App\Models\Review::class, 50)->create();

    }
}
