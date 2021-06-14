<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Image;

class CertificateController extends Controller
{
    
	#index
	public function index () {
		$certificates = Certificate::latest()->get();
		return view ('admin.certificate.index', compact('certificates'));
	}


	


	#create
	public function create() {
		return view ('admin.certificate.create');
	}





	#store
	public function store (Request $request) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обязательное поле'
		]);


		$certificate = new Certificate;
		$pic = $request->file('pic');


		if($pic) {

			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/certificate/' . $name_gen;
			Image::make($pic)->resize(500, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/certificate/' . $name_gen);

			$certificate->pic = $last_pic;
			$certificate->title = $request->title;
			$certificate->save();

			return redirect()->route('dashboard.certificaty.home');

		} else {
			$certificate->title = $request->title;
			$certificate->save();
			
			return redirect()->route('dashboard.certificaty.home');
		}


	}






	#edit
	public function edit($id) {
		$certificate = Certificate::find($id);
		return view ('admin.certificate.edit', compact('certificate'));
	}








	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обязательное поле'
		]);


		$certificate = Certificate::find($id);
		$pic = $request->file('pic');
		$old_pic = $request->old_pic;


		if($pic) {

			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/certificate/' . $name_gen;
			Image::make($pic)->resize(500, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/certificate/' . $name_gen);

			if($old_pic) {
				unlink($old_pic);
			}

			$certificate->update([
				'pic' => $last_pic,
				'title' => $request->title,
			]);


			return redirect()->route('dashboard.certificaty.home');

		} else {

			$certificate->update([
				'title' => $request->title,
			]);
			
			return redirect()->route('dashboard.certificaty.home');
		}


	}






	#delete
	public function delete($id) {
		$certificate = Certificate::find($id);

		$old_pic = $certificate->pic;
		if(isset($old_pic)) {
			unlink($old_pic);
		}

		$certificate->delete();
		return redirect()->route('dashboard.certificaty.home');
	}


	#
}
