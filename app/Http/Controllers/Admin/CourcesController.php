<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cource;
use Image;

class CourcesController extends Controller
{
 

	#index
	public function index()
	{
		$cources = Cource::latest()->get();
		return view('admin.cources.index', compact('cources'));
	}






	#create
	public function create()
	{
		return view('admin.cources.create');
	}






	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
			// 'pic' => 'required|mimes:jpeg,jpg,png,webp',
			// 'short' => 'required',
			// 'descr' => 'required',

			// 'name_spiker' => 'required',
		], [
			'title.required' => 'обязательное поле',
			// 'pic.required' => 'нужна картинка',
			// 'pic.mimes' => 'досутпные форматы для загрузки: jpeg | jpg | png | webp',
			// 'short.required' => 'обязательное поле',
			// 'descr.required' => 'обязательное поле',

			// 'name_spiker.required' => 'обязательное поле',
		]);

		$cource = new Cource;
		$pic = $request->file('pic');
		$avatar = $request->file('avatar');

		if ($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/cources/' . $name_gen;
			Image::make($pic)->resize(1120, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/cources/' . $name_gen);

			


			$cource->pic = $last_pic;

			$cource->metatitle = $request->metatitle;
			$cource->metadescr = $request->metadescr;
			$cource->metakeys = $request->metakeys;

			$cource->title = $request->title;
			$cource->short = $request->short;
			$cource->descr = $request->descr;

			$cource->name_spiker = $request->name_spiker;
			$cource->subtitle_spiker = $request->subtitle_spiker;
			$cource->text_spiker = $request->text_spiker;
			$cource->price = $request->price;
			$cource->save();

			return redirect()->route('dashboard.cources.home');
		} else if ($avatar) {

			$name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
			$last_avatar = 'uploads/cources/' . $name_gen;
			Image::make($avatar)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/cources/' . $name_gen);


			$cource->avatar = $last_avatar;

			$cource->metatitle = $request->metatitle;
			$cource->metadescr = $request->metadescr;
			$cource->metakeys = $request->metakeys;

			$cource->title = $request->title;
			$cource->short = $request->short;
			$cource->descr = $request->descr;

			$cource->name_spiker = $request->name_spiker;
			$cource->subtitle_spiker = $request->subtitle_spiker;
			$cource->text_spiker = $request->text_spiker;
			$cource->price = $request->price;
			$cource->save();



		} 
		else {
			$cource->metatitle = $request->metatitle;
			$cource->metadescr = $request->metadescr;
			$cource->metakeys = $request->metakeys;

			$cource->title = $request->title;
			$cource->short = $request->short;
			$cource->descr = $request->descr;

			$cource->name_spiker = $request->name_spiker;
			$cource->subtitle_spiker = $request->subtitle_spiker;
			$cource->text_spiker = $request->text_spiker;
			$cource->price = $request->price;
			$cource->save();


			return redirect()->route('dashboard.cources.home');
		}
	}






	#edit
	public function edit($id)
	{
		$cource = Cource::find($id);
		return view('admin.cources.edit', compact('cource'));
	}







	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
			// 'pic' => 'mimes:jpeg,jpg,png,webp',
			// 'short' => 'required',
			// 'descr' => 'required',
		], [
			'title.required' => 'обязательное поле',
			// 'pic.mimes' => 'досутпные форматы для загрузки: jpeg | jpg | png | webp',
			// 'short.required' => 'обязательное поле',
			// 'descr.required' => 'обязательное поле',
		]);

		$cource = Cource::find($id);

		$pic = $request->file('pic');
		$avatar = $request->file('avatar');

		$old_pic = $request->old_pic;
		$old_avatar = $request->old_avatar;

		if ($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/cources/' . $name_gen;
			Image::make($pic)->resize(1120, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/cources/' . $name_gen);

			if ($old_pic) {
				unlink($old_pic);
			}

			$cource->update([
				'pic' => $last_pic,

				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,

				'title' => $request->title,
				'short' => $request->short,
				'descr' => $request->descr,

				'name_spiker' => $request->name_spiker,
				'subtitle_spiker' => $request->subtitle_spiker,
				'text_spiker' => $request->text_spiker,
				'price' => $request->price,
			]);

			return redirect()->route('dashboard.cources.home');
		} else if ($avatar) {

			$name_gen = hexdec(uniqid()) . '.' . $avatar->getClientOriginalExtension();
			$last_avatar = 'uploads/cources/' . $name_gen;
			Image::make($avatar)->resize(200, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/cources/' . $name_gen);

			if ($old_avatar) {
				unlink($old_avatar);
			}

			$cource->update([
				'avatar' => $last_avatar,

				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,

				'title' => $request->title,
				'short' => $request->short,
				'descr' => $request->descr,

				'name_spiker' => $request->name_spiker,
				'subtitle_spiker' => $request->subtitle_spiker,
				'text_spiker' => $request->text_spiker,
				'price' => $request->price,
			]);

			return redirect()->route('dashboard.cources.home');
		} else {
			$cource->update([
				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,
				
				'title' => $request->title,
				'short' => $request->short,
				'descr' => $request->descr,

				'name_spiker' => $request->name_spiker,
				'subtitle_spiker' => $request->subtitle_spiker,
				'text_spiker' => $request->text_spiker,
				'price' => $request->price,
			]);

			return redirect()->route('dashboard.cources.home');
		}
	}











	#delete
	public function delete($id)
	{
		$cource = Cource::find($id);

		$last_image = $cource->pic;
		$last_avatar = $cource->avatar;

		if ($last_image) {
			unlink($last_image);
		}

		if ($last_avatar) {
			unlink($last_avatar);
		}

		$cource->delete();
		return redirect()->route('dashboard.cources.home');
	}



	#
}
