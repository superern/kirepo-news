<?php

use App\Http\Controllers\ArticleController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/news', [ArticleController::class, 'index']);
Route::post('/news', [ArticleController::class, 'store']);
Route::get('/news/{article}', [ArticleController::class, 'show']);
Route::put('/news/{article}', [ArticleController::class, 'update']);
Route::delete('/news/{article}', [ArticleController::class, 'destroy']);
