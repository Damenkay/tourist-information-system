<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// TOURIST ROUTES
Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/register', 'PagesController@register');
Route::POST('/create', 'PagesController@create')->name('create');
Route::get('/login', 'PagesController@login')->name('login');
Route::POST('/check', 'PagesController@check')->name('check');
Route::get('/tourist/dashboard', 'PagesController@dashboard')->name('dashboard');
Route::get('/logout', 'PagesController@logout')->name('logout');

// ADMIN ROUTES


