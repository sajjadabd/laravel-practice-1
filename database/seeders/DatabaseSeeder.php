<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use \App\Models\User;
use \App\Models\Post;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $user1 = User::create([
          'name' => 'sajjad',
          'email' => 'mynameissajjad@gmail.com',
          'password' => Hash::make('password'),
        ]);

        

        $user2 = User::create([
          'name' => 'ali',
          'email' => 'ali@gmail.com',
          'password' => Hash::make('password'),
        ]);



        Post::create([
          'content' => 'sample post 1' ,
          'user_id' => $user1->id,
        ]);


        Post::create([
          'content' => 'sample post 2' ,
          'user_id' => $user2->id,
        ]);
        
    }
}
