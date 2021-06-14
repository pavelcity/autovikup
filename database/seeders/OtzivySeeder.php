<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class OtzivySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('otzivies')->insert([
	       [
		       'title' => 'Вероника',
		       'dolznost' => 'Покупатель',
		       'text' => 'Все просто класс'
	       ],
	       [
		       'title' => 'Сергей',
		       'dolznost' => 'Успешный бизнесмен',
		       'text' => 'Великолепно'
	       ],
	       [
		       'title' => 'Анна Сергеевна',
		       'dolznost' => 'Бьюти косметолог',
		       'text' => 'Очень хороший товар. Рекомендую'
	       ]
	       
        ]);
    }
}
