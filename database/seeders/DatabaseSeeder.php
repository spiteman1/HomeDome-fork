<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {


        Schema::disableForeignKeyConstraints();


                $this->call([
                    UsersTableSeeder::class,
                    AddressesTableSeeder::class,
                    CategoriesTableSeeder::class,
                    ProductsTableSeeder::class,
                    ProductCategoryTableSeeder::class,
                    ProductMediaTableSeeder::class,
                    OrdersTableSeeder::class,
                    OrderItemsTableSeeder::class,
                    ReviewsTableSeeder::class,
                    SiteReviewsTableSeeder::class,
                    ShoppingBasketTableSeeder::class,
                    WishlistTableSeeder::class,


                ]);


                Schema::enableForeignKeyConstraints();
                $this->call(AddressesTableSeeder::class);
        $this->call(OrderItemsTableSeeder::class);
        $this->call(ShoppingBasketTableSeeder::class);
        $this->call(WishlistTableSeeder::class);
        $this->call(SiteReviewsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}


