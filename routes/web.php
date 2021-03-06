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

Route::resource('wsl-infos', 'WslInfoController');

Route::resource('clients', 'ClientController');


Route::get('/about', 'FrontPageController@about')->name('front.about-us');
Route::get('/blog', 'FrontPageController@blog')->name('front.blog');
Route::get('/contact', 'FrontPageController@contact')->name('front.contact-us');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth', 'verified'], function (){

    Route::resource('users', 'UsersController');





});



