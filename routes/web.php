<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Tourist (default) auth routes
Route::get('/login', [App\Http\Controllers\Auth\TouristLoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\TouristLoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\TouristLoginController::class, 'logout'])->name('logout');

// Admin auth routes
Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');

// Protected admin routes
Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/guides', function () {
        return 'Guide list (placeholder)';
    })->name('guides.index');

    Route::get('/tourists', function () {
        return 'Tourist list (placeholder)';
    })->name('tourists.index');

    Route::get('/reservations', function () {
        return 'Reservation list (placeholder)';
    })->name('reservations.index');

    Route::get('/packages', function () {
        return 'Pacage list (placeholder)';
    })->name('packages.index');

});

Route::middleware('auth:admin')->prefix('admin')->group(function () {
    
});


// Protected tourist routes (default guard web)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // other tourist routes...
});
