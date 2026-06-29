<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\BlogController;
use App\Models\Cause;
use Illuminate\Support\Facades\Route;
use App\Models\Blog; // Add this line!

// ==========================================
// 1. PUBLIC FRONTEND ROUTES
// ==========================================
Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about', function () {
    return view('frontend.about');
});

Route::get('/causes', function () {
    $causes = Cause::latest()->get(); // Gets the newest causes first
    return view('frontend.causes', compact('causes'));
});

// UPDATED: Fetch blogs and pass them to the view
Route::get('/blog', function () {
    $blogs = Blog::latest()->get(); // Gets the newest blogs first
    return view('frontend.blog', compact('blogs'));
});

Route::get('/contact', function () {
    return view('frontend.contact');
});


// ==========================================
// 2. ADMIN DASHBOARD & CRUD ROUTES (PROTECTED)
// ==========================================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // The Dashboard Route
    Route::get('/dashboard', function () {
        $causes = Cause::latest()->get();
        return view('admin.dashboard', compact('causes'));
    })->name('dashboard');

    // The CRUD Routes
    Route::resource('causes', CauseController::class)->except(['show']);
    Route::resource('blogs', BlogController::class)->except(['show']);
});


// ==========================================
// 3. BREEZE PROFILE ROUTES (PROTECTED)
// ==========================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Loads Breeze's login, logout, and password reset routes
require __DIR__.'/auth.php';