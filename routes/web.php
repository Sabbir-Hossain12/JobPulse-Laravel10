<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employer\EmployerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home-page');
});

//candidate
Route::get('/dashboard', function () {
    return view('candidate.pages.dashboard');
})->middleware(['auth', 'verified'])->name('candidate.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Admin Routes

Route::get('/admin/login', [AdminController::class, 'create'])->name('admin.login');
Route::post('/admin/login-submit', [AdminController::class, 'store'])->name('admin.login.submit');


Route::middleware('admin')->group(function () {
    Route::view('/admin/dashboard', 'admin.dashboard.dashboard')->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

}

);


//employer
Route::get('/employer/login', [EmployerController::class, 'create'])->name('employer.login');
Route::post('/employer/login-submit', [EmployerController::class, 'store'])->name('employer.login.submit');

Route::get('/employer/register', [EmployerController::class, 'createReg'])->name('employer.register');
Route::post('/employer/register', [EmployerController::class, 'storeReg'])->name('employer.register.submit');

Route::get('/employer/forgot-password', [EmployerController::class, 'createForgot'])
    ->name('employer.password.request');

Route::post('/employer/forgot-password', [EmployerController::class, 'storeForgot'])
    ->name('employer.password.email');


Route::get('/employer/reset-password/{token}', [EmployerController::class, 'createReset'])
    ->name('employer.password.reset');

Route::post('/employer/reset-password', [EmployerController::class, 'storeReset'])
    ->name('employer.password.store');


Route::middleware('employer')->group(function () {

    Route::view('/employer/dashboard', 'employer.pages.dashboard')->name('employer.dashboard');
    Route::get('/employer/logout', [EmployerController::class, 'destroy'])->name('employer.logout');
}

);
