<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\PortfolioPageController;

// Authentication Route 
require __DIR__ . '/auth.php';

// Landing Page Controller
Route::get('/', [HomePageController::class, 'index'])->name('home');

// ContactController
Route::post("/send_message", [ContactController::class, 'store'])->name('send_message');

//Other Page Controller
Route::get('/portfolio', [PortfolioPageController::class, 'index'])->name('portfolio.home');

Route::get('/blog', [BlogPageController::class, 'index'])->name('blog.home');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');

// Admin Routes
Route::get('/admin', [AdminPageController::class, 'index'])->name('admin.home')->middleware('auth', 'Is_Admin');

// Admin Project 
Route::get('/admin/project', [AdminProjectController::class, 'index'])->name('admin.project.index')->middleware('auth', 'Is_Admin');
Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create')->middleware('auth', 'Is_Admin');
Route::post('/admin/project/post', [AdminProjectController::class, 'store'])->name('admin.project.post')->middleware('auth', 'Is_Admin');
