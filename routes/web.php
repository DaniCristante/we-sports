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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/events', 'EventController@eventList');
Route::post('/events', 'EventController@eventList');
Route::get('/events/create', 'EventController@createEvent')->middleware('auth');
Route::post('/events/create', 'EventController@storeEvent')->name('events.store')->middleware('auth');
Route::get('/events/delete', 'EventController@deleteEvent')->middleware('auth');
Route::get('/profile/{nickname?}', 'UserController@getProfile');
Route::get('/events/update', 'EventController@updateEvent')->middleware('verify-creator');
Route::get('events/{id?}', 'EventController@eventDetail');
Route::get('dashboard', 'AdminController@showAdminPanel');
Route::post('dashboard/update', 'AdminController@updateUser');
Route::get('dashboard/delete', 'Eventcontroller@deleteEvent');

/** ROUTE FOR TEST TEMPLETE */
Route::get('/demo', function () {

    return view('user.profile');
});
