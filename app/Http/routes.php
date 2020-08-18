<?php
use Illuminate\Http\Request;

Route::get('/', 'TokenController@index');

Route::post('/token', 'TokenController@generate');
