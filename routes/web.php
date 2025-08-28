<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
    
Route::get('/', function () {
    return view('homepage');
});

Route::get('/', [HomeController::class, 'index']);
