<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pravila; 
use App\Models\Meta;

class PravilaController extends Controller
{
    
	#politics
	public function politics () {
		$pravila = Pravila::first();
		$meta = Meta::first();
		return view ('pages.pravila.polititcs', compact('pravila', 'meta'));
	}




	#oplata
	public function oplata () {
		$pravila = Pravila::first();
		$meta = Meta::first();
		return view ('pages.pravila.oplata', compact('pravila', 'meta'));
	}



	#oplata
	public function dostavka () {
		$pravila = Pravila::first();
		$meta = Meta::first();
		return view ('pages.pravila.dostavka', compact('pravila', 'meta'));
	}


	#vozvrat
	public function vozvrat () {
		$pravila = Pravila::first();
		$meta = Meta::first();
		return view ('pages.pravila.vozvrat', compact('pravila', 'meta'));
	}





	#
}
