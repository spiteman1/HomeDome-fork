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
        ];

        $categoryIds = [];
        foreach ($categories as $name => $parentName) {
            $parentId = $parentName ? $categoryIds[$parentName] : null;

            $id = DB::table('categories')->insertGetId([
                'name' => $name,
                'parent_id' => $parentId,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            $categoryIds[$name] = $id;
        }

        // 2. Create Products
        $products = [
            [
                'name' => 'Premium French Door Refrigerator',
                'sku' => 'HD-REF-2024-001',
                'price' => 899.99,
                'stock_quantity' => 15,
                'description' => 'Experience the perfect blend of style and functionality with this premium French door refrigerator. Features include advanced temperature control and spacious interior.',
                'dimensions' => '185cm x 60cm x 65cm',
                'energy_rating' => 'A++',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'model_file' => 'models/french_door_refrigerator_-_stainless.glb',
                'category' => 'Kitchen',
                'images' => ['images/productImages/Refrigerator.jpg'],
            ],
            [
                'name' => 'Smart Front Load Washer',
                'sku' => 'HD-WSH-2024-002',
                'price' => 549.50,
                'stock_quantity' => 8,
                'description' => 'High-efficiency front load washer with steam cycle and smart connectivity. Gentle on clothes while providing a deep clean.',
                'dimensions' => '85cm x 60cm x 55cm',
                'energy_rating' => 'A+++',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'model_file' => 'models/washing_machine.glb',
                'category' => 'Cleaning',
                'images' => ['images/productImages/Washing Machine.jpg'],
            ],
            [
                'name' => 'Convection Microwave Oven',
                'sku' => 'HD-MW-2024-003',
                'price' => 129.99,
                'stock_quantity' => 25,
                'description' => 'Versatile convection microwave oven for baking, grilling, and reheating. Compact design fits perfectly in any kitchen.',
                'dimensions' => '30cm x 50cm x 40cm',
                'energy_rating' => 'A',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'model_file' => null,
                'category' => 'Kitchen',
                'images' => ['images/productImages/Microwave Oven.jpg'],
            ],
            [
                'name' => '4K Smart LED TV 55"',
                'sku' => 'HD-TV-2024-004',
                'price' => 450.00,
                'stock_quantity' => 10,
                'description' => 'Immersive 4K viewing experience with vibrant colors and smart TV features. Stream your favorite shows with ease.',
                'dimensions' => '123cm x 71cm x 6cm',
                'energy_rating' => 'A+',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'model_file' => 'models/samsung_55_curved_tv_and_remote.glb',
                'category' => 'Electronics',
                'images' => [], // No specific image found in list, using placeholder logic below if empty
            ],
            [
                'name' => 'Robot Vacuum Cleaner',
                'sku' => 'HD-VAC-2024-005',
                'price' => 299.00,
                'stock_quantity' => 20,
                'description' => 'Smart robot vacuum with mapping technology and powerful suction. Keep your floors clean without lifting a finger.',
                'dimensions' => '35cm x 35cm x 9cm',
                'energy_rating' => 'A',
                'is_available' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'model_file' => 'models/robot_vacuum_cleaner_low_poly.glb',
                'category' => 'Cleaning',
                'images' => [
                    'images/productImages/RobotVacumeCleaner1.jpg',
                    'images/productImages/RobotVacumeCleaner2.jpg',
                    'images/productImages/RobotVacumeCleaner3.jpg',
                    'images/productImages/RobotVacumeCleaner4.jpg',
                ],
            ],
        ];

        foreach ($products as $productData) {
            // Extract extra fields
            $modelFile = $productData['model_file'];
            $categoryName = $productData['category'];
            $images = $productData['images'] ?? [];

            unset($productData['model_file']);
            unset($productData['category']);
            unset($productData['images']);

            $productId = DB::table('products')->insertGetId($productData);

            // Link Category
            if (isset($categoryIds[$categoryName])) {
                DB::table('product_category')->insert([
                    'product_id' => $productId,
                    'category_id' => $categoryIds[$categoryName],
                ]);
            }

            // Add Images
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
            } else {
                // Default placeholder if no images provided
                DB::table('product_media')->insert([
                    'product_id' => $productId,
                    'media_type' => 'image',
                    'url' => 'images/productImages/placeholder.jpg',
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
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

            // Add Reviews
            $numReviews = rand(1, 3);
            for ($i = 0; $i < $numReviews; $i++) {
                $userId = DB::table('users')->inRandomOrder()->value('id');

                if ($userId) {
                    DB::table('reviews')->insert([
                        'product_id' => $productId,
                        'user_id' => $userId,
                        'rating' => rand(3, 5),
                        'review_text' => 'This is a sample review for the product. It works great!',
                        'submission_date' => Carbon::now()->subDays(rand(1, 30)),
                        'is_approved' => true,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }
        }
    }
}
