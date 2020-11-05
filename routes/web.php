<?php

Route::get('/', 'index@index' );

Auth::routes();

Route::get('/admin-p', 'HomeController@index');

Route::get('topmenu/create','TopmenuController@create');
Route::post('topmenu/store','TopmenuController@store');
Route::get('topmenu/manage','TopmenuController@show');
Route::get('topmenu/edit/{id}','TopmenuController@edit');
Route::put('topmenu/update/{id}','TopmenuController@update');
Route::delete('topmenu/destroy/{id}','TopmenuController@destroy');
Route::get('contentmenu/create','ContentmenuController@index');
Route::post('contentmenu/store','ContentmenuController@create');
Route::get('contentmenu/manage','ContentmenuController@show');
Route::get('contentmenu/edit/{id}','ContentmenuController@edit');
Route::put('contentmenu/update/{id}','ContentmenuController@update');
Route::delete('contentmenu/destroy/{id}','ContentmenuController@destroy');
Route::get('zirmenu/create','ZirmenuController@create');
Route::post('zirmenu/store','ZirmenuController@store');