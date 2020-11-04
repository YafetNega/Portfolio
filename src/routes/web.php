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


Route::get('/', function(){
    return view('Pages.index');
});

Route::get('/inner-page', function(){
    return view('Pages.inner-pages');
});

Route::get('/portfolio-details', function(){
    return view('Pages.portfolio-details');
});