<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Models\Product;
use App\Models\Newborn;
use App\Models\Other;




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


    public function Bornupload(Request $request){
        $born_id=$request->id;
        if($born_id != ""){
            Newborn::where('id',$born_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect('ar/NewBornCons');   
    }


    public function otherupload(Request $request){
        $other_id=$request->id;
        if($other_id != ""){
            Other::where('id',$other_id)->update([
                'Invoice' => $request->file('file')->store('posts')
            ]);
        }
       
        return redirect('ar/OtherCons');   
    }

    
    
}
