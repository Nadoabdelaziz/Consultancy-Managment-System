<?php

namespace App\Providers;

use App\Models\Consultant;
use App\Models\Text;

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
        $numbers_text=Text::get()->all();
        view()->share('texts', $numbers_text);
        view()->share('consultants', $consultant);

        //
    }
}
