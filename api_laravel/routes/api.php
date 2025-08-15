<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PhotoController;
use App\Http\Middleware\PhotoMiddleware;

Route::get('/way', function () {
    return 'hello world!';
});

Route::get('/test-api', [TestController::class, 'testApi']);
Route::get('/test-api/{name}', [TestController::class, 'testApi']);

Route::get('/mampy', [TestController::class, 'getMethod']);

/*Route::post('/mampy', function(Request $request){
    return $request->all();
});*/
Route::post('/mampy', [TestController::class, 'postMethod']);

//route pour les photos
Route::post('/photo',[PhotoController::class, 'store'])->middleware(PhotoMiddleware::class);

