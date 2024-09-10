<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);

        Department::create(['name' => 'Laravel']);
    }
}
