<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	
	class PostController extends Controller
	{
		public function show()
		{
            DB::enableQueryLog();
			DB::table('postst')->where('age', 30)->get();
            dump(DB::getQueryLog());
	}
}