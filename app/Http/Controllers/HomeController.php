<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consultant;
use App\Models\Service;
use App\Models\Place;
use App\Models\Calculator;

class HomeController extends Controller
{
    //

    public function index(){


        // $consultant = Consultant::get()->all();
        $calc = Calculator::get()->all();
        $services=Service::get()->all();


        return view('home',['services' =>$services,'calculators' => $calc]);
    }




    public function PlacesConsultancy(Request $request){
        if($request == ""){
            return view('blog-post');
        }
        
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
            'status' => '1',
            'user_email' =>$user_email
        ]);

        $placess=Place::get();
        if($placess->count() > 0){
            $last_place_added=Place::latest()->take(1)->get();
        }
        else{
            $last_place_added = "";
        }


        return view('blog-post', compact('last_place_added'));

    }
}
