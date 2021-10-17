<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\PortfolioPageController;

// Authentication Route 
require __DIR__ . '/auth.php';

// Landing Page Controller
Route::get('/', [HomePageController::class, 'index'])->name('home');

// ContactController
Route::post("/send_message", [ContactController::class, "store"])->name('send_message');

//other page controller
Route::get('/portfolio', [PortfolioPageController::class, 'index'])->name('portfolio.home');

Route::get('/blog', [BlogPageController::class, 'index'])->name('blog.home');

// Admin Routes 
Route::get('/admin', [AdminPageController::class, 'index'])->name('admin.home');
