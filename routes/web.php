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

    Route::get('/OtherCons',function(){
        return view('OtherCons');
    })->middleware('setLocale');

    Route::get('/PhaiConsultant',function(){
        return view('PhaiConsultant');
    })->middleware('setLocale');


    Route::get('/goalsConsultancy',function(){
        return view('goalsConsultancy');
    })->middleware('setLocale');



    Route::get('/tickets',function(){
        return view('Ticket');
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



//  places 
Route::post('upload','App\Http\Controllers\UploadController@index')->middleware('setLocale');  

Route::post('PlacesCons','App\Http\Controllers\HomeController@PlacesConsultancy')->middleware('setLocale');  


// product 
Route::post('uploadProduct','App\Http\Controllers\UploadController@Productupload')->middleware('setLocale');  

Route::post('ProductCons','App\Http\Controllers\HomeController@ProductConsultancy')->middleware('setLocale');  


// new born
Route::post('NewBornCons','App\Http\Controllers\HomeController@BornConsultancy')->middleware('setLocale');  

Route::post('Bornupload','App\Http\Controllers\UploadController@Bornupload')->middleware('setLocale');  


// others

Route::post('othercons','App\Http\Controllers\HomeController@othercons')->middleware('setLocale');  

Route::post('otherupload','App\Http\Controllers\UploadController@otherupload')->middleware('setLocale');  


// Phai

Route::post('PhaiCons','App\Http\Controllers\HomeController@PhaiCons')->middleware('setLocale');  

Route::post('Phaiupload','App\Http\Controllers\UploadController@Phaiupload')->middleware('setLocale');  


// Goals

Route::post('GoalsCons','App\Http\Controllers\HomeController@GoalsCons')->middleware('setLocale');  

Route::post('Goalsupload','App\Http\Controllers\UploadController@Goalsupload')->middleware('setLocale');  



// Tickets Registeration
Route::post('Tickets','App\Http\Controllers\TicketController@index')->middleware('setLocale');  





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
