<?php

namespace App\Providers;

use App\Models\Consultant;
use Illuminate\Support\ServiceProvider;

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
        $consultant = Consultant::get()->all();
        view()->share('consultants', $consultant);
        //
    }
}
