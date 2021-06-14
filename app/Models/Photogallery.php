<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photogallery extends Model
{
    use HasFactory;


		protected $fillable = [
			'pic',
			'pic_one',
			'pic_two',
			'pic_tri',
			'pic_four',
			'pic_five',
			'pic_six',
			'title'
		];
}
