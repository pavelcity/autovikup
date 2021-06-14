<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePravilasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pravilas', function (Blueprint $table) {
            $table->id();
						$table->text('politics')->nullable();
						$table->text('oplata')->nullable();
						$table->text('dostavka')->nullable();
						$table->text('vozvrat')->nullable();
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
        Schema::dropIfExists('pravilas');
    }
}
