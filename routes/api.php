<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EsignController;
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

$router->get('/get-user', [EsignController::class, 'getUser']);

Route::prefix('envelope')->group(function () {
    Route::get('/list', [EsignController::class, 'envelopes']);
    Route::post('/send', [EsignController::class, 'send']);
});