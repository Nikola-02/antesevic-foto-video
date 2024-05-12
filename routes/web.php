<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoriesAdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/categories', [CategoriesAdminController::class, 'index']);
});
