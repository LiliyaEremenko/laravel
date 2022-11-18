<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	
	class UsersController extends Controller
	{
		public function show() {
			$user = DB::table('userst')
			->get();
			return view('show', ['user' => $user]);
		}
	}