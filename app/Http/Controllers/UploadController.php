<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Product;
use App\Models\Newborn;
use App\Models\Other;
use App\Models\Phai;
use App\Models\Goal;






class UploadController extends Controller
{
    //
    public function index(Request $request){
        // dd($request->file('file')->store('posts'));        
        $place_id=$request->id;
        if($place_id != ""){
            Place::where('id',$place_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect(''.app()->getLocale().'/blog-post');   
    }


    public function Productupload(Request $request){
        $product_id=$request->id;
        if($product_id != ""){
            Product::where('id',$product_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       

        return redirect(''.app()->getLocale().'/ProductConsultant');   
    }


    public function Bornupload(Request $request){
        $born_id=$request->id;
        if($born_id != ""){
            Newborn::where('id',$born_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect(''.app()->getLocale().'/NewBornCons');   
    }


    public function otherupload(Request $request){
        $other_id=$request->id;
        if($other_id != ""){
            Other::where('id',$other_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect(''.app()->getLocale().'/OtherCons');   
    }

    public function Phaiupload(Request $request){
        $phai_id=$request->id;
        if($phai_id != ""){
            Phai::where('id',$phai_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect(''.app()->getLocale().'/PhaiConsultant');   
    }
    public function Goalsupload(Request $request){

        $Goal_id=$request->id;
        if($Goal_id != ""){
            Goal::where('id',$Goal_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect(''.app()->getLocale().'/goalsConsultancy');   
    }
    
}
