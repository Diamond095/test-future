<?php

use App\Http\Controllers\DeleteNoteController;
use App\Http\Controllers\GetNoteController;
use App\Http\Controllers\GetNotesController;
use App\Http\Controllers\PostNoteController;
use App\Http\Controllers\UpdateNoteController;
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
Route::prefix('/v1/notebook')->group(function () {
    Route::get('/', GetNotesController::class);
    Route::get('/{id}', GetNoteController::class);
    Route::post('/', PostNoteController::class);
    Route::post('/{id}', UpdateNoteController::class);
    Route::delete('/{id}', DeleteNoteController::class);
});
