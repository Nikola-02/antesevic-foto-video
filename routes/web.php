<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoriesAdminController;
use \App\Http\Controllers\GalleriesAdminController;
use \App\Http\Controllers\PostsAdminController;
use App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\UserController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('categories', CategoriesAdminController::class);
    Route::resource('galleries', GalleriesAdminController::class);
    Route::resource('posts', PostsAdminController::class);
});

Route::get('/qwkeuyfgkqweuygfkyuwergkuwehrflogin', [UserController::class, 'login']);
Route::post('/performLogin', [UserController::class, 'performLogin']);

