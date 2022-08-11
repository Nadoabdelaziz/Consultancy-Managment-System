<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Service;
use App\Models\Place;

class HomeController extends Controller
{
    //

    public function index(){

        $services=Service::get()->all();
        return view('home',
        ['services' =>$services]);
    }

    public function PlacesConsultancy(Request $request){
        $user_email=$request->user;
        $names=$request->first . "-". $request->Sec . "-" . $request->th;
        $creator= $request->inventor;
        $place=$request->country;
        $activty=$request->activity;
        $comment =$request->Comment;

        // return $names;

        Place::create([
            'names'=> $names,
            'creator_name' => $creator,
            'activity' => $activty,
            'country' => $place,
            'comment' => $comment,
            'status' => 1,
            'user_email' =>$user_email
        ]);

        return redirect('{{app()->getLocale()}}/blog-post');

    }
}
