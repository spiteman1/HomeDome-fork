<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('reviews')->delete();
        
        \DB::table('reviews')->insert(array (
            0 => 
            array (
                'id' => 26,
                'product_id' => 1,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Beautiful and sturdy, fits the dining room perfectly.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            1 => 
            array (
                'id' => 27,
                'product_id' => 1,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Easy to clean and looks elegant.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            2 => 
            array (
                'id' => 28,
                'product_id' => 2,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Super comfy and looks luxurious.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            3 => 
            array (
                'id' => 29,
                'product_id' => 2,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Perfect for relaxing after work.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            4 => 
            array (
                'id' => 30,
                'product_id' => 2,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Nice texture, quality leather feel.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            5 => 
            array (
                'id' => 31,
                'product_id' => 3,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Strong shelves and great rustic vibe.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            6 => 
            array (
                'id' => 32,
                'product_id' => 4,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Comfortable for long work sessions.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            7 => 
            array (
                'id' => 33,
                'product_id' => 4,
                'user_id' => 4,
                'rating' => 4,
                'review_text' => 'Good value for money.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            8 => 
            array (
                'id' => 34,
                'product_id' => 5,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Looks stylish, good mirror finish.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            9 => 
            array (
                'id' => 35,
                'product_id' => 5,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Slightly tricky to assemble but solid.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            10 => 
            array (
                'id' => 36,
                'product_id' => 6,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Silent and energy efficient.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            11 => 
            array (
                'id' => 37,
                'product_id' => 7,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Compact, heats evenly.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            12 => 
            array (
                'id' => 38,
                'product_id' => 7,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Very easy to use.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            13 => 
            array (
                'id' => 39,
                'product_id' => 8,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Spacious and keeps food fresh.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            14 => 
            array (
                'id' => 40,
                'product_id' => 9,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Cools quickly, remote works great.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            15 => 
            array (
                'id' => 41,
                'product_id' => 9,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Really energy efficient.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            16 => 
            array (
                'id' => 42,
                'product_id' => 10,
                'user_id' => 4,
                'rating' => 4,
                'review_text' => 'Suction is strong but a bit noisy.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            17 => 
            array (
                'id' => 43,
                'product_id' => 11,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Silent ticking and minimalist design.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            18 => 
            array (
                'id' => 44,
                'product_id' => 11,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Looks classy on the wall.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            19 => 
            array (
                'id' => 45,
                'product_id' => 12,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'So soft, feels great underfoot.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            20 => 
            array (
                'id' => 46,
                'product_id' => 13,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Colors are vibrant and rich.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            21 => 
            array (
                'id' => 47,
                'product_id' => 13,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Looks exactly like in the photos.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            22 => 
            array (
                'id' => 48,
                'product_id' => 14,
                'user_id' => 4,
                'rating' => 4,
                'review_text' => 'Adds charm to my hallway.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            23 => 
            array (
                'id' => 49,
                'product_id' => 15,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Looks real and adds color to my space.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            24 => 
            array (
                'id' => 50,
                'product_id' => 15,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Love these plants, low maintenance too!',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            25 => 
            array (
                'id' => 51,
                'product_id' => 16,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Durable and non-stick surface is great.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            26 => 
            array (
                'id' => 52,
                'product_id' => 17,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Sharp and stylish block design.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            27 => 
            array (
                'id' => 53,
                'product_id' => 17,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Perfect for any kitchen.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            28 => 
            array (
                'id' => 54,
                'product_id' => 18,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Crystal clear glasses, great for parties.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            29 => 
            array (
                'id' => 55,
                'product_id' => 18,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Nice weight and shape.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            30 => 
            array (
                'id' => 56,
                'product_id' => 19,
                'user_id' => 4,
                'rating' => 4,
                'review_text' => 'Elegant and durable.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            31 => 
            array (
                'id' => 57,
                'product_id' => 20,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Very handy and easy to store.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            32 => 
            array (
                'id' => 58,
                'product_id' => 20,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Decent quality for the price.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            33 => 
            array (
                'id' => 59,
                'product_id' => 21,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Soft warm light, ideal for reading.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            34 => 
            array (
                'id' => 60,
                'product_id' => 21,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Looks great on my nightstand.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            35 => 
            array (
                'id' => 61,
                'product_id' => 22,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Bright and modern design.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            36 => 
            array (
                'id' => 62,
                'product_id' => 23,
                'user_id' => 3,
                'rating' => 4,
                'review_text' => 'Adjustable height is really useful.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            37 => 
            array (
                'id' => 63,
                'product_id' => 23,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Nice warm light for reading.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            38 => 
            array (
                'id' => 64,
                'product_id' => 24,
                'user_id' => 4,
                'rating' => 5,
                'review_text' => 'Perfect ambiance lighting for my balcony.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            39 => 
            array (
                'id' => 65,
                'product_id' => 24,
                'user_id' => 2,
                'rating' => 5,
                'review_text' => 'Beautiful glow, very cozy.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            40 => 
            array (
                'id' => 66,
                'product_id' => 24,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Exactly what I wanted for decorations.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            41 => 
            array (
                'id' => 67,
                'product_id' => 25,
                'user_id' => 3,
                'rating' => 5,
                'review_text' => 'Gorgeous design and soft lighting.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
            42 => 
            array (
                'id' => 68,
                'product_id' => 25,
                'user_id' => 2,
                'rating' => 4,
                'review_text' => 'Adds a vintage touch to my living room.',
                'submission_date' => '2025-11-25',
                'is_approved' => 1,
                'created_at' => '2025-12-03 16:42:38',
                'updated_at' => '2025-12-03 16:42:38',
            ),
        ));
        
        
    }
}