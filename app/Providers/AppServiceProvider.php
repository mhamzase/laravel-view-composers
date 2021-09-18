<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\support\Facades\View;
use App\Models\Channel;

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
        // Option 1 - Every Single View
        // View::share('channels',Channel::orderBy('name')->get());

        // Option 2 - With specific defined views
        View::composer(['posts.create','channels.index'], function ($view){
            $view->with('channels',Channel::orderBy('name')->get());
        });
    }
}
