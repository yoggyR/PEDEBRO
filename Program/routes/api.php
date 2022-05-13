<?php

use App\Http\Controllers\M_JobsController;
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

Route::get('/indexJVAPI', [M_JobsController::class, 'indexJVAPI']);
Route::get('/showJVAPI/{id}', [M_JobsController::class, 'showJVAPI']);
Route::post('/storeJVAPI', [M_JobsController::class, 'storeJVAPI']);