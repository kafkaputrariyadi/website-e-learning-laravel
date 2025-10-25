<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home');
});

// ===================================
// RUTE UNTUK PUBLIK (SEMUA ORANG BISA AKSES)
// ===================================
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ===================================
// RUTE YANG MEMBUTUHKAN LOGIN
// ===================================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // --- Rute Khusus untuk Admin ---
    Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
        // Halaman utama manajemen kursus admin
        Route::get('courses', [CourseController::class, 'adminIndex'])->name('courses.index');

        // Rute untuk create, store, edit, update, destroy
        Route::resource('courses', CourseController::class)->except(['index', 'show']);
    });
});

require __DIR__.'/auth.php';
