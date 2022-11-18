<?php
	namespace Database\Seeders;
	
	use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	use Illuminate\Database\Seeder;
	use Illuminate\Support\Str;
	
	class UserstSeeder extends Seeder
	{
		public function run()
		{
            DB::table('userst')->insert([
				'name' => Str::random(10),
				'email' => Str::random(10).'@gmail.com',
				'age' => '42',
                'salary' -> '500',
			]);
		}
	}
?>