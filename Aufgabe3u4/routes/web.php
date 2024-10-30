<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/hallo', function () {
    return view('hallo');
})->middleware(['auth', 'verified'])->name('hallo');

Route::get('/job', function () {
    return view('job');
})->middleware(['auth', 'verified'])->name('job');

Route::get('/category', function () {
    return view('category');
})->middleware(['auth', 'verified'])->name('category');

Route::get('/company', function () {
    return view('company');
})->middleware(['auth', 'verified'])->name('company');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('jobs', JobController::class);
Route::resource('companies', CompanyController::class);
Route::resource('categories', CategoryController::class);