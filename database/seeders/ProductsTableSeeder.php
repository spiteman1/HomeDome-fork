<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'product_id' => 1,
                'name' => 'Oak Dining Table',
                'sku' => '1',
                'price' => '249.99',
                'stock_quantity' => 10,
                'description' => 'Solid oak dining table for six people.',
                'dimensions' => '180x90x75 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            1 => 
            array (
                'product_id' => 2,
                'name' => 'Leather Sofa',
                'sku' => '2',
                'price' => '799.99',
                'stock_quantity' => 5,
                'description' => 'Comfortable 3-seater leather sofa.',
                'dimensions' => '200x85x90 cm',
                'energy_rating' => 'B',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            2 => 
            array (
                'product_id' => 3,
                'name' => 'Wooden Bookshelf',
                'sku' => '3',
                'price' => '149.99',
                'stock_quantity' => 8,
                'description' => 'Five-tier wooden bookshelf with rustic finish.',
                'dimensions' => '80x30x180 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            3 => 
            array (
                'product_id' => 4,
                'name' => 'Office Chair',
                'sku' => '4',
                'price' => '119.99',
                'stock_quantity' => 12,
                'description' => 'Ergonomic office chair with adjustable height.',
                'dimensions' => '60x60x110 cm',
                'energy_rating' => 'B',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            4 => 
            array (
                'product_id' => 5,
                'name' => 'Wardrobe',
                'sku' => '5',
                'price' => '499.99',
                'stock_quantity' => 3,
                'description' => 'Three-door wardrobe with mirror and drawers.',
                'dimensions' => '160x60x200 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            5 => 
            array (
                'product_id' => 6,
                'name' => 'Washing Machine',
                'sku' => '6',
                'price' => '399.99',
                'stock_quantity' => 7,
                'description' => '7kg front-load washing machine with energy-saving mode.',
                'dimensions' => '60x60x85 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            6 => 
            array (
                'product_id' => 7,
                'name' => 'Microwave Oven',
                'sku' => '7',
                'price' => '89.99',
                'stock_quantity' => 15,
                'description' => 'Compact microwave oven with grill function.',
                'dimensions' => '45x35x28 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            7 => 
            array (
                'product_id' => 8,
                'name' => 'Refrigerator',
                'sku' => '8',
                'price' => '599.99',
                'stock_quantity' => 4,
                'description' => 'Double-door refrigerator with frost-free technology.',
                'dimensions' => '70x70x170 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            8 => 
            array (
                'product_id' => 9,
                'name' => 'Air Conditioner',
                'sku' => '9',
                'price' => '749.99',
                'stock_quantity' => 6,
                'description' => 'Energy-efficient split AC with remote control.',
                'dimensions' => 'Indoor: 90x30x22 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            9 => 
            array (
                'product_id' => 10,
                'name' => 'Vacuum Cleaner',
                'sku' => '10',
                'price' => '129.99',
                'stock_quantity' => 9,
                'description' => 'Bagless vacuum cleaner with HEPA filter.',
                'dimensions' => '35x25x110 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            10 => 
            array (
                'product_id' => 11,
                'name' => 'Wall Clock',
                'sku' => '11',
                'price' => '39.99',
                'stock_quantity' => 20,
                'description' => 'Minimalist wall clock with silent mechanism.',
                'dimensions' => '35x35x5 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            11 => 
            array (
                'product_id' => 12,
                'name' => 'Area Rug',
                'sku' => '12',
                'price' => '99.99',
                'stock_quantity' => 10,
                'description' => 'Soft shag rug suitable for living rooms.',
                'dimensions' => '200x150 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            12 => 
            array (
                'product_id' => 13,
                'name' => 'Canvas Painting',
                'sku' => '13',
                'price' => '59.99',
                'stock_quantity' => 7,
                'description' => 'Abstract wall art printed on high-quality canvas.',
                'dimensions' => '120x80 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            13 => 
            array (
                'product_id' => 14,
                'name' => 'Decorative Mirror',
                'sku' => '14',
                'price' => '89.99',
                'stock_quantity' => 6,
                'description' => 'Round mirror with golden frame.',
                'dimensions' => '70x70x3 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            14 => 
            array (
                'product_id' => 15,
                'name' => 'Indoor Plant Set',
                'sku' => '15',
                'price' => '49.99',
                'stock_quantity' => 12,
                'description' => 'Set of 3 artificial indoor plants with pots.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            15 => 
            array (
                'product_id' => 16,
                'name' => 'Cookware Set',
                'sku' => '16',
                'price' => '129.99',
                'stock_quantity' => 8,
                'description' => '10-piece non-stick cookware set.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            16 => 
            array (
                'product_id' => 17,
                'name' => 'Knife Block Set',
                'sku' => '17',
                'price' => '79.99',
                'stock_quantity' => 10,
                'description' => '6-piece stainless steel knife set with wooden block.',
                'dimensions' => '30x15x20 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            17 => 
            array (
                'product_id' => 18,
                'name' => 'Glassware Set',
                'sku' => '18',
                'price' => '49.99',
                'stock_quantity' => 15,
                'description' => 'Set of 12 crystal drinking glasses.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            18 => 
            array (
                'product_id' => 19,
                'name' => 'Cutlery Set',
                'sku' => '19',
                'price' => '69.99',
                'stock_quantity' => 9,
                'description' => '24-piece stainless steel cutlery set.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            19 => 
            array (
                'product_id' => 20,
                'name' => 'Mixing Bowl Set',
                'sku' => '20',
                'price' => '39.99',
                'stock_quantity' => 11,
                'description' => 'Set of 5 stainless steel mixing bowls.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            20 => 
            array (
                'product_id' => 21,
                'name' => 'Table Lamp',
                'sku' => '21',
                'price' => '59.99',
                'stock_quantity' => 10,
                'description' => 'Modern bedside lamp with fabric shade.',
                'dimensions' => '20x20x45 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            21 => 
            array (
                'product_id' => 22,
                'name' => 'Ceiling Light',
                'sku' => '22',
                'price' => '149.99',
                'stock_quantity' => 6,
                'description' => 'LED ceiling light suitable for living rooms.',
                'dimensions' => '50x50x10 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            22 => 
            array (
                'product_id' => 23,
                'name' => 'Floor Lamp',
                'sku' => '23',
                'price' => '89.99',
                'stock_quantity' => 5,
                'description' => 'Adjustable floor lamp with reading light.',
                'dimensions' => '25x25x150 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            23 => 
            array (
                'product_id' => 24,
                'name' => 'String Lights',
                'sku' => '24',
                'price' => '29.99',
                'stock_quantity' => 20,
                'description' => '10-meter warm white string lights for decoration.',
                'dimensions' => '10m',
                'energy_rating' => 'A',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
            24 => 
            array (
                'product_id' => 25,
                'name' => 'Wall Sconce',
                'sku' => '25',
                'price' => '69.99',
                'stock_quantity' => 7,
                'description' => 'Vintage wall-mounted sconce with glass shade.',
                'dimensions' => '20x15x25 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'created_at' => '2025-11-24 17:57:15',
                'updated_at' => '2025-11-24 17:57:15',
            ),
        ));
        
        
    }
}