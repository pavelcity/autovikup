<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meta;
use App\Models\Profile;
use App\Models\Certificate;
use App\Models\About;

class AboutController extends Controller
{
    
	#index
	public function index () {
		$meta = Meta::first();
		$profile = Profile::first();
		$certificates = Certificate::get();
		$about = About::first();
		return view ('pages.about.index', compact('meta', 'profile', 'certificates', 'about'));
	}






	#
}
