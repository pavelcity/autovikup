<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('blogs', function (Blueprint $table) {
			$table->id();
			$table->string('metatitle')->nullable();
			$table->text('metadescr')->nullable();
			$table->text('metakeys')->nullable();
			
			$table->string('pic')->nullable();
			$table->string('author')->nullable();
			$table->string('avatar_author')->nullable();
			$table->string('title');
			$table->string('slug')->nullable();
			$table->text('short')->nullable();
			$table->text('descr')->nullable();
			$table->string('photos')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('blogs');
	}
}
