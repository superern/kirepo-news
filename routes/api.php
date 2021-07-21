<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
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
Route::post('/news/{article}', [ArticleController::class, 'restore']);

Route::get('/tags', [TagController::class, 'index']);
Route::post('/tags', [TagController::class, 'store']);
Route::get('/tags/{tag}', [TagController::class, 'show']);
Route::put('/tags/{tag}', [TagController::class, 'update']);
