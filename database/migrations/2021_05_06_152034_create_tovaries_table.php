<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTovariesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tovaries', function (Blueprint $table) {
			$table->id();
			$table->string('metatitle')->nullable();
			$table->text('metadescr')->nullable();
			$table->text('metakeys')->nullable();

			$table->string('pic')->nullable(); 
			$table->string('title');
			$table->string('slug')->nullable();
			$table->string('price')->nullable();
			$table->string('brand')->nullable();
			$table->text('descr')->nullable();
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
		Schema::dropIfExists('tovaries');
	}
}
