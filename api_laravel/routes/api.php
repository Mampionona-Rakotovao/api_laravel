<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/way', function () {
    return 'hello world!';
});

Route::get('/test-api', function () {
    return 'Route API fonctionne !';
});

