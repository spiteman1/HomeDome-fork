<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShoppingBasketTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shopping_basket')->delete();
        
        
        
    }
}