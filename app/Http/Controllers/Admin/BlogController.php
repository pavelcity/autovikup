<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Image;

class BlogController extends Controller
{

	#index 
	public function index()
	{
		$blogs = Blog::latest()->get();
		return view('admin.blog.index', compact('blogs'));
	}




	#create
	public function create()
	{
		return view('admin.blog.create');
	}





	#store
	public function store(Request $request)
	{
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'обязательное поле'
		]);

 
		$blog = new Blog;
		$pic = $request->file('pic');

		if ($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/blog/' . $name_gen;
			Image::make($pic)->resize(800, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $name_gen);

			$blog->pic = $last_pic;
			
			$blog->metatitle = $request->metatitle;
			$blog->metadescr = $request->metadescr;
			$blog->metakeys = $request->metakeys;

			$blog->title = $request->title;
			$blog->short = $request->short;
			$blog->descr = $request->descr;
			$blog->save();

			return redirect()->route('dashboard.blog.home');
		} else {
			$blog->metatitle = $request->metatitle;
			$blog->metadescr = $request->metadescr;
			$blog->metakeys = $request->metakeys;

			$blog->title = $request->title;
			$blog->short = $request->short;
			$blog->descr = $request->descr;
			$blog->save();

			return redirect()->route('dashboard.blog.home');
		}
	}






	#edit
	public function edit($id)
	{
		$blog = Blog::find($id);
		return view('admin.blog.edit', compact('blog'));
	}








	#update
	public function update(Request $request, $id)
	{
		$this->validate($request, [
			'title' => 'required',
		], [
			'title.required' => 'обязательное поле'
		]);


		$blog = Blog::find($id);

		$pic = $request->file('pic');
		$old_pic = $request->old_pic;

		if ($pic) {
			$name_gen = hexdec(uniqid()) . '.' . $pic->getClientOriginalExtension();
			$last_pic = 'uploads/blog/' . $name_gen;
			Image::make($pic)->resize(800, null, function ($constraint) {
				$constraint->aspectRatio();
			})->save('uploads/blog/' . $name_gen);

			if ($old_pic) {
				unlink($old_pic);
			}

			$blog->update([
				'pic' => $last_pic,

				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,
				
				'title' => $request->title,
				'short' => $request->short,
				'descr' => $request->descr,
			]);

			return redirect()->route('dashboard.blog.home');
		} else {
			$blog->update([
				'metatitle' => $request->metatitle,
				'metadescr' => $request->metadescr,
				'metakeys' => $request->metakeys,
				
				'title' => $request->title,
				'short' => $request->short,
				'descr' => $request->descr,
			]);

			return redirect()->route('dashboard.blog.home');
		}
	}





	#delete
	public function delete($id)
	{
		$blog = Blog::find($id);

		$last_pic = $blog->pic;
		if ($last_pic) {
			unlink($last_pic);
		}

		$blog->delete();
		return redirect()->route('dashboard.blog.home');
	}






	#
}
