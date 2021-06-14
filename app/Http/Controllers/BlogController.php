<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Profile;
use App\Models\Seo;
use App\Models\Meta;

class BlogController extends Controller
{



	#index
	public function index()
	{
		$blogs = Blog::latest()->get();
		$profile = Profile::first();
		$seo = Seo::first();
		$meta = Meta::first();
		return view('pages.blog.index', compact('blogs', 'seo', 'meta', 'profile'));
	}



	#detail
	public function detail($slug)
	{
		$blog = Blog::where('slug', $slug)->firstOrFail();
		$profile = Profile::first();
		return view('pages.blog.detail', compact('blog', 'profile'));
	}



 



	#
}
