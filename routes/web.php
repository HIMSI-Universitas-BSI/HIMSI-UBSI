<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DivisionController;
    
Route::get('/', function () {
    return view('homepage');
});

Route::get('/', [HomeController::class, 'index']);

// Route Detail Blog
Route::get('/blogs/{id}', [BlogController::class, 'showBlog'])->name('blog.show');

// Route Detail Divisi
Route::get('/divisi/{id}', [DivisionController::class, 'showDivision'])->name('division.show');
