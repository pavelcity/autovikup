<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\Meta;

class ContactController extends Controller
{
    

	#index
	public function index () {
		$profile = Profile::first();
		$meta = Meta::first();
		return view ('pages.contact.index', compact('profile', 'meta'));
	}





	#
}
