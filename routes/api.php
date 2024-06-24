<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageUploader;
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

Route::middleware('auth:sanctum')->get('/auth/user', function (Request $request) {
    return $request->user()->getUserData();
});


Route::controller(AuthController::class)->prefix('auth/')->name('api-auth.')->group(function () {
    Route::post('/verify-user', "verifyUser")->name('verify-user');
    Route::post('/login', 'login')->name('login');

    Route::post('/forgot-password', 'forgotPassword')->name('forgot-password');
    Route::post('/reset-password', 'resetPassword')->name('reset-password');

    Route::middleware('auth:sanctum')->group(function () {
        Route::delete('/logout', 'logout')->name('logout');
        Route::post('/change-password', 'changePassword')->name('change-password');
    });
});

Route::controller(ImageUploader::class)->middleware('auth:sanctum')->name('temp-image-uploader.')->group(function () {
    Route::post('/store-temp-image', 'storeAsTmp')->name('store-as-tmp');
    Route::post('/test', function(){
        return response()->json(['message' => 'working']);
    });
});