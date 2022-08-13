<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

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
       

        return redirect('{{app()->getLocale()}}/blog-post')->with('success', 'your message,here');   
    }
}
