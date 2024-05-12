<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoriesAdminController;
use \App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/categories', [CategoriesAdminController::class, 'index']);
});

Route::get('/qwkeuyfgkqweuygfkyuwergkuwehrflogin', [UserController::class, 'login']);
Route::post('/performLogin', [UserController::class, 'performLogin']);

