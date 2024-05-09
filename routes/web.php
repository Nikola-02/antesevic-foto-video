<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/admin', [AdminController::class, 'index']);