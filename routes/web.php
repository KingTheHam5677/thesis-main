<?php

// Route Definitions

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\CurriculumController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::redirect('/', 'faculty/login');


Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('faculty/dashboard', fn() => Inertia::render('AdminDashboard'))->name('admin.dashboard');
});


Route::middleware(['auth:web', 'verified'])->group(function () {
    Route::get('student/dashboard', fn() => Inertia::render('Dashboard'))->name('dashboard');
});


Route::middleware('auth:web')->group(function () {
    Route::get('student/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('student/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('student/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('faculty/profile', [AdminProfileController::class, 'edit'])->name('adminprofile.edit');
    Route::patch('faculty/profile', [AdminProfileController::class, 'update'])->name('adminprofile.update');
    Route::delete('faculty/profile', [AdminProfileController::class, 'destroy'])->name('adminprofile.destroy');
});

require __DIR__ . '/auth.php';

