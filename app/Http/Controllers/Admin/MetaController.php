<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Meta;

class MetaController extends Controller
{
    
	#index
	public function index () {
		$metas = Meta::get();
		return view ('admin.meta.index', compact('metas'));
	}




	#create 
	public function create () {
		return view ('admin.meta.create');
	}



 

	#store 
	public function store (Request $request) {
		$this->validate($request, [
			'ogtitle' => 'nullable',
			'ogurl' => 'nullable',
			'ogimg' => 'nullable',
			'home_title' => 'nullable',
			'home_description' => 'nullable',
			'home_keywords' => 'nullable',
			'author' => 'nullable',
			'canonical' => 'nullable',
			'cource_title' => 'nullable',
			'cource_description' => 'nullable',
			'cource_keywords' => 'nullable',
			'tovary_title' => 'nullable',
			'tovary_description' => 'nullable',
			'tovary_keywords' => 'nullable',
			'about_title' => 'nullable',
			'about_description' => 'nullable',
			'about_keywords' => 'nullable',
			'contact_title' => 'nullable',
			'contact_description' => 'nullable',
			'contact_keywords' => 'nullable',
			'blog_title' => 'nullable',
			'blog_description' => 'nullable',
			'blog_keywords' => 'nullable'
		]);

		$meta = new Meta;

		$meta->ogtitle = $request->ogtitle;
		$meta->ogurl = $request->ogurl;
		$meta->home_title = $request->home_title;
		$meta->home_description = $request->home_description;
		$meta->home_keywords = $request->home_keywords;
		$meta->author = $request->author;
		$meta->canonical = $request->canonical;


		$meta->cource_title = $request->cource_title;
		$meta->cource_description = $request->cource_description;
		$meta->cource_keywords = $request->cource_keywords;
		$meta->cource_canonical = $request->cource_canonical;
		$meta->cource_avtor = $request->cource_avtor;



		$meta->tovary_title = $request->tovary_title;
		$meta->tovary_description = $request->tovary_description;
		$meta->tovary_keywords = $request->tovary_keywords;
		$meta->tovary_canonical = $request->tovary_canonical;
		$meta->tovary_avtor = $request->tovary_avtor;



		$meta->about_title = $request->about_title;
		$meta->about_description = $request->about_description;
		$meta->about_keywords = $request->about_keywords;
		$meta->about_canonical = $request->about_canonical;
		$meta->about_avtor = $request->about_avtor;



		$meta->contact_title = $request->contact_title;
		$meta->contact_description = $request->contact_description;
		$meta->contact_keywords = $request->contact_keywords;
		$meta->contact_canonical = $request->contact_canonical;
		$meta->contact_avtor = $request->contact_avtor;



		$meta->blog_title = $request->blog_title;
		$meta->blog_description = $request->blog_description;
		$meta->blog_keywords = $request->blog_keywords;
		$meta->blog_canonical = $request->blog_canonical;
		$meta->blog_avtor = $request->blog_avtor;





		$meta->politics_title = $request->politics_title;
		$meta->politics_description = $request->politics_description;
		$meta->politics_keywords = $request->politics_keywords;
		$meta->politics_canonical = $request->politics_canonical;
		$meta->politics_avtor = $request->politics_avtor;



		$meta->oplata_title = $request->oplata_title;
		$meta->oplata_description = $request->oplata_description;
		$meta->oplata_keywords = $request->oplata_keywords;
		$meta->oplata_canonical = $request->oplata_canonical;
		$meta->oplata_avtor = $request->oplata_avtor;



		$meta->dostavka_title = $request->dostavka_title;
		$meta->dostavka_description = $request->dostavka_description;
		$meta->dostavka_keywords = $request->dostavka_keywords;
		$meta->dostavka_canonical = $request->dostavka_canonical;
		$meta->dostavka_avtor = $request->dostavka_avtor;




		$meta->vozvrat_title = $request->vozvrat_title;
		$meta->vozvrat_description = $request->vozvrat_description;
		$meta->vozvrat_keywords = $request->vozvrat_keywords;
		$meta->vozvrat_canonical = $request->vozvrat_canonical;
		$meta->vozvrat_avtor = $request->vozvrat_avtor;



		$meta->save();

		return redirect()->route('dashboard.meta.home');
	}







	#edit 
	public function edit ($id) {
		$meta = Meta::find($id);
		return view ('admin.meta.edit', compact('meta'));
	}





	 



	#update 
	public function update (Request $request, $id) {
		$this->validate($request, [
			'ogtitle' => 'nullable',
		]);

		$meta = Meta::find($id);

		$meta->update([
			'ogtitle' => $request->ogtitle,
			'ogurl' => $request->ogurl,
			'home_title' => $request->home_title,
			'home_description' => $request->home_description,
			'home_keywords' => $request->home_keywords,
			'author' => $request->author,
			'canonical' => $request->canonical,
	
			'cource_title' => $request->cource_title,
			'cource_description' => $request->cource_description,
			'cource_keywords' => $request->cource_keywords,
			'cource_canonical' => $request->cource_canonical,
			'cource_avtor' => $request->cource_avtor,
	



			'tovary_title' => $request->tovary_title,
			'tovary_description' => $request->tovary_description,
			'tovary_keywords' => $request->tovary_keywords,
			'tovary_canonical' => $request->tovary_canonical,
			'tovary_avtor' => $request->tovary_avtor,



	
			'about_title' => $request->about_title,
			'about_description' => $request->about_description,
			'about_keywords' => $request->about_keywords,
			'about_canonical' => $request->about_canonical,
			'about_avtor' => $request->about_avtor,


	
			'contact_title' => $request->contact_title,
			'contact_description' => $request->contact_description,
			'contact_keywords' => $request->contact_keywords,
			'contact_canonical' => $request->contact_canonical,
			'contact_avtor' => $request->contact_avtor,


	
			'blog_title' => $request->blog_title,
			'blog_description' => $request->blog_description,
			'blog_keywords' => $request->blog_keywords,
			'blog_canonical' => $request->blog_canonical,
			'blog_avtor' => $request->blog_avtor,



			'politics_title' => $request->politics_title,
			'politics_description' => $request->politics_description,
			'politics_keywords' => $request->politics_keywords,
			'politics_canonical' => $request->politics_canonical,
			'politics_avtor' => $request->politics_avtor,



			'oplata_title' => $request->oplata_title,
			'oplata_description' => $request->oplata_description,
			'oplata_keywords' => $request->oplata_keywords,
			'oplata_canonical' => $request->oplata_canonical,
			'oplata_avtor' => $request->oplata_avtor,



			'dostavka_title' => $request->dostavka_title,
			'dostavka_description' => $request->dostavka_description,
			'dostavka_keywords' => $request->dostavka_keywords,
			'dostavka_canonical' => $request->dostavka_canonical,
			'dostavka_avtor' => $request->dostavka_avtor,


			
			'vozvrat_title' => $request->vozvrat_title,
			'vozvrat_description' => $request->vozvrat_description,
			'vozvrat_keywords' => $request->vozvrat_keywords,
			'vozvrat_canonical' => $request->vozvrat_canonical,
			'vozvrat_avtor' => $request->vozvrat_avtor,
		]);

	

		return redirect()->route('dashboard.meta.home');
	}











	#delete
	public function delete($id) {
		$meta = Meta::find($id);
		$meta->delete();

		return redirect()->route('dashboard.meta.home');
	}




	#
}
