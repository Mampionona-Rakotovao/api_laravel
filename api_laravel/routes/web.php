<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/way', function () {
    return 'hello world!';
});

Route::get('/mann', function(){
    return 'hello mann!';
});

Route::get('/test-api/{name}', function ($name) {
    return 'Route API fonctionne !'.$name;
});