<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Otzivy;
use Image;

class OtzivyController extends Controller
{
    
	#index
	public function index () {
		$otzivs = Otzivy::get();
		return view ('admin.otzivy.index', compact('otzivs'));
	}



	#create
	public function create () {
		return view ('admin.otzivy.create');
	}




	#store
	public function store (Request $request) {
		$this->validate($request, [
			'pic' => 'nullable',
			'title' => 'required',
			'dolznost' => 'nullable',
			'text' => 'nullable'
		]);

		$otziv = new Otzivy;
		$pic = $request->file('pic');

		if($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/otzivy/' . $name_gen;
			Image::make($pic)->resize(150, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/otzivy/' . $name_gen);

			$otziv->pic = $last_pic;
			$otziv->title = $request->title;
			$otziv->dolznost = $request->dolznost;
			$otziv->text = $request->text;
			$otziv->save();

			return redirect()->route('dashboard.otzivy.home');


		}

		$otziv->title = $request->title;
		$otziv->dolznost = $request->dolznost;
		$otziv->text = $request->text;
		$otziv->save();

		return redirect()->route('dashboard.otzivy.home');
	}

  






	#edit
	public function edit ($id) {
		$otziv = Otzivy::find($id);
		return view ('admin.otzivy.edit', compact('otziv'));
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'pic' => 'nullable',
			'title' => 'required',
			'dolznost' => 'nullable',
			'text' => 'nullable'
		]);

		$otziv = Otzivy::find($id);

		$pic = $request->file('pic');
		$old_pic = $request->old_pic;

		if($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/otzivy/' . $name_gen;
			Image::make($pic)->resize(150, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/otzivy/' . $name_gen);

			if($old_pic) {
				unlink($old_pic);
			}

			$otziv->update([
				'pic' => $last_pic,
				'title' => $request->title,
				'dolznost' => $request->dolznost,
				'text' => $request->text,
			]);

			return redirect()->route('dashboard.otzivy.home');


		}

		$otziv->update([
			'title' => $request->title,
			'dolznost' => $request->dolznost,
			'text' => $request->text,
		]);

		return redirect()->route('dashboard.otzivy.home');
	}










	#delete 
	public function delete($id) {
		$otziv = Otzivy::find($id);

		$last_pic = $otziv->pic;

		if($last_pic) {
			unlink($last_pic );
		} 

		$otziv->delete();
		return redirect()->route('dashboard.otzivy.home');
	}


	#
}
