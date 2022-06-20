<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use PragmaRX\Tracker\Vendor\Laravel\Facade as Tracker;

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
//        $visitor = Tracker::currentSession();
        Schema::defaultStringLength(191);
        Blade::if("dev", function () {
            return app()->env == "local" || app()->env == "dev" || app()->env == "development";
        });
    }
}
