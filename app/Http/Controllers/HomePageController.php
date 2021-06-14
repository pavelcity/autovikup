<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cource;
use App\Models\Tovary;
use App\Models\Blog;
use App\Models\Profile;
use App\Models\Seo; 
use App\Models\Meta;
use App\Models\Otzivy;
use App\Models\Metric;
use App\Models\Photogallery;
use App\Models\About;

class HomePageController extends Controller
{
 


	# index
	public function index()
	{
		$cources = Cource::take(3)->latest()->get();
		$tovars = Tovary::take(4)->latest()->get();
		$blogs = Blog::take(4)->latest()->get();
		$profile = Profile::first();
		$seo = Seo::first();
		$meta = Meta::first();
		$otzivs = Otzivy::get();
		$metric = Metric::first();
		$folios = Photogallery::get();
		$about = About::first();
		
		return view('pages.index', compact('cources', 'tovars', 'blogs', 'profile', 'seo', 'meta', 'otzivs', 'metric', 'folios', 'about'));
	}



 



	#
}
