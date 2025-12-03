<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'name' => 'Furniture',
                'slug' => 'furniture',
                'parent_id' => 1,
                'created_at' => '2025-11-24 19:42:39',
                'updated_at' => '2025-11-24 19:42:39',
            ),
            1 => 
            array (
                'category_id' => 2,
                'name' => 'Appliances',
                'slug' => 'appliances',
                'parent_id' => 2,
                'created_at' => '2025-11-24 19:42:39',
                'updated_at' => '2025-11-24 19:42:39',
            ),
            2 => 
            array (
                'category_id' => 3,
                'name' => 'Home Decor',
                'slug' => 'home-decor',
                'parent_id' => 3,
                'created_at' => '2025-11-24 19:42:39',
                'updated_at' => '2025-11-24 19:42:39',
            ),
            3 => 
            array (
                'category_id' => 4,
                'name' => 'Kitchen Ware',
                'slug' => 'kitchenware',
                'parent_id' => 4,
                'created_at' => '2025-11-24 19:42:39',
                'updated_at' => '2025-11-24 19:42:39',
            ),
            4 => 
            array (
                'category_id' => 5,
                'name' => 'Lighting',
                'slug' => 'lighting',
                'parent_id' => 5,
                'created_at' => '2025-11-24 19:42:39',
                'updated_at' => '2025-11-24 19:42:39',
            ),
        ));
        
        
    }
}