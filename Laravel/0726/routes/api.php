<?php

use App\Http\Controllers\MemberController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Symfony\Component\Routing\Router;
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
Route::group(['prefix' => 'auth'],function(){
    Route::get('/',[AuthController::class,'me']);
    Route::post('register',[AuthController::class,'register']);
    Route::post('login',[AuthController::class,'login']);
});

Router::get('failure', function(){
    return response()->json(['message' => '尚未登入']);
})->name('fail');

Router::group(['prefix' => 'member'],function(){
    Route::get('alluser',[MemberController::class,'get_user']);
    Route::post('adduser',[MemberController::class,'add_user']);
});



