<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;

class AboutController extends Controller
{
    
	#index
	public function index () {
		$abouts = About::latest()->get();
		return view ('admin.about.index', compact('abouts'));
	}





	#create
	public function create () {
		return view ('admin.about.create');
	}






	#store
	public function store (Request $request) {
		$this->validate($request, [
			'name' => 'required'
		], [
			'name.required' => 'обязательное поле'
		]);


		$about = new About;
		$pic = $request->file('pic');

		if($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
      $last_pic = 'uploads/about/' . $name_gen;
      Image::make($pic)->resize(800, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save('uploads/about/' . $name_gen);


			$about->pic = $last_pic;
			$about->name = $request->name;
			$about->subtitle = $request->subtitle;
			$about->shortonhome = $request->shortonhome;
			$about->descronaboutpage = $request->descronaboutpage;
			$about->fichaone = $request->fichaone;
			$about->fichaonetext = $request->fichaonetext;
			$about->fichatwo = $request->fichatwo;
			$about->fichatwotext = $request->fichatwotext;
			$about->fichatri = $request->fichatri;
			$about->fichatritext = $request->fichatritext;
			$about->descr = $request->descr;
			$about->save();

			return redirect()->route('dashboard.about.home');
		} else {

			$about->name = $request->name;
			$about->subtitle = $request->subtitle;
			$about->shortonhome = $request->shortonhome;
			$about->descronaboutpage = $request->descronaboutpage;
			$about->fichaone = $request->fichaone;
			$about->fichaonetext = $request->fichaonetext;
			$about->fichatwo = $request->fichatwo;
			$about->fichatwotext = $request->fichatwotext;
			$about->fichatri = $request->fichatri;
			$about->fichatritext = $request->fichatritext;
			$about->descr = $request->descr;
			$about->save();

			return redirect()->route('dashboard.about.home');

		}

	}






	#edit
	public function edit ($id) {
		$about = About::find($id);
		return view ('admin.about.edit', compact('about'));
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'name' => 'required'
		], [
			'name.required' => 'обязательное поле'
		]);


		$about = About::find($id);
		$pic = $request->file('pic');
		$old_pic = $request->old_pic;

		if($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
      $last_pic = 'uploads/about/' . $name_gen;
      Image::make($pic)->resize(800, null, function ($constraint) {
        $constraint->aspectRatio();
      })->save('uploads/about/' . $name_gen);

			if(isset($old_pic)) {
				unlink($old_pic);
			}


			$about->update([
				'pic' => $last_pic,
				'name' => $request->name,
				'subtitle' => $request->subtitle,
				'shortonhome' => $request->shortonhome,
				'descronaboutpage' => $request->descronaboutpage,
				'fichaone' => $request->fichaone,
				'fichaonetext' => $request->fichaonetext,
				'fichatwo' => $request->fichatwo,
				'fichatwotext' => $request->fichatwotext,
				'fichatri' => $request->fichatri,
				'fichatritext' => $request->fichatritext,
				'descr' => $request->descr,
			]);


			return redirect()->route('dashboard.about.home');
		} else {

			$about->update([
				'name' => $request->name,
				'subtitle' => $request->subtitle,
				'shortonhome' => $request->shortonhome,
				'descronaboutpage' => $request->descronaboutpage,
				'fichaone' => $request->fichaone,
				'fichaonetext' => $request->fichaonetext,
				'fichatwo' => $request->fichatwo,
				'fichatwotext' => $request->fichatwotext,
				'fichatri' => $request->fichatri,
				'fichatritext' => $request->fichatritext,
				'descr' => $request->descr,
			]);

			return redirect()->route('dashboard.about.home');

		}

	}











	#delete
	public function delete ($id) {
		$about = About::find($id);

		$old_pic = $about->pic;
		
		if(isset($old_pic)) {
			unlink($old_pic);
		}

		$about->delete();
		return redirect()->route('dashboard.about.home');
	}

	#
}
