<?php

use Illuminate\Support\Facades\Route;
use App\HomeContent;
use App\ContactContent;
use App\Photo;
use App\FacebookPixel;
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
    $photo = Photo::find(1);
    $pixelid = FacebookPixel::find(1);
    return view('welcome', compact('home_content', 'photo', 'pixelid'));
})->name('welcome');

Route::get('/test', function () {
    return view('test');
});

Route::get('/contact-us', function () {
    $contact_content = ContactContent::find(1);
    $photo = Photo::find(2);
    $pixelid = FacebookPixel::find(1);
    return view('contact.contact', compact('contact_content', 'photo', 'pixelid'));
})->name('contact-us');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/homepage/{home_content}', 'HomeContentController@update')->name('home-content.update');
Route::post('/contact/{contact_content}', 'ContactContentController@update')->name('contact-content.update');
Route::get('/contact/edit', 'ContactContentController@edit')->name('contact.edit');
Route::post('/contact', 'ContactContentController@sendMail')->name('contact.send-mail');
Route::post('/contact/{contact_content}', 'ContactContentController@update')->name('contact.update');
Auth::routes();
