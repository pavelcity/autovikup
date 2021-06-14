<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photogallery;
use Image;

class PhotoController extends Controller
{
    
	#index
	public function index () {
		$folios = Photogallery::latest()->get();
		return view ('admin.portfolio.index', compact('folios'));
	}





	#create
	public function create () {
		return view('admin.portfolio.create');
	}







	#store
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		]);

		$folio = new Photogallery;
		$pic = $request->file('pic');

		if($pic) {

			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/portfolio/' . $name_gen;
			Image::make($pic)->resize(750, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/portfolio/' . $name_gen);


			$folio->pic = $last_pic;
			$folio->title = $request->title;
			$folio->save();
	
			return redirect()->route('dashboard.photogallery.home');
			#
		} else {
			$folio->title = $request->title;
			$folio->save();
	
			return redirect()->route('dashboard.photogallery.home');
		}

	
	}







	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		]);

		$folio = Photogallery::find($id);
		$pic = $request->file('pic');
		$old_pic = $request->old_pic;

		if($pic) {

			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/portfolio/' . $name_gen;
			Image::make($pic)->resize(750, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/portfolio/' . $name_gen);


			if($old_pic) {
				unlink($old_pic);
			}

			$folio->update([
				'pic' => $last_pic,
				'title' => $request->title,
			]);
	
			return redirect()->route('dashboard.photogallery.home');
			#
		} else {
			$folio->update([
				'title' => $request->title,
			]);
	
			return redirect()->route('dashboard.photogallery.home');
		}

	
	}











	#edit
	public function edit ($id) {
		$folio = Photogallery::find($id);
		return view('admin.portfolio.edit', compact('folio'));
	}












	#delete
	public function delete($id) {
		$folio = Photogallery::find($id);
		$old_pic = $folio->pic;

		if($old_pic) {
			unlink($old_pic);
		}

		$folio->delete();
		return redirect()->route('dashboard.photogallery.home');
	}



	#
}
