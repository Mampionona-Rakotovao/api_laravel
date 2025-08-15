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

Route::get('/env', function(){
    return response()->json([
        'connection' => env('DB_CONNECTION'),
        'port' => env('DB_PORT'),
        'host' => env('DB_HOST'),
        'database' => env('DB_DATABASE'),
        'username' => env('DB_USERNAME'),
        'password' => env('DB_PASSWORD'),
    ]);
});

