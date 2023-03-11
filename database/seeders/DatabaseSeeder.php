<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         //\App\Models\Admin::factory(1)->create();

         \App\Models\Admin::factory()->create([
             'name' => 'Admin ',
             'username' =>'admin',
             'email' => 'admin@test.com',
         ]);
    }
}
