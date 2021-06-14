<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

		protected $fillable = [
			'name',
			'subtitle',
			'pic',
			'shortonhome',
			'descronaboutpage',
			'fichaone',
			'fichaonetext',
			'fichatwo',
			'fichatwotext',
			'fichatri',
			'fichatritext',
			'descr',
		];
}
