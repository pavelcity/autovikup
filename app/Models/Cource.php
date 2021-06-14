<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Cource extends Model
{
	use HasFactory;
	use Sluggable;

	public function sluggable(): array
	{
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}



	protected $fillable = [
		'metatitle',
		'metadescr',
		'metakeys',

		'title',
		'slug',
		'pic',
		'short',
		'descr',

		'avatar',
		'name_spiker',
		'subtitle_spiker',
		'text_spiker',
		'price',
	];





	#
}
