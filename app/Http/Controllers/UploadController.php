<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Product;


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
       

        return redirect('ar/blog-post');   
    }


    public function Productupload(Request $request){
        $product_id=$request->id;
        if($product_id != ""){
            Product::where('id',$product_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       

        return redirect('ar/ProductConsultant');   
    }
}
