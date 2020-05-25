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

Route::get('test', 'HomeController@test')->middleware('auth');


/**  <TEST FRONT END>     */

Route::get('/events', 'EventController@eventList');
Route::post('/events', 'EventController@eventList');
Route::get('/events/create', 'EventController@createEvent')->middleware('auth');
Route::post('/events/create', 'EventController@storeEvent')->name('events.store')->middleware('auth');


Route::get('events/{id?}', 'EventController@eventDetail');
/**  </TEST FRONT END>     */

/** ROUTE FOR TEST TEMPLETE */
Route::get('/demo', function () {
//    return view('user.panel');
    return view('manager.panel');
});
