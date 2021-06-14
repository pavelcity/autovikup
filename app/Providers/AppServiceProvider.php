<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Profile;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('pages.includes.topnav', function ($view){
					$view->with('profile', Profile::first());
				});

				view()->composer('pages.includes.footer', function ($view){
					$view->with('profile', Profile::first());
				});

		

				
    }
}
