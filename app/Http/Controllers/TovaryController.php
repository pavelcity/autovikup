<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tovary;
use App\Models\Profile;
use App\Models\Seo;
use App\Models\Meta;

class TovaryController extends Controller
{

	#index
	public function index()
	{
		$tovars = Tovary::latest()->get();
		$profile = Profile::first();
		$seo = Seo::first();
		$meta = Meta::first();
		return view('pages.tovari.index', compact('tovars', 'seo', 'meta', 'profile'));
	}



	#detail
	public function detail($slug)
	{
		$tovar = Tovary::where('slug', $slug)->firstOrFail();
		$profile = Profile::first();
		return view('pages.tovari.detail', compact('tovar', 'profile'));
	}




	#
}
