<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product', function () {
    // Sample product data matching database schema
    $product = (object) [
        'id' => 1,
        'name' => 'Premium French Door Refrigerator',
        'sku' => 'HD-REF-2024-001',
        'price' => 899.99,
        'stock_quantity' => 15,
        'description' => 'Experience the perfect blend of style and functionality with this premium French door refrigerator. Designed with cutting-edge technology and energy efficiency in mind, this appliance delivers exceptional performance while reducing your environmental footprint. Features include advanced temperature control, spacious interior design with flexible storage options, and smart connectivity that allows you to monitor and control your refrigerator from anywhere.',
        'dimensions' => '185cm x 60cm x 65cm',
        'energy_rating' => 'A++',
        'is_available' => true,
        'category' => 'Kitchen Appliances',
        'subcategory' => 'Refrigerators',
        // Media from product_media table
        'media' => [
            (object) ['media_type' => 'image', 'url' => 'images/productImages/Refrigerator.jpg'],
            (object) ['media_type' => 'image', 'url' => 'images/productImages/Microwave Oven.jpg'],
            (object) ['media_type' => 'image', 'url' => 'images/productImages/Washing Machine.jpg'],
            (object) ['media_type' => '3D_MODEL', 'url' => 'models/washing_machine.glb'],
        ],
        // Reviews data
        'reviews' => [
            (object) [
                'rating' => 5,
                'review_text' => 'Excellent product! Highly recommend. This appliance exceeded all my expectations. The build quality is outstanding, and it operates incredibly quietly.',
                'submission_date' => '2024-11-15',
                'user' => (object) ['name' => 'Sarah M.']
            ],
            (object) [
                'rating' => 4,
                'review_text' => 'Great value for money. Very satisfied with this purchase. The design is sleek and modern, fitting perfectly in my kitchen.',
                'submission_date' => '2024-11-10',
                'user' => (object) ['name' => 'James P.']
            ],
            (object) [
                'rating' => 5,
                'review_text' => 'Perfect addition to our home. We\'ve had this for three weeks now and couldn\'t be happier. The energy savings are real.',
                'submission_date' => '2024-11-05',
                'user' => (object) ['name' => 'Emily R.']
            ],
        ]
    ];

    // Calculate average rating from reviews
    $totalRating = 0;
    foreach ($product->reviews as $review) {
        $totalRating += $review->rating;
    }
    $product->average_rating = count($product->reviews) > 0 ? round($totalRating / count($product->reviews), 1) : 0;

    return view('product', ['product' => $product]);
});

Route::get('show/{rid}', [ProductController::class, 'show']);
