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

    
Route::get('/logout', function(Request $request) {
    Auth::logout();
    return redirect('/');
  })->middleware('setLocale');

Route::post('upload','App\Http\Controllers\UploadController@index')->middleware('setLocale');  

Route::post('PlacesCons','App\Http\Controllers\HomeController@PlacesConsultancy')->middleware('setLocale');  

});

Route::get('/', function(){
    return redirect('/ar');
});







Route::group(['prefix' => 'en/admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => 'ar/admin'], function () {
    Voyager::routes();
});
