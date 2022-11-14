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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('main');
});

Route::get('/about', function(){
    return view('bct_about/about');
})->name('about');

Route::get('/location', function(){
    return view('bct_about/location');
})->name('location');

Route::get('/service', function(){
    return view('about_service/service');
})->name('service');

Route::get('/portfolio', function(){
    return view('portfolio_list/portfolio');
})->name('portfolio');

Route::get('/qna', function(){
    return view('service_center/qna');
})->name('qna');

Route::get('/contact', function(){
    return view('service_center/contact');
})->name('contact');
