<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Test User',
                'email' => 'test@example.com',
                'email_verified_at' => '2025-12-02 12:48:12',
                'password' => '$2y$12$LaQMyOCvWlLCU4bf6USJu.ra86RKVnUbOb/cCXc7SXxEys4/eIul6',
                'remember_token' => '8XAi4klE6k',
                'created_at' => '2025-12-02 12:48:12',
                'updated_at' => '2025-12-02 12:48:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Spite Man',
                'email' => 'spiteman@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$HUxaFDjZ4M8BOSEmZGsnn.0DfJGxh6v1satBYihXlpnhe95PICvPq',
                'remember_token' => NULL,
                'created_at' => '2025-12-03 16:35:27',
                'updated_at' => '2025-12-03 16:35:27',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'John Doe',
                'email' => 'jd@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$XZ8KmKu7e9cXNMtD4/bk7OdGnlCX6XVk9ZlHy3HEJVcSNE9kbCmZS',
                'remember_token' => NULL,
                'created_at' => '2025-12-03 16:36:49',
                'updated_at' => '2025-12-03 16:36:49',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Mary Jane',
                'email' => 'mj@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$12$4HP35rk/TLc0P6KOkyHmAuFZEW9/iUtDTroLrlB2Jna5yVq9pVCia',
                'remember_token' => NULL,
                'created_at' => '2025-12-03 16:37:27',
                'updated_at' => '2025-12-03 16:37:27',
            ),
        ));
        
        
    }
}