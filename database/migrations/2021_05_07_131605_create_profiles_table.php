<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function (Blueprint $table) {
			$table->id();
			$table->string('title');
			$table->mediumText('text_utp')->nullable();
			$table->string('pic_utp')->nullable();

			$table->string('about_title')->nullable();
			$table->text('about_subtitle')->nullable();

			$table->string('cources_title')->nullable();
			$table->text('cources_subtitle')->nullable();

			$table->string('cifres_title')->nullable();
			$table->text('cifres_subtitle')->nullable();

			$table->string('blog_title')->nullable();
			$table->text('blog_subtitle')->nullable();

			$table->string('tovary_title')->nullable();
			$table->text('tovary_subtitle')->nullable();

			$table->string('portfolio_title')->nullable();
			$table->text('portfolio_subtitle')->nullable();

			$table->string('otzivy_title')->nullable();
			$table->text('otzivy_subtitle')->nullable();

			$table->string('contacty_title')->nullable();
			$table->text('contacty_subtitle')->nullable();

			$table->string('cifry_title')->nullable();

			$table->string('one_cifry_title')->nullable();
			$table->string('one_cifry_text')->nullable();
			$table->string('two_cifry_title')->nullable();
			$table->string('two_cifry_text')->nullable();
			$table->string('tri_cifry_title')->nullable();
			$table->string('tri_cifry_text')->nullable();
			$table->string('four_cifry_title')->nullable();
			$table->string('four_cifry_text')->nullable();

			$table->string('phone')->nullable();
			$table->string('email')->nullable();
			$table->string('instagram')->nullable();
			$table->string('vk')->nullable();
			$table->string('facebook')->nullable();
			$table->string('youtube')->nullable();

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
		Schema::dropIfExists('profiles');
	}
}
