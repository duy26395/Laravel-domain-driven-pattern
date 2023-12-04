<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('/trains')->group(function () {
    Route::get('/', \App\Domains\Train\Controller\IndexAction::class);
    // Route::get('/', 'index');
    // Route::post('/', 'create');
    // Route::get('/{id}', 'show')->whereNumber('id');
    // Route::put('/{id}', 'update')->whereNumber('id');
    // Route::delete('/{id}', 'destroy')->whereNumber('id');
    
});
