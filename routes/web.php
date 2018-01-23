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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function (){
    return view('about');
});
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/i', 'HomeController@home')->name('i');
Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', '2fa']);