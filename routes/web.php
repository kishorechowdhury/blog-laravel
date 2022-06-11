<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SiteController::class, 'index']);

// Search post
Route::get('/search', [PostController::class, 'search'])->name('search');

// All posts
Route::get('/posts', [PostController::class, 'index'])->name('blog');

// Create post form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');;

// Insert post
Route::post('/posts/save', [PostController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update post
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Manage post
Route::get('/posts/manage', [PostController::class, 'manage'])->middleware('auth');

// Single post
Route::get('/posts/{post}', [PostController::class, 'single']);

// Delete post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('delete-post')->middleware('auth');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');;

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');;

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');;

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

