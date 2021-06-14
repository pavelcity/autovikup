<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tovary;
use Image;

class TovaryController extends Controller
{

 

	#index 
	public function index()
	{
		$tovars = Tovary::latest()->get();
		return view('admin.tovary.index', compact('tovars'));
	}



	#create
	public function create()
	{
		return view('admin.tovary.create');
	}






	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обзятельное поле'
		]);


		$tovar = new Tovary;

		$pic = $request->file('pic');

		$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
		$last_slide = 'uploads/tovary/' . $name_gen;
		Image::make($pic)->resize(700, null, function ($constraint) {
			$constraint->aspectRatio();
		})->save('uploads/tovary/' . $name_gen);


		$tovar->pic = $last_slide;

		$tovar->metatitle = $request->metatitle;
		$tovar->metadescr = $request->metadescr;
		$tovar->metakeys = $request->metakeys;
		
		$tovar->title = $request->title;
		$tovar->price = $request->price;
		$tovar->brand = $request->brand;
		$tovar->descr = $request->descr;
		$tovar->save();

		return redirect()->route('dashboard.tovary.home');
	}







	#edit
	public function edit($id)
	{
		$tovar = Tovary::find($id);
		return view('admin.tovary.edit', compact('tovar'));
	}






	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обзятельное поле'
		]);


		$tovar = Tovary::find($id);

		$pic = $request->file('pic');
		$old_pic = $request->old_pic;

		if ($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_slide = 'uploads/tovary/' . $name_gen;
			Image::make($pic)->resize(700, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/tovary/' . $name_gen);

			if ($old_pic) {
				unlink($old_pic);
			}

			$tovar->update([
				'pic' => $last_slide,

				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,

				'title' => $request->title,
				'price' => $request->price,
				'brand' => $request->brand,
				'descr' => $request->descr,
			]);

			return redirect()->route('dashboard.tovary.home');
		} else {
			$tovar->update([
				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,

				'title' => $request->title,
				'price' => $request->price,
				'brand' => $request->brand,
				'descr' => $request->descr,
			]);

			return redirect()->route('dashboard.tovary.home');
		}
	}






	#delete 
	public function delete($id)
	{
		$tovar = Tovary::find($id);

		$old_pic = $tovar->pic;
		if ($old_pic) {
			unlink($old_pic);
		}

		$tovar->delete();
		return redirect()->route('dashboard.tovary.home');
	}


	#
}
