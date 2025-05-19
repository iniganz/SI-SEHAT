<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PostController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(DataController::class)->group(function () {
    Route::get('/information', 'index')->name('information');
});
Route::controller(PostController::class)->group(function () {
    Route::get('/articles', 'index')->name('articles');
});


