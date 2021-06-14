<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tovary extends Model
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

		'pic',
		'title',
		'slug',
		'price',
		'brand',
		'descr'
	];
}
