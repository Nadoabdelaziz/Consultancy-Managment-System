<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::group(['prefix' => '{locale}'],function (){
    Route::get('/', 'App\Http\Controllers\HomeController@index')->middleware('setLocale');
    Route::get('/blog-post',function(){
        return view('blog-post');
    })->middleware('setLocale');

    Route::get('/ProductConsultant',function(){
        return view('ProductConsultant');
    })->middleware('setLocale');

    Route::get('/NewBornCons',function(){
        return view('NewBornCons');
    })->middleware('setLocale');



    Route::get('/SentenceCalculator',function(){
        return view('SentenceCalculator');
    })->middleware('setLocale');

    Route::get('/GoldenCalculator',function(){
        return view('GoldenCalculator');
    })->middleware('setLocale');

    
Route::get('/logout', function(Request $request) {
    Auth::logout();
    return redirect('/');
  })->middleware('setLocale');

Route::post('upload','App\Http\Controllers\UploadController@index')->middleware('setLocale');  

Route::post('PlacesCons','App\Http\Controllers\HomeController@PlacesConsultancy')->middleware('setLocale');  

Route::post('uploadProduct','App\Http\Controllers\UploadController@Productupload')->middleware('setLocale');  

Route::post('ProductCons','App\Http\Controllers\HomeController@ProductConsultancy')->middleware('setLocale');  



});


Route::get('/', function(){
    return redirect('/ar');
});


// Route::get('ar/onepage', function(){
//     return view('onepage');
// });




Route::group(['prefix' => 'en/admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'ar/admin'], function () {
    Voyager::routes();
});
