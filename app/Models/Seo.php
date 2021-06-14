<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
 
		protected $fillable = [
			'homepage_title',
			'homepage_txt',
			'courcepage_title',
			'courcepage_txt',
			'tovarypage_title',
			'tovarypage_txt',
			'blogpage_title',
			'blogpage_txt'
		];
}
