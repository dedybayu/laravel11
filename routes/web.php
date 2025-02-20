<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::prefix('posts')->group(function () {
    Route::get('/', [PostsController::class, 'index']);
    Route::get('/{post:slug}', [PostsController::class, 'post']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About', 'name' => 'Bayu Setiawan']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/register', function () {
    return view('register', ['title' => 'Register']);
});
