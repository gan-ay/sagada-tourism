<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TouristSpotController;

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

Route::get('/touristspot','App\Http\Controllers\TouristSpotController@index');
Route::get('/touristspot/create','App\Http\Controllers\TouristSpotController@create');
Route::get('/touristspot/{touristspot}','App\Http\Controllers\TouristSpotController@show');
// create a record using POST
Route::post('/touristspot','App\Http\Controllers\TouristSpotController@store');
// create a route for update
Route::get('/touristspot/{touristspot}/edit','App\Http\Controllers\TouristSpotController@edit');
// route for updating using put
Route::put('/touristspot/{touristspot}','App\Http\Controllers\TouristSpotController@update');
//delete
Route::delete('/touristspot/{touristspot}','App\Http\Controllers\TouristSpotController@destroy');


Route::resource('tours', App\Http\Controllers\ToursController::class);
