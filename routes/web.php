<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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
    return redirect('en/admin');
  })->middleware('setLocale');

});




Route::group(['prefix' => 'en/admin'], function () {
    Voyager::routes();
});
