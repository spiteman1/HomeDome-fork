<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'order_date' => '2026-02-04',
                'total_amount' => '249.99',
                'status' => 'Pending',
                'created_at' => '2026-02-04 01:39:21',
                'updated_at' => '2026-02-04 01:39:21',
            ),
        ));
        
        
    }
}