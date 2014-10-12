<?php

/*
 * INITIAL LANDING PAGE
 */
Route::get('/', function() {
    return View::make('bus.index');
});

/**
 * API ROUTES
 */
Route::group(array('prefix' => 'api'), function() {
    Route::resource('getBuses', 'BusController@index');
    Route::resource('search', 'BusController@searchResult');
    Route::resource('getStop', 'BusController@getBusStop');
});

