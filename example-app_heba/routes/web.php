<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/admin/profile', [AdminProfileController::class, 'index'])->name('admin.profile');





// Show login and register forms
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Handle form submission
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

