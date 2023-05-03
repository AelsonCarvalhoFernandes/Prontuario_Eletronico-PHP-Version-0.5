<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserApiController;
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

Route::post('token', [LoginController::class, 'login_api']);

Route::prefix('')->group(function(){
    Route::get('user', [UserApiController::class, 'index']);
    Route::post('user/post', [UserApiController::class, 'store']);
    Route::get('user/{id}', [UserApiController::class, 'show']);
    Route::put('user/update/{id}', [UserApiController::class, 'update']);
    Route::delete('user/delete/{id}', [UserApiController::class, 'destroy']);
});


#Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    #return $request->user();
#});
