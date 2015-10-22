<?php

Route::get('about', 'PagesController@about');
Route::get('articles', 'ArticlesController@index');
Route::get('articles/{id}', 'ArticlesController@show');
