<?php

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get('reports','ReportsAppController@index');
    Route::resource('api/reports','ReportsController');

    // Route::get('patrimonies','PatrimoniesAppController@index');
    Route::resource('api/patrimonies','PatrimoniesController');
});
