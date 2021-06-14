<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			[
				'name' => 'memeadmin',
				'email' => 'memeadmin@me.ru',
				'password' => bcrypt('09870987')
			],
			[
				'name' => 'менеджер',
				'email' => 'manager@a.ru',
				'password' => bcrypt('443322')
			]
		]);
	}
}
