<?php

namespace App\Providers;

use App\Models\Consultant;
use App\Models\Text;
use App\Models\Ticket;
use App\Models\Video;
use App\Models\Offer;
use App\Models\Service;

use Voyager;



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
        // Voyager::addAction(\App\Actions\MyAction::class);


        $consultant = Consultant::get()->all();
        $videos = Video::get()->all();
        $numbers_text=Text::get()->all();
        $tickets=Ticket::get()->all();
        $services=Service::get()->all();
        $offers=Offer::get()->all();



        view()->share('texts', $numbers_text);
        view()->share('consultants', $consultant);
        view()->share('tickets', $tickets);
        view()->share('services', $services);
        view()->share('videos', $videos);
        view()->share('offers', $offers);






        //
    }
}