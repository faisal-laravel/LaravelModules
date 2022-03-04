<?php

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

Route::prefix('fullcalender')->group(function() {
    Route::get('/', 'FullCalenderController@index');
    Route::post('fullcalenderAjax','FullCalenderController@ajax');

});


