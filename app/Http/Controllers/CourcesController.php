<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cource;
use App\Models\Profile;
use App\Models\Seo;
use App\Models\Meta;

class CourcesController extends Controller
{

	#index 
	public function index()
	{
		$cources = Cource::latest()->get();
		$profile = Profile::first();
		$seo = Seo::first();
		$meta = Meta::first();
		return view('pages.cources.index', compact('cources', 'seo', 'meta', 'profile'));
	}



	#detail
	public function detail($slug)
	{
		$profile = Profile::first();
		$cource = Cource::where('slug', $slug)->firstOrFail();
		return view('pages.cources.detail', compact('cource', 'profile'));
	}






	#
}
