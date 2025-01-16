<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'jun@gamil.com',
            'password' => bcrypt('admin'),
            'role' => 'admin',   
         ]);

         User::create([
            'name' => 'user1',
            'email' => 'jin@gamil.com',
            'password' => bcrypt('user1'),
            'role' => 'user1',   
         ]);
         
         User::create([
            'name' => 'user2',
            'email' => 'jan@gamil.com',
            'password' => bcrypt('user2'),
            'role' => 'user2',   
         ]);
    }
}
