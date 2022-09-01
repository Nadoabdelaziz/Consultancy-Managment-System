<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consultant;
use App\Models\Service;
use App\Models\Place;
use App\Models\Product;
use App\Models\Newborn;
use App\Models\Other;



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
        $price=$request->price;

        // return $names;

        Place::create([
            'names'=> $names,
            'creator_name' => $creator,
            'activity' => $activty,
            'country' => $place,
            'comment' => $comment,
            'status' => '1',
            'user_email' =>$user_email,
            'price' => $price
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


    

    public function ProductConsultancy(Request $request){
        if($request == ""){
            return view('ProductConsultant');
        }
        
        $user_email=$request->user;
        $names=$request->first . "-". $request->Sec . "-" . $request->th;
        $creator= $request->inventor;
        $place=$request->country;
        $activty=$request->activity;
        $comment =$request->Comment;
        $price=$request->price;


        // return $names;

        Product::create([
            'names'=> $names,
            'creator_name' => $creator,
            'activity' => $activty,
            'country' => $place,
            'comment' => $comment,
            'status' => '1',
            'user_email' =>$user_email,
            'price' => $price

        ]);

        $placess=Product::get();
        if($placess->count() > 0){
            $last_place_added=Product::latest()->take(1)->get();
        }
        else{
            $last_place_added = "";
        }


        return view('ProductConsultant', compact('last_place_added'));

    }
 


    public function BornConsultancy(Request $request){

        if($request == ""){
            return view('NewBornCons');
        }

        
        
        $user_email=$request->user;
        $names=$request->first . "-". $request->Sec . "-" . $request->th;
        $father= $request->father;
        $grand=$request->grand;
        $nickname=$request->nickname;
        $pronunce=$request->pronunce;
        $comment =$request->Comment;
        $price=$request->price;



        Newborn::create([
            'names'=> $names,
            'father_name' => $father,
            'grandfather' => $grand,
            'nickname' => $nickname,
            'pronounce'=> $pronunce,
            'comment' => $comment,
            'status' => '1',
            'user_email' =>$user_email,
            'price' => $price

        ]);

        $newborns=Newborn::get();
        if($newborns->count() > 0){
            $last_born_added=Newborn::latest()->take(1)->get();
        }
        else{
            $last_born_added = "";
        }


        return view('NewBornCons', compact('last_born_added'));

    }



    public function othercons(Request $request){

        if($request == ""){
            return view('OtherCons');
        }


    
        $user_email=$request->user;
        $names=$request->first . "-". $request->Sec . "-" . $request->th;
        $details= $request->details;
        $comment =$request->Comment;
        $price=$request->price;



        Other::create([
            'names'=> $names,
            'details' => $details,
            'comment' => $comment,
            'status' => '1',
            'user_email' =>$user_email,
            'price' => $price

        ]);

        $other=Other::get();
        if($other->count() > 0){
            $last_other_added=Other::latest()->take(1)->get();
        }
        else{
            $last_other_added = "";
        }


        return view('OtherCons', compact('last_other_added'));

    }
}
