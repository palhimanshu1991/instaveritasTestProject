<?php

use Illuminate\Database\Seeder;

class FiltersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create records of brands and products
        factory(App\Models\Filter::class, 4)->create()->each(function ($filter) {
            
            // Seed the relation 
            $filteroptions = factory(App\Models\FilterOption::class, 8)->make();
            $filter->filteroptions()->saveMany($filteroptions);
        });
    }
}
