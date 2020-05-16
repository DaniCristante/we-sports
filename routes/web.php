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

Route::get('test', 'HomeController@test');


/**  <TEST FRONT END>     */

Route::get('/events/create', 'EventController@createEvent');
Route::post('/events/create', 'EventController@storeEvent')->name('events.store');
Route::get('/events/all', 'EventController@eventList');


/**  </TEST FRONT END>     */
