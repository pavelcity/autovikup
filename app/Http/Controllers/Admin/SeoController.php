<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seo;

class SeoController extends Controller
{
    
	#index
	public function index () {
		$seos = Seo::latest()->get();
		return view ('admin.seo.index', compact('seos'));
	}



	#create
	public function create () {
		return view ('admin.seo.create');
	}



	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'homepage_title' => 'nullable',
			'homepage_txt' => 'nullable',
			'courcepage_title' => 'nullable',
			'courcepage_txt' => 'nullable',
			'tovarypage_title' => 'nullable',
			'tovarypage_txt' => 'nullable',
			'blogpage_title' => 'nullable',
			'blogpage_txt' => 'nullable',
		]);

		$seo = new Seo;

		$seo->homepage_title = $request->homepage_title;
		$seo->homepage_txt = $request->homepage_txt;
		$seo->courcepage_title = $request->courcepage_title;
		$seo->courcepage_txt = $request->courcepage_txt;
		$seo->tovarypage_title = $request->tovarypage_title;
		$seo->tovarypage_txt = $request->tovarypage_txt;
		$seo->blogpage_title = $request->blogpage_title;
		$seo->blogpage_txt = $request->blogpage_txt;
		$seo->save();

		return redirect()->route('dashboard.seo.home');

	}







	#update 
	public function update (Request $request, $id) {
		$this->validate($request, [
			'homepage_title' => 'nullable',
			'homepage_txt' => 'nullable',
			'courcepage_title' => 'nullable',
			'courcepage_txt' => 'nullable',
			'tovarypage_title' => 'nullable',
			'tovarypage_txt' => 'nullable',
			'blogpage_title' => 'nullable',
			'blogpage_txt' => 'nullable',
		]);

		$seo = Seo::find($id);

		$seo->update([
			'homepage_title' => $request->homepage_title,
			'homepage_txt' => $request->homepage_txt,
			'courcepage_title' => $request->courcepage_title,
			'courcepage_txt' => $request->courcepage_txt,
			'tovarypage_title' => $request->tovarypage_title,
			'tovarypage_txt' => $request->tovarypage_txt,
			'blogpage_title' => $request->blogpage_title,
			'blogpage_txt' => $request->blogpage_txt,
		]);

		return redirect()->route('dashboard.seo.home');

	}




	





		#edit
		public function edit ($id) {
			$seo = Seo::find($id);
			return view ('admin.seo.edit', compact('seo'));
		}















	#delete
	public function delete($id) {
		$seo = Seo::find($id);
		$seo->delete();

		return redirect()->route('dashboard.seo.home');
	}



	#
}
