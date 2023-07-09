<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ToursController;
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
Route::get('/homeTours', 'PagesController@homeTours');
Route::get('/register', 'PagesController@register');
Route::POST('/create', 'PagesController@create')->name('create');
Route::get('/login', 'PagesController@login')->name('login');
Route::POST('/check', 'PagesController@check')->name('check');
Route::get('/tourist/dashboard', 'PagesController@dashboard')->name('dashboard')->middleware('touristAuth');
Route::get('/logout', 'PagesController@logout')->name('logout');

// ADMIN ROUTES
Route::get('/dashboard', 'AdminsController@index')->name('admins.dashboard');
Route::get('/admins/login', 'AdminsController@login')->name('admins.login');
Route::get('/admins/create', 'AdminsController@create')->name('admins.register');
Route::POST('/admins/store', 'AdminsController@store')->name('admins.store');
Route::POST('/admins/check', 'AdminsController@check')->name('admins.check');
Route::get('/allBookings', 'AdminsController@showAllBookings')->name('allBookings');
Route::get('/allTourists', 'AdminsController@showAllTourists')->name('allTourists');


// TOURS ROUTES
Route::resource('tours', 'ToursController');

// BOOKINGS ROUTES
Route::resource('bookings', 'BookingsController')->middleware('bookingAuth');;
Route::post('update/{id}', 'BookingsController@update')->name('update')->middleware('bookingAuth');
Route::get('delete/{id}', 'BookingsController@destroy')->name('delete')->middleware('bookingAuth');;

