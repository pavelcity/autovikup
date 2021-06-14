<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otzivy extends Model
{
    use HasFactory;

		protected $fillable = [
			'pic',
			'title',
			'dolznost',
			'text',
			'active'
		];
}
