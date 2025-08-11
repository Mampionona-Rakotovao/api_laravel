<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/way', function () {
    return 'hello world!';
});

Route::get('/test-api', function () {
    return 'Route API fonctionne !';
});

Route::get('/test-api/{name}', function ($name) {
    return 'Route API fonctionne !'.$name;
});

Route::get('/Mampy', function(){
    $user = new stdClass();
    $user->name = 'Mampy';
    $user->age = 19;
    $user->city = 'Toliara';
    return $user;
});

/*Route::post('/Mampy', function(){
        $user = new stdClass();
        $user->name = 'Lando';
        $user->age = 20;
        $user->city = 'Toliara';
        return $user;
});*/

Route::post('/Mampy',function(Request $request){
    return $request->all();
});

