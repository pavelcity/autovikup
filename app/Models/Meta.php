<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meta extends Model
{
    use HasFactory;
 
		protected $fillable = [
			'ogtitle',
			'ogurl',
			'ogimg',
			'home_title',
			'home_description',
			'home_keywords',
			'author',
			'canonical',

			'cource_title',
			'cource_description',
			'cource_keywords',
			'cource_canonical',
			'cource_avtor',

			'tovary_title',
			'tovary_description',
			'tovary_keywords',
			'tovary_canonical',
			'tovary_avtor',

			'about_title',
			'about_description',
			'about_keywords',
			'about_canonical',
			'about_avtor',

			'contact_title',
			'contact_description',
			'contact_keywords',
			'contact_canonical',
			'contact_avtor',
			
			'blog_title',
			'blog_description',
			'blog_keywords',
			'blog_canonical',
			'contact_avtor',





			'politics_title',
			'politics_description',
			'politics_keywords',
			'politics_canonical',
			'politics_avtor',


			'oplata_title',
			'oplata_description',
			'oplata_keywords',
			'oplata_canonical',
			'oplata_avtor',



			'dostavka_title',
			'dostavka_description',
			'dostavka_keywords',
			'dostavka_canonical',
			'dostavka_avtor',



			'vozvrat_title',
			'vozvrat_description',
			'vozvrat_keywords',
			'vozvrat_canonical',
			'vozvrat_avtor'

		];
}
