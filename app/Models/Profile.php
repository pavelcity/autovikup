<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
	use HasFactory;

 


	protected $fillable = [
		'title',
		'text_utp',
		'pic_utp',
 
		'about_title',
		'about_subtitle',

		'cources_title',
		'cources_subtitle',

		'cifres_title',
		'cifres_subtitle',

		'blog_title',
		'blog_subtitle',

		'tovary_title',
		'tovary_subtitle',

		'portfolio_title',
		'portfolio_subtitle',

		'otzivy_title',
		'otzivy_subtitle',

		'contacty_title',
		'contacty_subtitle',

 

		'one_cifry_title',
		'one_cifry_text',

		'two_cifry_title',
		'two_cifry_text',

		'tri_cifry_title',
		'tri_cifry_text',

		'four_cifry_title',
		'four_cifry_text',

		'phone',
		'email',


		'instagram',
		'vk',
		'facebook',
		'youtube',
	]; 




	#
}
