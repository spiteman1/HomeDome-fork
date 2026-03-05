<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            }
}
