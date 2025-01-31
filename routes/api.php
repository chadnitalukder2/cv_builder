<?php

use App\Http\Controllers\CVController;
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


    Route::get('/cvs', [CVController::class, 'index']);
    Route::post('/cvs', [CvController::class, 'store']);
    Route::get('/cvs/{id}', [CvController::class, 'show']);
    Route::put('/cvs/{id}', [CvController::class, 'update']);
    Route::delete('/cvs/{id}', [CvController::class, 'destroy']);
