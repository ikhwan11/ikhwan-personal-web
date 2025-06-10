<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
            'name' => 'Tommy Suhendra',
            'slug' => 'tommy-suhendra',
            'about_user' => 'Seorang profesional di bidang teknologi dan desain kreatif yang berfokus pada pengembangan sistem, e-commerce, website company profile, serta desain grafis. Ia menghadirkan solusi digital yang menggabungkan estetika visual dengan fungsionalitas teknologi untuk membantu bisnis tumbuh dan tampil lebih profesional di era digital.',
            'username' => 'admin',
            'password' => Hash::make('123123'),
            'image' => 'users/BX9ZpLUC8RvkWja46cTPosFWka9nIVlXIqZEP3Nc.jpg',
        ]);
    }
}
