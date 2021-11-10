<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware('auth')
->prefix('admins')
->namespace('Admin')
->name('admins.')
->group(function(){
    Route::get('/', function() {
        return view('admins.home');
    })->name('home');

    Route::resource('comics', ComicController::Class);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
