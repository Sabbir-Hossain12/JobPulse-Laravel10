<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\EmployerForAdminController;
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

Route::get('/employer-list', [EmployerForAdminController::class, 'employerList']);


Route::middleware('admin')->group(function () {
    Route::view('/admin/dashboard', 'admin.pages.dashboard')->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');

    Route::view('/admin/companies', 'admin.pages.company-page ')->name('admin.companies');
    Route::view('/admin/candidates', 'admin.pages.candidate-page')->name('admin.candidates');
    Route::view('/admin/employees', 'admin.pages.employee-page')->name('admin.employees');
    Route::view('/admin/jobs', 'admin.pages.jobs-page')->name('admin.jobs');
    Route::view('/admin/pages', 'admin.pages.pages-page')->name('admin.pages');
    Route::view('/admin/plugins', 'admin.pages.dashboard')->name('admin.plugins');
    Route::view('/admin/blogs', 'admin.pages.dashboard')->name('admin.blogs');


    //employer list page



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
