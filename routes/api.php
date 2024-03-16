<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

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

Route::get('/cruds', [CrudController::class, 'index']);
Route::post('/cruds', [CrudController::class, 'store']);
Route::get('/cruds/{crud}', [CrudController::class, 'show']);
Route::patch('/cruds/{crud}', [CrudController::class, 'update']);
Route::delete('/cruds/{crud}', [CrudController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
