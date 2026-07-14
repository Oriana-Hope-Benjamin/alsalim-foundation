<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CauseController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Models\Cause;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Event;

// ==========================================
// 1. PUBLIC FRONTEND ROUTES
// ==========================================
Route::get('/', function () {
    return view('frontend.index', [
        'causes' => Cause::latest()->get(), // Fetches the latest causes
        'blogs' => Blog::latest()->get(),   // Fetches the latest blogs
        'events' => Event::latest()->get(), // Fetches the latest events
    ]);
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

Route::post('/contact/submit', [ContactController::class, 'store'])
    ->name('contact.store')
    ->middleware('throttle:5,1');


// ==========================================
// 2. ADMIN DASHBOARD & CRUD ROUTES (PROTECTED)
// ==========================================
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // The Dashboard Route
    Route::get('/', function () {
        $causes = Cause::latest()->get();
        return view('admin.dashboard', compact('causes'));
    })->name('dashboard');

    Route::get('/dashboard', function () {
        $causes = Cause::latest()->get();
        return view('admin.dashboard', compact('causes'));
    })->name('dashboard');

    // The CRUD Routes
    Route::resource('causes', CauseController::class)->except(['show']);
    Route::resource('blogs', BlogController::class)->except(['show']);
    Route::resource('events', EventController::class)->except(['show']);
    Route::resource('contacts', ContactController::class)->only(['index', 'destroy']);

    // ==========================================
    // INBOX & CONTACT ROUTES
    // ==========================================
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    Route::post('/contacts/{contact}/mark-as-read', [ContactController::class, 'markAsRead'])->name('contacts.markAsRead');
    Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');
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