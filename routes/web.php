<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\GalleryController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);