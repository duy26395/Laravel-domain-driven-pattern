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
    Route::get('/{train}', \App\Domains\Train\Controller\ViewAction::class)->whereNumber('train');
    Route::post('/', \App\Domains\Train\Controller\CreateAction::class);
    Route::put('/{train}', \App\Domains\Train\Controller\UpdateAction::class)->whereNumber('train');
    Route::delete('/{train}', \App\Domains\Train\Controller\DeleteAction::class)->whereNumber('train');
});
