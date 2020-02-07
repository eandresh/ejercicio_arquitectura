<?php

Route::group(['prefix' => 'api'], function(){

    Route::group(['prefix' => 'movies'], function(){

        Route::get('/', 'MoviesController@all');
        Route::get('{id:[0-9)]+}', 'MoviesController@getMovie');

    });
});
