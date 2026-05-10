<?php

use App\Http\Controllers\Admin\Admin;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/membership-register',[HomeController::class,'membershipRegister'])->name('membership.register');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [Admin::class, 'index'])->name('admin.dashboard');
        Route::get('/students', [Admin::class, 'students'])->name('admin.students');
        Route::get('/books', [Admin::class, 'books'])->name('admin.books');
        Route::get('/issue-books', [Admin::class, 'issueBooks'])->name('admin.issueBooks');
        Route::get('/return-books', [Admin::class, 'returnBooks'])->name('admin.returnBooks');
        Route::get('/fine', [Admin::class, 'fine'])->name('admin.fine');
        Route::get('/logout', [Admin::class, 'logout'])->name('admin.logout');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
