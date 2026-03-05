<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SiteReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('site_reviews')->delete();
        
        \DB::table('site_reviews')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'rating' => 2,
                'review_text' => 'Splendid app indeed',
                'is_approved' => 0,
                'created_at' => '2026-02-28 16:32:26',
                'updated_at' => '2026-02-28 16:32:26',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'rating' => 1,
                'review_text' => 'a bit slow',
                'is_approved' => 0,
                'created_at' => '2026-02-28 16:35:14',
                'updated_at' => '2026-02-28 16:35:14',
            ),
        ));
        
        
    }
}