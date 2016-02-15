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

    // Route::get('reports','ReportsAppController@index');
    Route::resource('reports','ReportsController');

    // Route::get('patrimonies','PatrimoniesAppController@index');
    Route::resource('patrimonies','PatrimoniesController');
});
