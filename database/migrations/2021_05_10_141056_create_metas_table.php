<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
			$table->text('ogtitle')->nullable();
			$table->string('ogurl')->nullable();
			$table->string('ogimg')->nullable();
			$table->text('home_title')->nullable();
			$table->text('home_description')->nullable();
			$table->text('home_keywords')->nullable();
			$table->string('author')->nullable();
			$table->string('canonical')->nullable();
			
			
			$table->text('cource_title')->nullable();
			$table->text('cource_description')->nullable();
			$table->text('cource_keywords')->nullable();
			$table->text('cource_canonical')->nullable();
			$table->text('cource_avtor')->nullable();
			
			
			$table->text('tovary_title')->nullable();
			$table->text('tovary_description')->nullable();
			$table->text('tovary_keywords')->nullable();
			$table->text('tovary_canonical')->nullable();
			$table->text('tovary_avtor')->nullable();
			
			
			$table->text('about_title')->nullable();
			$table->text('about_description')->nullable();
			$table->text('about_keywords')->nullable();
			$table->text('about_canonical')->nullable();
			$table->text('about_avtor')->nullable();
			
			
			$table->text('contact_title')->nullable();
			$table->text('contact_description')->nullable();
			$table->text('contact_keywords')->nullable();
			$table->text('contact_canonical')->nullable();
			$table->text('contact_avtor')->nullable();
	
	
			$table->text('blog_title')->nullable();
			$table->text('blog_description')->nullable();
			$table->text('blog_keywords')->nullable();
			$table->text('blog_canonical')->nullable();
			$table->text('blog_avtor')->nullable();
	
	
	
	
			$table->text('politics_title')->nullable();
			$table->text('politics_description')->nullable();
			$table->text('politics_keywords')->nullable();
			$table->text('politics_canonical')->nullable();
			$table->text('politics_avtor')->nullable();
	
			$table->text('oplata_title')->nullable();
			$table->text('oplata_description')->nullable();
			$table->text('oplata_keywords')->nullable();
			$table->text('oplata_canonical')->nullable();
			$table->text('oplata_avtor')->nullable();
	
			$table->text('dostavka_title')->nullable();
			$table->text('dostavka_description')->nullable();
			$table->text('dostavka_keywords')->nullable();
			$table->text('dostavka_canonical')->nullable();
			$table->text('dostavka_avtor')->nullable();
	
			$table->text('vozvrat_title')->nullable();
			$table->text('vozvrat_description')->nullable();
			$table->text('vozvrat_keywords')->nullable();
			$table->text('vozvrat_canonical')->nullable();
			$table->text('vozvrat_avtor')->nullable();



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
        Schema::dropIfExists('metas');
    }
}
