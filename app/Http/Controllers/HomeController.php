<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;

class HomeController extends Controller
{
    //

    public function index(){

        $services=Service::get()->all();
        return view('home',
        ['services' =>$services]);
    }
}
