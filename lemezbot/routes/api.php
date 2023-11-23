<?php

use App\Http\Controllers\BackController;
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
Route::get('/bakelits', [BackController::class , 'index']);
Route::get('/bakelits/{id}', [BackController::class , 'show']);

Route::post('/bakelits', [BackController::class , 'store']);

Route::put('/bakelits/{id}', [BackController::class , 'update']);
Route::delete('/bakelits/{id}', [BackController::class , 'destroy']);
