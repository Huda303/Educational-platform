<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CategoryController;



// Route::get('/', [PagesController::class, 'GuestHome']);
    // user dashboard
Route::get('/', [PageController::class, 'Home'])->name('home');
Route::get('/categories', [PageController::class, 'categories'])->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('get.category');
Route::get('/categories/courses', [PageController::class, 'courses'])->name('courses');

Route::post('/profile/switch-role', [ProfileController::class, 'switchRole'])->name('profile.switch-role');

Route::get('/dashboard', function () {
    return view('User/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
