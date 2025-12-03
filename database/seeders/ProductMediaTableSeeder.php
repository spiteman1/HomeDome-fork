<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductMediaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_media')->delete();
        
        \DB::table('product_media')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'media_type' => 'image',
                'url' => '/images/productImages/Oak-Dining-Table.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'media_type' => 'image',
                'url' => '/images/productImages/Leather Sofa.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 3,
                'media_type' => 'image',
                'url' => '/images/productImages/Wooden Bookshelf.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 4,
                'media_type' => 'image',
                'url' => '/images/productImages/Office Chair.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 5,
                'media_type' => 'image',
                'url' => '/images/productImages/Wardrobe.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 6,
                'media_type' => 'image',
                'url' => '/images/productImages/Washing Machine.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 7,
                'media_type' => 'image',
                'url' => '/images/productImages/Microwave Oven.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 8,
                'media_type' => 'image',
                'url' => '/images/productImages/Refrigerator.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 9,
                'media_type' => 'image',
                'url' => '/images/productImages/Air Conditioner.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 10,
                'media_type' => 'image',
                'url' => '/images/productImages/Vacuum Cleaner.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 11,
                'media_type' => 'image',
                'url' => '/images/productImages/Wall Clock.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 12,
                'media_type' => 'image',
                'url' => '/images/productImages/Area Rug.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 13,
                'media_type' => 'image',
                'url' => '/images/productImages/Canvas Painting.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 14,
                'media_type' => 'image',
                'url' => '/images/productImages/Decorative Mirror.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 15,
                'media_type' => 'image',
                'url' => '/images/productImages/Indoor Plant Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 16,
                'media_type' => 'image',
                'url' => '/images/productImages/Cookware Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 17,
                'media_type' => 'image',
                'url' => '/images/productImages/Knife Block Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 18,
                'media_type' => 'image',
                'url' => '/images/productImages/Glassware Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 19,
                'media_type' => 'image',
                'url' => '/images/productImages/Cutlery Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 20,
                'media_type' => 'image',
                'url' => '/images/productImages/Mixing Bowl Set.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 21,
                'media_type' => 'image',
                'url' => '/images/productImages/Table Lamp.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 22,
                'media_type' => 'image',
                'url' => '/images/productImages/Ceiling Light.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 23,
                'media_type' => 'image',
                'url' => '/images/productImages/Floor Lamp.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 24,
                'media_type' => 'image',
                'url' => '/images/productImages/String Lights.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 25,
                'media_type' => 'image',
                'url' => '/images/productImages/Wall Sconce.jpg',
                'created_at' => '2025-11-24 20:00:19',
                'updated_at' => '2025-11-24 20:00:19',
            ),
        ));
        
        
    }
}