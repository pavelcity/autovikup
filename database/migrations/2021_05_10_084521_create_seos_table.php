<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seos', function (Blueprint $table) {
            $table->id(); 
						$table->string('homepage_title')->nullable();
						$table->text('homepage_txt')->nullable();
						$table->string('courcepage_title')->nullable();
						$table->text('courcepage_txt')->nullable();
						$table->string('tovarypage_title')->nullable();
						$table->text('tovarypage_txt')->nullable();
						$table->string('blogpage_title')->nullable();
						$table->text('blogpage_txt')->nullable();

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
        Schema::dropIfExists('seos');
    }
}
