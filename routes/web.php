<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\CategoriesAdminController;
use \App\Http\Controllers\GalleriesAdminController;
use \App\Http\Controllers\PostsAdminController;
use App\Http\Controllers\CategoriesController;
use \App\Http\Controllers\UserController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\GalleryController;
use \App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/about-me', [UserController::class, 'aboutMe']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'sendToEmail'])->name('contact.sendToEmail');
Route::get('/galleries/{cat_id}', [GalleryController::class, 'index'])->name('galleries');
Route::get('/posts/{gallery}', [PostsController::class, 'index'])->name('posts');

Route::prefix('admin')->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::resource('categories', CategoriesAdminController::class);
    Route::resource('galleries', GalleriesAdminController::class);
    Route::resource('posts', PostsAdminController::class);
});

Route::get('/qwkeuyfgkqweuygfkyuwergkuwehrflogin', [UserController::class, 'login']);
Route::post('/performLogin', [UserController::class, 'performLogin']);

