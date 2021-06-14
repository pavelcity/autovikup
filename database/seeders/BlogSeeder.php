<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
	       [
		       'title' => 'Духи',
		       'slug' => '1',
		       'short' => 'Новый товар',
		       'descr' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio optio accusamus consequuntur modi excepturi, dolores cupiditate officia, fugit at distinctio consequatur amet, nam voluptatem consectetur! Eveniet nostrum sit non quam.'
	       ],
	       [
		       'title' => 'Скраб',
		       'slug' => '2',
		       'short' => 'Второй товар',
		       'descr' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio optio accusamus consequuntur modi excepturi, dolores cupiditate officia, fugit at distinctio consequatur amet, nam voluptatem consectetur! Eveniet nostrum sit non quam.'
	       ],
	       [
		       'title' => 'Шампунь',
		       'slug' => '3',
		       'short' => 'Третий товар',
		       'descr' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio optio accusamus consequuntur modi excepturi, dolores cupiditate officia, fugit at distinctio consequatur amet, nam voluptatem consectetur! Eveniet nostrum sit non quam.'
	       ],
	       [
		       'title' => 'Крем',
		       'slug' => '4',
		       'short' => 'Четвертый товар',
		       'descr' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio optio accusamus consequuntur modi excepturi, dolores cupiditate officia, fugit at distinctio consequatur amet, nam voluptatem consectetur! Eveniet nostrum sit non quam.'
	       ]
        ]);
    }
}
