<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// ==========================
// ROUTE HALAMAN PUBLIK
// ==========================

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// ==========================
// ROUTE AUTHENTICATION (DARI AUTH.PHP)
// ==========================
require __DIR__.'/auth.php';

// ==========================
// ROUTE YANG MEMBUTUHKAN LOGIN
// ==========================

Route::middleware(['auth'])->group(function () {
    // Dashboard - akan diakses setelah login berhasil
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes
    Route::prefix('admin')->group(function () {
        // Courses
        Route::get('/courses', [CourseController::class, 'adminIndex'])->name('admin.courses.index');
        Route::get('/courses/create', [CourseController::class, 'create'])->name('admin.courses.create');
        Route::post('/courses', [CourseController::class, 'store'])->name('admin.courses.store');
        Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('admin.courses.edit');
        Route::put('/courses/{course}', [CourseController::class, 'update'])->name('admin.courses.update');
        Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('admin.courses.destroy');

        // Lessons
        Route::get('/lessons', [LessonController::class, 'index'])->name('admin.lessons.index');
        Route::get('/lessons/create', [LessonController::class, 'create'])->name('admin.lessons.create');
        Route::post('/lessons', [LessonController::class, 'store'])->name('admin.lessons.store');
        Route::get('/lessons/{lesson}/edit', [LessonController::class, 'edit'])->name('admin.lessons.edit');
        Route::put('/lessons/{lesson}', [LessonController::class, 'update'])->name('admin.lessons.update');
        Route::delete('/lessons/{lesson}', [LessonController::class, 'destroy'])->name('admin.lessons.destroy');
    });

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Redirect untuk /home (opsional)
Route::get('/home', function () {
    return redirect()->route('dashboard');
});
