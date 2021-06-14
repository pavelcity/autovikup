<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Metric;

class MetricController extends Controller
{
    
	#index
	public function index () {
		$metrics = Metric::get();
		return view ('admin.metric.index', compact('metrics'));
	}

 

	#create
	public function create () {
		return view ('admin.metric.create');
	}




	#store
	public function store (Request $request) {
		$this->validate($request, [
			'googleanalitics' => 'nullable',
		]);

		$metrik = new Metric;
		
		$metrik->googleanalitics = $request->googleanalitics; 
		$metrik->yandexmetrika = $request->yandexmetrika; 
		$metrik->yandexmap = $request->yandexmap; 
		$metrik->fbpixel = $request->fbpixel; 
		$metrik->vkpixel = $request->vkpixel; 
		$metrik->save();

		return redirect()->route('dashboard.metric.home');
	}





	#edit
	public function edit ($id) {
		$metric = Metric::find($id);
		return view ('admin.metric.edit', compact('metric'));
	}









	#update
	public function update (Request $request, $id) {
		$this->validate($request, [
			'googleanalitics' => 'nullable',
		]);

		$metrik = Metric::find($id);

		$metrik->update([
			'googleanalitics' => $request->googleanalitics, 
			'yandexmetrika' => $request->yandexmetrika, 
			'yandexmap' => $request->yandexmap, 
			'fbpixel' => $request->fbpixel, 
			'vkpixel' => $request->vkpixel, 
		]);

		return redirect()->route('dashboard.metric.home');
	}











	#delete
	public function delete($id) {
		$metric = Metric::find($id);
		$metric->delete();

		return redirect()->route('dashboard.metric.home');
	}

	

}
