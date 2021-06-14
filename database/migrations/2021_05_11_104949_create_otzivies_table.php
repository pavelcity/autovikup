<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtziviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otzivies', function (Blueprint $table) {
            $table->id();
						$table->string('pic')->nullable();
						$table->string('title');
						$table->string('dolznost')->nullable();
						$table->text('text')->nullable();
						$table->integer('active')->default(1);
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
        Schema::dropIfExists('otzivies');
    }
}
