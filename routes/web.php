<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\ContactPageController;
use App\Http\Controllers\ProjectPageController;
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\PortfolioPageController;

// Authentication Route 
require __DIR__ . '/auth.php';

// Landing Page Controller
Route::get('/', [HomePageController::class, 'index'])->name('home');

// ContactController
Route::post("/send_message", [ContactController::class, 'store'])->name('send_message');

//Project Page Controller
Route::get('/projects', [ProjectPageController::class, 'index'])->name('project.index');
Route::get('/projects/search', [ProjectPageController::class, 'search'])->name('project.search');
Route::get('/projects/{project:slug}', [ProjectPageController::class, 'show'])->name('project.show');



Route::get('/blog', [BlogPageController::class, 'index'])->name('blog.home');
Route::get('/contact', [ContactPageController::class, 'index'])->name('contact');

// Admin Routes
Route::get('/admin', [AdminPageController::class, 'index'])->name('admin.home')->middleware('auth', 'Is_Admin');

// Admin Project 
Route::get('/admin/project', [AdminProjectController::class, 'index'])->name('admin.project.index')->middleware('auth', 'Is_Admin');
Route::get('/admin/project/create', [AdminProjectController::class, 'create'])->name('admin.project.create')->middleware('auth', 'Is_Admin');
Route::post('/admin/project/post', [AdminProjectController::class, 'store'])->name('admin.project.post')->middleware('auth', 'Is_Admin');
Route::get('/admin/{project:slug}/edit', [AdminProjectController::class, 'edit'])->name('admin.project.edit')->middleware('auth', 'Is_Admin');
Route::put('/admin/{project:slug}/update', [AdminProjectController::class, 'update'])->name('admin.project.update')->middleware('auth', 'Is_Admin');
Route::delete('/admin/{project:slug}', [AdminProjectController::class, 'destroy'])->name('admin.project.destroy')->middleware('auth', 'Is_Admin');
