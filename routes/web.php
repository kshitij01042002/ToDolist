<?php


Route::get('/','App\Http\Controllers\TaskController@index');
Route::post('/task/create','App\Http\Controllers\TaskController@store')->name('task.create');
Route::delete('/task/delete/{task}', 'App\Http\Controllers\TaskController@destroy')->name('task.destroy');