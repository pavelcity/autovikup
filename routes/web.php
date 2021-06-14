<?php

use Illuminate\Support\Facades\Route;

 
# роуты сайта
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\CourcesController as Cources;
use App\Http\Controllers\TovaryController as Tovary;
use App\Http\Controllers\BlogController as Blog;
use App\Http\Controllers\ContactController as Contact;
use App\Http\Controllers\AboutController as About;
use App\Http\Controllers\PravilaController as Pravila;



# роуты админки
use App\Http\Controllers\Admin\AdminkaController;
use App\Http\Controllers\Admin\CourcesController;
use App\Http\Controllers\Admin\TovaryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\OtzivyController;
use App\Http\Controllers\Admin\MetricController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\PravilaController;











Route::get('', [HomePageController::class, 'index'])->name('home.page');


#курсы
Route::name('cources.')->prefix('cources/')->group(function () {
	Route::get('', [Cources::class, 'index'])->name('home');
	Route::get('{slug}', [Cources::class, 'detail'])->name('detail');
});


#Товары
Route::name('tovary.')->prefix('tovary/')->group(function () {
	Route::get('', [Tovary::class, 'index'])->name('home');
	Route::get('{slug}', [Tovary::class, 'detail'])->name('detail');
});


#Блог
Route::name('blog.')->prefix('blog/')->group(function () {
	Route::get('', [Blog::class, 'index'])->name('home');
	Route::get('{slug}', [Blog::class, 'detail'])->name('detail');
});


#Контакты
Route::get('contact', [Contact::class, 'index'])->name('contact.home');


#about
Route::get('about', [About::class, 'index'])->name('about.home');


#Правила
Route::name('pravila.')->prefix('pravila/')->group(function(){
	Route::get('politics', [Pravila::class, 'politics'])->name('politics');
	Route::get('oplata', [Pravila::class, 'oplata'])->name('oplata');
	Route::get('dostavka', [Pravila::class, 'dostavka'])->name('dostavka');
	Route::get('vozvrat', [Pravila::class, 'vozvrat'])->name('vozvrat');
});
 

 






  

# админка
Route::name('dashboard.')->prefix('dashboard/')->namespace('Admin')->middleware(['auth:sanctum', 'verified', 'web', 'auth'])->group(function () {

	Route::get('', [AdminkaController::class, 'index'])->name('home');



	#курсы
	Route::name('cources.')->prefix('cources/')->group(function () {
		Route::get('', [CourcesController::class, 'index'])->name('home');
		Route::get('create', [CourcesController::class, 'create'])->name('create');
		Route::post('store', [CourcesController::class, 'store'])->name('store');
		Route::get('{id}/edit', [CourcesController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [CourcesController::class, 'update'])->name('update');
		Route::get('{id}/delete', [CourcesController::class, 'delete'])->name('delete');
	});



	#Товары
	Route::name('tovary.')->prefix('tovary/')->group(function () {
		Route::get('', [TovaryController::class, 'index'])->name('home');
		Route::get('create', [TovaryController::class, 'create'])->name('create');
		Route::post('store', [TovaryController::class, 'store'])->name('store');
		Route::get('{id}/edit', [TovaryController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [TovaryController::class, 'update'])->name('update');
		Route::get('{id}/delete', [TovaryController::class, 'delete'])->name('delete');
	});


	#Блог
	Route::name('blog.')->prefix('blog/')->group(function () {
		Route::get('', [BlogController::class, 'index'])->name('home');
		Route::get('create', [BlogController::class, 'create'])->name('create');
		Route::post('store', [BlogController::class, 'store'])->name('store');
		Route::get('{id}/edit', [BlogController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [BlogController::class, 'update'])->name('update');
		Route::get('{id}/delete', [BlogController::class, 'delete'])->name('delete');
	});


	#Профиль
	Route::name('profile.')->prefix('profile/')->group(function () {
		Route::get('', [ProfileController::class, 'index'])->name('home');
		Route::get('create', [ProfileController::class, 'create'])->name('create');
		Route::post('store', [ProfileController::class, 'store'])->name('store');
		Route::get('{id}/edit', [ProfileController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [ProfileController::class, 'update'])->name('update');
		Route::get('{id}/delete', [ProfileController::class, 'delete'])->name('delete');
	});


	#SeoТексты
	Route::name('seo.')->prefix('seo/')->group(function () {
		Route::get('', [SeoController::class, 'index'])->name('home');
		Route::get('create', [SeoController::class, 'create'])->name('create');
		Route::post('store', [SeoController::class, 'store'])->name('store');
		Route::get('{id}/edit', [SeoController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [SeoController::class, 'update'])->name('update');
		Route::get('{id}/delete', [SeoController::class, 'delete'])->name('delete');
	});


	#Meta data
	Route::name('meta.')->prefix('meta/')->group(function () {
		Route::get('', [MetaController::class, 'index'])->name('home');
		Route::get('create', [MetaController::class, 'create'])->name('create');
		Route::post('store', [MetaController::class, 'store'])->name('store');
		Route::get('{id}/edit', [MetaController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [MetaController::class, 'update'])->name('update');
		Route::get('{id}/delete', [MetaController::class, 'delete'])->name('delete');
	});

 
	#otzivy
	Route::name('otzivy.')->prefix('otzivy/')->group(function () {
		Route::get('', [OtzivyController::class, 'index'])->name('home');
		Route::get('create', [OtzivyController::class, 'create'])->name('create');
		Route::post('store', [OtzivyController::class, 'store'])->name('store');
		Route::get('{id}/edit', [OtzivyController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [OtzivyController::class, 'update'])->name('update');
		Route::get('{id}/delete', [OtzivyController::class, 'delete'])->name('delete');
	});


	#metric
	Route::name('metric.')->prefix('metric/')->group(function () {
		Route::get('', [MetricController::class, 'index'])->name('home');
		Route::get('create', [MetricController::class, 'create'])->name('create');
		Route::post('store', [MetricController::class, 'store'])->name('store');
		Route::get('{id}/edit', [MetricController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [MetricController::class, 'update'])->name('update');
		Route::get('{id}/delete', [MetricController::class, 'delete'])->name('delete');
	});


	#photo gallery
	Route::name('photogallery.')->prefix('photogallery/')->group(function () {
		Route::get('', [PhotoController::class, 'index'])->name('home');
		Route::get('create', [PhotoController::class, 'create'])->name('create');
		Route::post('store', [PhotoController::class, 'store'])->name('store');
		Route::get('{id}/edit', [PhotoController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [PhotoController::class, 'update'])->name('update');
		Route::get('{id}/delete', [PhotoController::class, 'delete'])->name('delete');
	});


	#сертификаты или дипломы
	Route::name('certificaty.')->prefix('certificaty/')->group(function () {
		Route::get('', [CertificateController::class, 'index'])->name('home');
		Route::get('create', [CertificateController::class, 'create'])->name('create');
		Route::post('store', [CertificateController::class, 'store'])->name('store');
		Route::get('{id}/edit', [CertificateController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [CertificateController::class, 'update'])->name('update');
		Route::get('{id}/delete', [CertificateController::class, 'delete'])->name('delete');
	});


	#about page
	Route::name('about.')->prefix('about/')->group(function () {
		Route::get('', [AboutController::class, 'index'])->name('home');
		Route::get('create', [AboutController::class, 'create'])->name('create');
		Route::post('store', [AboutController::class, 'store'])->name('store');
		Route::get('{id}/edit', [AboutController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [AboutController::class, 'update'])->name('update');
		Route::get('{id}/delete', [AboutController::class, 'delete'])->name('delete');
	});


	#pravila
	Route::name('pravila.')->prefix('pravila/')->group(function () {
		Route::get('', [PravilaController::class, 'index'])->name('home');
		Route::get('create', [PravilaController::class, 'create'])->name('create');
		Route::post('store', [PravilaController::class, 'store'])->name('store');
		Route::get('{id}/edit', [PravilaController::class, 'edit'])->name('edit');
		Route::post('{id}/update', [PravilaController::class, 'update'])->name('update');
		Route::get('{id}/delete', [PravilaController::class, 'delete'])->name('delete');
	});



	#
});










Route::get('logoutadminka', [AdminkaController::class, 'logoutAdminka'])->name('admin.logout');

Route::fallback(function () {
	abort(404);
});
