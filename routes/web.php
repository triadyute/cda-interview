<?php

use Illuminate\Support\Facades\Route;
use App\HomeContent;
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
    $home_content = HomeContent::find(1);
    return view('welcome', compact('home_content'));
})->name('welcome');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact-us');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::update('/homepage/{home_content}', 'HomeContentController@update')->name('home-contnent.update');
Auth::routes();
