<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Rutas protegidas...
Route::middleware(['auth:sanctum', 'pass'])->group(function () {
    Route::prefix('auth')->controller(AuthController::class)->group(function (){
        Route::put('active-user/{email}', 'activeUser');
        Route::put('desactive-user/{email}', 'desactiveUser');
        Route::post('/logout', [AuthController::class, 'logout'])->withoutMiddleware(['pass']);
        Route::get('/', [AuthController::class, 'detailsUser']);
        Route::get('/{email}', [AuthController::class, 'getUserById']);
    });
});

//Rutas desprotegidas...
Route::prefix('app')->controller(AuthController::class)->group(function (){
    Route::post('/', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::put('validate-email', 'validateEmail');//
    Route::post('validate-user', 'validateUser');//
    Route::put('change-password', 'changePassword');//
    Route::put('refresh-otp', 'refreshOTP');//
    Route::post('upload-file', 'uploadFile');//
})->withoutMiddleware(['auth:sanctum']);   

Route::prefix('test')->controller(DocumentsController::class)->group(function(){
    Route::post('upload-file', 'uploadProfilePic');
})->withoutMiddleware(['auth:sanctum']);
