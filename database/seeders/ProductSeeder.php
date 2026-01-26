<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Categories
        $categories = [
            'Appliances' => null,
            'Electronics' => null,
            'Home Decor' => null,
            'Kitchen' => 'Appliances',
            'Cleaning' => 'Appliances',
            'Furniture' => null,
            'Lighting' => null,
        ];

        $categoryIds = [];
        foreach ($categories as $name => $parentName) {
            $parentId = $parentName ? $categoryIds[$parentName] : null;

            // Check if category exists to avoid duplicates if not refreshing
            $existing = DB::table('categories')->where('name', $name)->first();
            if ($existing) {
                $id = $existing->id;
            } else {
                $id = DB::table('categories')->insertGetId([
                    'name' => $name,
                    'parent_id' => $parentId,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
            $categoryIds[$name] = $id;
        }

        // 2. Create Products
        $products = [
            [
                'id' => 1,
                'name' => 'Oak Dining Table',
                'sku' => '1',
                'price' => 249.99,
                'stock_quantity' => 10,
                'description' => 'Solid oak dining table for six people.',
                'dimensions' => '180x90x75 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Furniture',
                'images' => ['/images/productImages/Oak-Dining-Table.jpg'],
            ],
            [
                'id' => 2,
                'name' => 'Leather Sofa',
                'sku' => '2',
                'price' => 799.99,
                'stock_quantity' => 5,
                'description' => 'Comfortable 3-seater leather sofa.',
                'dimensions' => '200x85x90 cm',
                'energy_rating' => 'B',
                'is_available' => 1,
                'category' => 'Furniture',
                'images' => ['/images/productImages/Leather Sofa.jpg'],
            ],
            [
                'id' => 3,
                'name' => 'Wooden Bookshelf',
                'sku' => '3',
                'price' => 149.99,
                'stock_quantity' => 8,
                'description' => 'Five-tier wooden bookshelf with rustic finish.',
                'dimensions' => '80x30x180 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Furniture',
                'images' => ['/images/productImages/Wooden Bookshelf.jpg'],
            ],
            [
                'id' => 4,
                'name' => 'Office Chair',
                'sku' => '4',
                'price' => 119.99,
                'stock_quantity' => 12,
                'description' => 'Ergonomic office chair with adjustable height.',
                'dimensions' => '60x60x110 cm',
                'energy_rating' => 'B',
                'is_available' => 1,
                'category' => 'Furniture',
                'images' => ['/images/productImages/Office Chair.jpg'],
            ],
            [
                'id' => 5,
                'name' => 'Wardrobe',
                'sku' => '5',
                'price' => 499.99,
                'stock_quantity' => 3,
                'description' => 'Three-door wardrobe with mirror and drawers.',
                'dimensions' => '160x60x200 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Furniture',
                'images' => ['/images/productImages/Wardrobe.jpg'],
            ],
            [
                'id' => 6,
                'name' => 'Washing Machine',
                'sku' => '6',
                'price' => 399.99,
                'stock_quantity' => 7,
                'description' => '7kg front-load washing machine with energy-saving mode.',
                'dimensions' => '60x60x85 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'category' => 'Appliances',
                'images' => ['/images/productImages/Washing Machine.jpg'],
            ],
            [
                'id' => 7,
                'name' => 'Microwave Oven',
                'sku' => '7',
                'price' => 89.99,
                'stock_quantity' => 15,
                'description' => 'Compact microwave oven with grill function.',
                'dimensions' => '45x35x28 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Microwave Oven.jpg'],
            ],
            [
                'id' => 8,
                'name' => 'Refrigerator',
                'sku' => '8',
                'price' => 599.99,
                'stock_quantity' => 4,
                'description' => 'Double-door refrigerator with frost-free technology.',
                'dimensions' => '70x70x170 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Refrigerator.jpg'],
            ],
            [
                'id' => 9,
                'name' => 'Air Conditioner',
                'sku' => '9',
                'price' => 749.99,
                'stock_quantity' => 6,
                'description' => 'Energy-efficient split AC with remote control.',
                'dimensions' => 'Indoor: 90x30x22 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'category' => 'Appliances',
                'images' => ['/images/productImages/Air Conditioner.jpg'],
            ],
            [
                'id' => 10,
                'name' => 'Vacuum Cleaner',
                'sku' => '10',
                'price' => 129.99,
                'stock_quantity' => 9,
                'description' => 'Bagless vacuum cleaner with HEPA filter.',
                'dimensions' => '35x25x110 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Cleaning',
                'images' => ['/images/productImages/Vacuum Cleaner.jpg'],
            ],
            [
                'id' => 11,
                'name' => 'Wall Clock',
                'sku' => '11',
                'price' => 39.99,
                'stock_quantity' => 20,
                'description' => 'Minimalist wall clock with silent mechanism.',
                'dimensions' => '35x35x5 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Home Decor',
                'images' => ['/images/productImages/Wall Clock.jpg'],
            ],
            [
                'id' => 12,
                'name' => 'Area Rug',
                'sku' => '12',
                'price' => 99.99,
                'stock_quantity' => 10,
                'description' => 'Soft shag rug suitable for living rooms.',
                'dimensions' => '200x150 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Home Decor',
                'images' => ['/images/productImages/Area Rug.jpg'],
            ],
            [
                'id' => 13,
                'name' => 'Canvas Painting',
                'sku' => '13',
                'price' => 59.99,
                'stock_quantity' => 7,
                'description' => 'Abstract wall art printed on high-quality canvas.',
                'dimensions' => '120x80 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Home Decor',
                'images' => ['/images/productImages/Canvas Painting.jpg'],
            ],
            [
                'id' => 14,
                'name' => 'Decorative Mirror',
                'sku' => '14',
                'price' => 89.99,
                'stock_quantity' => 6,
                'description' => 'Round mirror with golden frame.',
                'dimensions' => '70x70x3 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Home Decor',
                'images' => ['/images/productImages/Decorative Mirror.jpg'],
            ],
            [
                'id' => 15,
                'name' => 'Indoor Plant Set',
                'sku' => '15',
                'price' => 49.99,
                'stock_quantity' => 12,
                'description' => 'Set of 3 artificial indoor plants with pots.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Home Decor',
                'images' => ['/images/productImages/Indoor Plant Set.jpg'],
            ],
            [
                'id' => 16,
                'name' => 'Cookware Set',
                'sku' => '16',
                'price' => 129.99,
                'stock_quantity' => 8,
                'description' => '10-piece non-stick cookware set.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Cookware Set.jpg'],
            ],
            [
                'id' => 17,
                'name' => 'Knife Block Set',
                'sku' => '17',
                'price' => 79.99,
                'stock_quantity' => 10,
                'description' => '6-piece stainless steel knife set with wooden block.',
                'dimensions' => '30x15x20 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Knife Block Set.jpg'],
            ],
            [
                'id' => 18,
                'name' => 'Glassware Set',
                'sku' => '18',
                'price' => 49.99,
                'stock_quantity' => 15,
                'description' => 'Set of 12 crystal drinking glasses.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Glassware Set.jpg'],
            ],
            [
                'id' => 19,
                'name' => 'Cutlery Set',
                'sku' => '19',
                'price' => 69.99,
                'stock_quantity' => 9,
                'description' => '24-piece stainless steel cutlery set.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Cutlery Set.jpg'],
            ],
            [
                'id' => 20,
                'name' => 'Mixing Bowl Set',
                'sku' => '20',
                'price' => 39.99,
                'stock_quantity' => 11,
                'description' => 'Set of 5 stainless steel mixing bowls.',
                'dimensions' => 'Varies',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Kitchen',
                'images' => ['/images/productImages/Mixing Bowl Set.jpg'],
            ],
            [
                'id' => 21,
                'name' => 'Table Lamp',
                'sku' => '21',
                'price' => 59.99,
                'stock_quantity' => 10,
                'description' => 'Modern bedside lamp with fabric shade.',
                'dimensions' => '20x20x45 cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Lighting',
                'images' => ['/images/productImages/Table Lamp.jpg'],
            ],
            [
                'id' => 22,
                'name' => 'Ceiling Light',
                'sku' => '22',
                'price' => 149.99,
                'stock_quantity' => 6,
                'description' => 'LED ceiling light suitable for living rooms.',
                'dimensions' => '50x50x10 cm',
                'energy_rating' => 'A++',
                'is_available' => 1,
                'category' => 'Lighting',
                'images' => ['/images/productImages/Ceiling Light.jpg'],
            ],
            [
                'id' => 23,
                'name' => 'Floor Lamp',
                'sku' => '23',
                'price' => 89.99,
                'stock_quantity' => 5,
                'description' => 'Adjustable floor lamp with reading light.',
                'dimensions' => '25x25x150 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'category' => 'Lighting',
                'images' => ['/images/productImages/Floor Lamp.jpg'],
            ],
            [
                'id' => 24,
                'name' => 'String Lights',
                'sku' => '24',
                'price' => 29.99,
                'stock_quantity' => 20,
                'description' => '10-meter warm white string lights for decoration.',
                'dimensions' => '10m',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Lighting',
                'images' => ['/images/productImages/String Lights.jpg'],
            ],
            [
                'id' => 25,
                'name' => 'Wall Sconce',
                'sku' => '25',
                'price' => 69.99,
                'stock_quantity' => 7,
                'description' => 'Vintage wall-mounted sconce with glass shade.',
                'dimensions' => '20x15x25 cm',
                'energy_rating' => 'A+',
                'is_available' => 1,
                'category' => 'Lighting',
                'images' => ['/images/productImages/Wall Sconce.jpg'],
            ],
            [
                'id' => 26,
                'name' => 'Robot Vacuum Cleaner',
                'sku' => 'HD-VAC-2024-005',
                'price' => 299.00,
                'stock_quantity' => 20,
                'description' => 'Smart robot vacuum with mapping technology and powerful suction. Keep your floors clean without lifting a finger.',
                'dimensions' => '35cm x 35cm x 9cm',
                'energy_rating' => 'A',
                'is_available' => 1,
                'category' => 'Cleaning',
                'model_file' => 'models/robot_vacuum_cleaner_low_poly.glb',
                'images' => [
                    '/images/productImages/RobotVacumeCleaner1.jpg',
                    '/images/productImages/RobotVacumeCleaner2.jpg',
                    '/images/productImages/RobotVacumeCleaner3.jpg',
                    '/images/productImages/RobotVacumeCleaner4.jpg',
                ],
            ],
        ];

        foreach ($products as $productData) {
            // Extract extra fields
            $categoryName = $productData['category'];
            $images = $productData['images'] ?? [];
            $productId = $productData['id'];
            $modelFile = $productData['model_file'] ?? null;

            unset($productData['category']);
            unset($productData['images']);
            unset($productData['model_file']);

            // Ensure timestamps
            $productData['created_at'] = Carbon::now();
            $productData['updated_at'] = Carbon::now();

            // Insert Product (Using insert to preserve ID)
            // Check if exists first to avoid duplicate key error if not refreshing
            $exists = DB::table('products')->where('id', $productId)->exists();
            if (!$exists) {
                DB::table('products')->insert($productData);
            } else {
                DB::table('products')->where('id', $productId)->update($productData);
            }

            // Link Category
            if (isset($categoryIds[$categoryName])) {
                // Remove existing links for this product to avoid duplicates
                DB::table('product_category')->where('product_id', $productId)->delete();

                DB::table('product_category')->insert([
                    'product_id' => $productId,
                    'category_id' => $categoryIds[$categoryName],
                ]);
            }

            // Add Images
            // Remove existing images for this product
            DB::table('product_media')->where('product_id', $productId)->delete();

            if (!empty($images)) {
                foreach ($images as $imageUrl) {
                    DB::table('product_media')->insert([
                        'product_id' => $productId,
                        'media_type' => 'image',
                        'url' => $imageUrl,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }

            // Add 3D Model
            if ($modelFile) {
                DB::table('product_media')->insert([
                    'product_id' => $productId,
                    'media_type' => '3D_MODEL',
                    'url' => $modelFile,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
            }
        }
    }
}
