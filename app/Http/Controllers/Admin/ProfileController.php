<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Image;

class ProfileController extends Controller
{

	#index
	public function index()
	{
		$profiles = Profile::latest()->get();
		return view('admin.profile.index', compact('profiles'));
	}


 
 


	#create
	public function create()
	{
		return view('admin.profile.create');
	}






	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обязательное поле'
		]);


		$profile = new Profile;
		$pic_utp = $request->file('pic_utp');


		if($pic_utp) {

			$name_gen = hexdec(uniqid()) . '.' . $pic_utp->getClientOriginalExtension();
			$lat_pic_utp = 'uploads/profile/' . $name_gen;
			Image::make($pic_utp)->resize(1600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/profile/' . $name_gen);
	
			$profile->pic_utp = $lat_pic_utp;
			
			$profile->title = $request->title;
			$profile->text_utp = $request->text_utp;
	
			$profile->about_title = $request->about_title;
			$profile->cources_title = $request->cources_title;
			$profile->cifres_title = $request->cifres_title;
			$profile->blog_title = $request->blog_title;
			$profile->tovary_title = $request->tovary_title;
			$profile->portfolio_title = $request->portfolio_title;
			$profile->otzivy_title = $request->otzivy_title;
			$profile->contacty_title = $request->contacty_title;
	
			$profile->about_subtitle = $request->about_subtitle;
			$profile->cources_subtitle = $request->cources_subtitle;
			$profile->cifres_subtitle = $request->cifres_subtitle;
			$profile->blog_subtitle = $request->blog_subtitle;
			$profile->tovary_subtitle = $request->tovary_subtitle;
			$profile->portfolio_subtitle = $request->portfolio_subtitle;
			$profile->otzivy_subtitle = $request->otzivy_subtitle;
			$profile->contacty_subtitle = $request->contacty_subtitle;
	
			$profile->one_cifry_title = $request->one_cifry_title;
			$profile->one_cifry_text = $request->one_cifry_text;
			$profile->two_cifry_title = $request->two_cifry_title;
			$profile->two_cifry_text = $request->two_cifry_text;
			$profile->tri_cifry_title = $request->tri_cifry_title;
			$profile->tri_cifry_text = $request->tri_cifry_text;
			$profile->four_cifry_title = $request->four_cifry_title;
			$profile->four_cifry_text = $request->four_cifry_text;
	
			$profile->phone = $request->phone;
			$profile->email = $request->email;
	
			$profile->instagram = $request->instagram;
			$profile->vk = $request->vk;
			$profile->facebook = $request->facebook;
			$profile->youtube = $request->youtube;
	
			$profile->save();
	
			return redirect()->route('dashboard.profile.home');
		} else {
			$profile->title = $request->title;
			$profile->text_utp = $request->text_utp;
	
			$profile->about_title = $request->about_title;
			$profile->cources_title = $request->cources_title;
			$profile->cifres_title = $request->cifres_title;
			$profile->blog_title = $request->blog_title;
			$profile->tovary_title = $request->tovary_title;
			$profile->portfolio_title = $request->portfolio_title;
			$profile->otzivy_title = $request->otzivy_title;
			$profile->contacty_title = $request->contacty_title;
	
			$profile->about_subtitle = $request->about_subtitle;
			$profile->cources_subtitle = $request->cources_subtitle;
			$profile->cifres_subtitle = $request->cifres_subtitle;
			$profile->blog_subtitle = $request->blog_subtitle;
			$profile->tovary_subtitle = $request->tovary_subtitle;
			$profile->portfolio_subtitle = $request->portfolio_subtitle;
			$profile->otzivy_subtitle = $request->otzivy_subtitle;
			$profile->contacty_subtitle = $request->contacty_subtitle;
	
			$profile->one_cifry_title = $request->one_cifry_title;
			$profile->one_cifry_text = $request->one_cifry_text;
			$profile->two_cifry_title = $request->two_cifry_title;
			$profile->two_cifry_text = $request->two_cifry_text;
			$profile->tri_cifry_title = $request->tri_cifry_title;
			$profile->tri_cifry_text = $request->tri_cifry_text;
			$profile->four_cifry_title = $request->four_cifry_title;
			$profile->four_cifry_text = $request->four_cifry_text;
	
			$profile->phone = $request->phone;
			$profile->email = $request->email;
	
			$profile->instagram = $request->instagram;
			$profile->vk = $request->vk;
			$profile->facebook = $request->facebook;
			$profile->youtube = $request->youtube;
	
			$profile->save();
	
			return redirect()->route('dashboard.profile.home');
		}

		
	}



  

	#edit
	public function edit($id)
	{
		$profile = Profile::find($id);
		return view('admin.profile.edit', compact('profile'));
	}







	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required'
		], [
			'title.required' => 'обязательное поле'
		]);


		$profile = Profile::find($id);

		$pic_utp = $request->file('pic_utp');
		$old_pic_utp = $request->old_pic_utp;

		if($pic_utp) {
			$name_gen = hexdec(uniqid()) . '.' . $pic_utp->getClientOriginalExtension();
			$lat_pic_utp = 'uploads/profile/' . $name_gen;
			Image::make($pic_utp)->resize(1600, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/profile/' . $name_gen);
	
			if($old_pic_utp) {
				unlink($old_pic_utp);
			}

			$profile->update([
				'pic_utp' => $lat_pic_utp,
				'title' => $request->title,
				'text_utp' => $request->text_utp,

				'about_title' => $request->about_title,
				'cources_title' => $request->cources_title,
				'cifres_title' => $request->cifres_title,
				'blog_title' => $request->blog_title,
				'tovary_title' => $request->tovary_title,
				'portfolio_title' => $request->portfolio_title,
				'otzivy_title' => $request->otzivy_title,
				'contacty_title' => $request->contacty_title,

				'about_subtitle' => $request->about_subtitle,
				'cources_subtitle' => $request->cources_subtitle,
				'cifres_subtitle' => $request->cifres_subtitle,
				'blog_subtitle' => $request->blog_subtitle,
				'tovary_subtitle' => $request->tovary_subtitle,
				'portfolio_subtitle' => $request->portfolio_subtitle,
				'otzivy_subtitle' => $request->otzivy_subtitle,
				'contacty_subtitle' => $request->contacty_subtitle,
		
				'one_cifry_title' => $request->one_cifry_title,
				'one_cifry_text' => $request->one_cifry_text,
				'two_cifry_title' => $request->two_cifry_title,
				'two_cifry_text' => $request->two_cifry_text,
				'tri_cifry_title' => $request->tri_cifry_title,
				'tri_cifry_text' => $request->tri_cifry_text,
				'four_cifry_title' => $request->four_cifry_title,
				'four_cifry_text' => $request->four_cifry_text,
		
				'phone' => $request->phone,
				'email' => $request->email,
		
				'instagram' => $request->instagram,
				'vk' => $request->vk,
				'facebook' => $request->facebook,
				'youtube' => $request->youtube,
			]);
	
			
	
	
			return redirect()->route('dashboard.profile.home');

		} else {

			$profile->update([
				'title' => $request->title,
				'text_utp' => $request->text_utp,

				'about_title' => $request->about_title,
				'cources_title' => $request->cources_title,
				'cifres_title' => $request->cifres_title,
				'blog_title' => $request->blog_title,
				'tovary_title' => $request->tovary_title,
				'portfolio_title' => $request->portfolio_title,
				'otzivy_title' => $request->otzivy_title,
				'contacty_title' => $request->contacty_title,

				'about_subtitle' => $request->about_subtitle,
				'cources_subtitle' => $request->cources_subtitle,
				'cifres_subtitle' => $request->cifres_subtitle,
				'blog_subtitle' => $request->blog_subtitle,
				'tovary_subtitle' => $request->tovary_subtitle,
				'portfolio_subtitle' => $request->portfolio_subtitle,
				'otzivy_subtitle' => $request->otzivy_subtitle,
				'contacty_subtitle' => $request->contacty_subtitle,
		
				'one_cifry_title' => $request->one_cifry_title,
				'one_cifry_text' => $request->one_cifry_text,
				'two_cifry_title' => $request->two_cifry_title,
				'two_cifry_text' => $request->two_cifry_text,
				'tri_cifry_title' => $request->tri_cifry_title,
				'tri_cifry_text' => $request->tri_cifry_text,
				'four_cifry_title' => $request->four_cifry_title,
				'four_cifry_text' => $request->four_cifry_text,
		
				'phone' => $request->phone,
				'email' => $request->email,
		
				'instagram' => $request->instagram,
				'vk' => $request->vk,
				'facebook' => $request->facebook,
				'youtube' => $request->youtube,
			]);
	
			
	
	
			return redirect()->route('dashboard.profile.home');

		}

		

		
	}






	#delete
	public function delete ($id) {
		$profile = Profile::find($id);

		$profile->delete();

		return redirect()->route('dashboard.profile.home');
	}


	#
}
