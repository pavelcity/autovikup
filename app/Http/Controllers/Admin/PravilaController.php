<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pravila;

class PravilaController extends Controller
{


    
	#index
	public function index () {
		$pravilas = Pravila::latest()->get();
		return view ('admin.pavila.index', compact('pravilas'));
	}




	#create
	public function create () {
		return view ('admin.pavila.create');
	}




	#store
	public function store (Request $request) {
		$this->validate($request, [
			'politics' => 'nullable',
			'oplata' => 'nullable',
			'dostavka' => 'nullable',
			'vozvrat' => 'nullable',
		]);

		$pravila = new Pravila;

		$pravila->politics = $request->politics;
		$pravila->oplata = $request->oplata;
		$pravila->dostavka = $request->dostavka;
		$pravila->vozvrat = $request->vozvrat;

		$pravila->save();

		return redirect()->route('dashboard.pravila.home');
	} 






	#edit
	public function edit ($id) {
		$pravila = Pravila::find($id);
		return view ('admin.pavila.edit', compact('pravila'));
	}






	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'politics' => 'nullable',
			'oplata' => 'nullable',
			'dostavka' => 'nullable',
			'vozvrat' => 'nullable',
		]);

		$pravila = Pravila::find($id);

		$pravila->update([
			'politics' => $request->politics,
			'oplata' => $request->oplata,
			'dostavka' => $request->dostavka,
			'vozvrat' => $request->vozvrat,
		]);

		return redirect()->route('dashboard.pravila.home');
	} 









	#delete
	public function delete ($id) {
		$pravila = Pravila::find($id);
		$pravila->delete();

		return redirect()->route('dashboard.pravila.home');
	}






	#
}
