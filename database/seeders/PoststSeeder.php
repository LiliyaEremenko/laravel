<?php
	namespace Database\Seeders;
	
	use Illuminate\Database\Console\Seeds\WithoutModelEvents;
	use Illuminate\Database\Seeder;
	use Illuminate\Support\Str;
	
	class PostsSeeder extends Seeder
	{
		public function run()
		{
            DB::table('postst')->insert([
				'title' => Str::random(10),
				'slug' => Str::random(10),
				'likes' => '42',
			]);
		}
	}
?>