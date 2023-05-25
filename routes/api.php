<?php

use App\Http\Controllers\WatchlistsController;
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

Route::get('/watchlists', [WatchlistsController::class,'index']);
Route::get('/watchlists/{id}', [WatchlistsController::class,'show']);
Route::delete('/watchlists/{id}', [WatchlistsController::class,'destroy']);
Route::post('/watchlists', [WatchlistsController::class,'store']);
Route::put('/watchlists', [WatchlistsController::class,'update']);