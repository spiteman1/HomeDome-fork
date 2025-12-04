<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_category')->delete();
        
        \DB::table('product_category')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'category_id' => 1,
            ),
            1 => 
            array (
                'product_id' => 2,
                'category_id' => 1,
            ),
            2 => 
            array (
                'product_id' => 3,
                'category_id' => 1,
            ),
            3 => 
            array (
                'product_id' => 4,
                'category_id' => 1,
            ),
            4 => 
            array (
                'product_id' => 5,
                'category_id' => 1,
            ),
            5 => 
            array (
                'product_id' => 6,
                'category_id' => 2,
            ),
            6 => 
            array (
                'product_id' => 7,
                'category_id' => 2,
            ),
            7 => 
            array (
                'product_id' => 8,
                'category_id' => 2,
            ),
            8 => 
            array (
                'product_id' => 9,
                'category_id' => 2,
            ),
            9 => 
            array (
                'product_id' => 10,
                'category_id' => 2,
            ),
            10 => 
            array (
                'product_id' => 11,
                'category_id' => 3,
            ),
            11 => 
            array (
                'product_id' => 12,
                'category_id' => 3,
            ),
            12 => 
            array (
                'product_id' => 13,
                'category_id' => 3,
            ),
            13 => 
            array (
                'product_id' => 14,
                'category_id' => 3,
            ),
            14 => 
            array (
                'product_id' => 15,
                'category_id' => 3,
            ),
            15 => 
            array (
                'product_id' => 16,
                'category_id' => 4,
            ),
            16 => 
            array (
                'product_id' => 17,
                'category_id' => 4,
            ),
            17 => 
            array (
                'product_id' => 18,
                'category_id' => 4,
            ),
            18 => 
            array (
                'product_id' => 19,
                'category_id' => 4,
            ),
            19 => 
            array (
                'product_id' => 20,
                'category_id' => 4,
            ),
            20 => 
            array (
                'product_id' => 21,
                'category_id' => 5,
            ),
            21 => 
            array (
                'product_id' => 22,
                'category_id' => 5,
            ),
            22 => 
            array (
                'product_id' => 23,
                'category_id' => 5,
            ),
            23 => 
            array (
                'product_id' => 24,
                'category_id' => 5,
            ),
            24 => 
            array (
                'product_id' => 25,
                'category_id' => 5,
            ),
        ));
        
        
    }
}