<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use CitiesSeeder;
use CountriesSeeder;
use UserSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            CountriesSeeder::class,
            UserSeeder::class,
            CitiesSeeder::class,
        ]);
    }
}
