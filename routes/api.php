<?php

use App\Http\Controllers\Api\GalleryApiController;
use App\Http\Controllers\Api\InterviewApiController;
use App\Http\Controllers\Api\PersonaldetailApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\RachanaApiController;
use App\Http\Controllers\Api\SujhavApiController;
use App\Http\Controllers\Api\VideoApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('personalinfo', PersonaldetailApiController::class);
Route::apiResource('galleries', GalleryApiController::class);
Route::apiResource('posts', PostApiController::class);
Route::apiResource('interviews', InterviewApiController::class);
Route::apiResource('rachanas', RachanaApiController::class);
Route::apiResource('videos', VideoApiController::class);
Route::apiResource('sujhavs', SujhavApiController::class);
