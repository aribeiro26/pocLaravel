<?php

use Illuminate\Http\Request;
use App\Http\Controllers\HelloWordController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('bands', [BandController::class, 'getAll']);

Route::get('bands/{id}', [BandController::class, 'getById']);

// Route::get('hello/{name}', function ($name) {
//     return "Hello" .$name;
// });



// Route::post('hello-post/{name}', [HelloWordController::class, 'helloPost']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
