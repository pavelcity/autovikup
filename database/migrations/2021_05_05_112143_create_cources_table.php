<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourcesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cources', function (Blueprint $table) {
			$table->id();
			$table->string('metatitle')->nullable();
			$table->text('metadescr')->nullable();
			$table->text('metakeys')->nullable();

			$table->string('title');
			$table->string('slug')->nullable();
			$table->string('pic')->nullable();
			$table->mediumText('short')->nullable();
			$table->text('descr')->nullable();
			$table->string('avatar')->nullable();
			$table->string('name_spiker')->nullable();
			$table->string('subtitle_spiker')->nullable();
			$table->text('text_spiker')->nullable();
			$table->string('price')->nullable();
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
		Schema::dropIfExists('cources');
	}
}
