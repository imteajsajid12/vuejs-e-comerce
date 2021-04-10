<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\PseudoTypes\True_;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/auth', function () {
    return true;
});
Route::get('/product', [App\Http\Controllers\FontendController::class, 'index']);
Route::get('/product/{id}', [App\Http\Controllers\FontendController::class, 'details']);
Route::post('/card', [App\Http\Controllers\FontendController::class, 'card']);
Route::get('/card_show', [App\Http\Controllers\FontendController::class, 'card_show']);
Route::get('/card_remove/{id}', [App\Http\Controllers\FontendController::class, 'card_delete']);
Route::get('/card_count', [App\Http\Controllers\FontendController::class, 'card_count']);

Route::get('/dd', [App\Http\Controllers\HomeController::class, 'kk']);