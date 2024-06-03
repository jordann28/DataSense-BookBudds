<?php

use App\Http\Controllers\Admin\BookUploadController;
use App\Http\Controllers\Admin\StaticContentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;

// Users Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Protected Routes (Require Authentication)
Route::middleware(['auth'])->group(function () {
    // Users Profile Routes
    Route::get('/profile', [UserController::class, 'showProfile'])->name('profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('profile.update');

    // Book Routes
    Route::get('/books', [BookController::class, 'index'])->name('books.index');
    Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

    // Review Routes
    Route::post('/books/{id}/review', [ReviewController::class, 'store'])->name('reviews.store');
});

// Public Routes
Route::get('/', function () {
    return view('welcome');
});

// Admin Routes
Route::prefix('admin')->middleware(['admin'])->group(function () {
    Route::resource('users', 'Admin\UserController');
    Route::resource('books', 'Admin\BookController');
    Route::resource('genres', 'Admin\GenreController');
    Route::resource('reviews', 'Admin\ReviewController');

    // Book Upload Routes
    Route::get('books/upload', [BookUploadController::class, 'create'])->name('admin.books.upload.create');
    Route::post('books/upload', [BookUploadController::class, 'store'])->name('admin.books.upload.store');

    // Static Content Routes
    Route::get('static-content', [StaticContentController::class, 'index'])->name('admin.static-content.index');
    Route::get('static-content/{id}/edit', [StaticContentController::class, 'edit'])->name('admin.static-content.edit');
    Route::put('static-content/{id}', [StaticContentController::class, 'update'])->name('admin.static-content.update');
});

?>
