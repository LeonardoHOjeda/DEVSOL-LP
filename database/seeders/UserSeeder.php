<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
          'name' => 'Admin',
          'email' => 'leoprogramador20@gmail.com',
          'password' => bcrypt('d3vs0luti0n5'),
        ]);
    }
}
