<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use database\seeders\PoststSeeder;
use database\seeders\UsertSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            //PoststSeeder::class,
            //UserstSeeder::class,
            ]);

            DB::table('cities')->insert([
				'города' => Str::random(10),
			]);

    }
}
