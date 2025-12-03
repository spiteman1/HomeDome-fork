<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'), // Ensure a password is set
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductMediaTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
