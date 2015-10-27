<?php

Route::get('about', 'PagesController@about');

// Route::get('articles', 'ArticlesController@index');
// Route::post('articles', 'ArticlesController@store');
// Route::get('articles/create', 'ArticlesController@create');
// Route::get('articles/{id}', 'ArticlesController@show');
// Route::get('articles/{id}/edit', 'ArticlesController@edit');

Route::resource('articles', 'ArticlesController');
