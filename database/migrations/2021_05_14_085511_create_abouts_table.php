<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
						$table->string('name')->nullable();
						$table->string('subtitle')->nullable();
						$table->string('pic')->nullable();
						$table->text('shortonhome')->nullable();
						$table->text('descronaboutpage')->nullable();
						$table->string('fichaone')->nullable();
						$table->text('fichaonetext')->nullable();
						$table->string('fichatwo')->nullable();
						$table->text('fichatwotext')->nullable();
						$table->string('fichatri')->nullable();
						$table->text('fichatritext')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
