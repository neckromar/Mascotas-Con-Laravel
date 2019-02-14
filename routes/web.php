<?php

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
Route::get('/',function(){
    return view('index');
});

Route::get('/contacto',function(){
    return view('contact');
});

Route::get('/detalles',function(){
    return view('show');
});


Route::get('/blog',function(){
    return view('blog');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/view', 'HomeController@view');
//Route::get('/blog', 'HomeController@view')->name('blog');
//Route::get('/contacto', 'HomeController@view')->name('contacto');
