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

        User::factory()->create([
            'name' => 'Angelina Jolie',
            'about_user' => 'admin asdasddasd',
            'username' => 'admin',
            'password' => Hash::make('123123'),
            'image' => 'users/wOeGYXChJS9WOEqRsvCNjzTSFXCBRmCJaUXIpYXP.jpg',
        ]);
    }
}
