<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotogalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photogalleries', function (Blueprint $table) {
            $table->id();
						$table->string('pic')->nullable();
						$table->string('pic_one')->nullable();
						$table->string('pic_two')->nullable();
						$table->string('pic_tri')->nullable();
						$table->string('pic_four')->nullable();
						$table->string('pic_five')->nullable();
						$table->string('pic_six')->nullable();
						$table->string('title')->nullable();
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
        Schema::dropIfExists('photogalleries');
    }
}
