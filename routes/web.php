<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home-page');
});

//candidate
Route::get('/dashboard', function () {
    return view('candidate.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Admin Routes

Route::get('/admin/login',[AdminController::class,'create'])->name('admin.login');
Route::post('/admin/login-submit',[AdminController::class,'store'])->name('admin.login.submit');

Route::middleware('admin')->group(function ()
{
    Route::view('/admin/dashboard', 'admin.dashboard.dashboard');
}

);

