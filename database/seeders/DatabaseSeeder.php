<?php

namespace Database\Seeders;

use App\Models\Seeder as SeederModel;
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
      if (!SeederModel::where('name', UserSeeder::class)->exists()) {
        $this->call(UserSeeder::class);
        SeederModel::create(['name' => UserSeeder::class]);
      }
    }
}
