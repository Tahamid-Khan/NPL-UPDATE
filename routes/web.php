<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminuserauthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RegistrationController;

// Home routes
// Route::redirect('/', '/login')->name('home');
Route::redirect('/', '/register_npl_Trianing')->name('home');
Route::redirect('/register', '/register_npl_Trianing')->name('register');
Route::get('/login', function () {
    abort(404);
});

// route::get('/about',[HomeController::class,'about'])->name('about');
// route::get('/news-events',[HomeController::class,'newsevent'])->name('newsevent');
// route::get('/executive-committee',[HomeController::class,'executivecommittee'])->name('executivecommittee');
// route::get('/contact-us',[HomeController::class,'contactus'])->name('contactus');

// Add these routes to your web.php file
Route::get('/admin/registrations/filter-by-date', [RegistrationController::class, 'filterByDateRange'])
    ->name('admin.registrations.filter-by-date');
Route::get('/admin/registered-users', [RegistrationController::class, 'registeredUsers'])
    ->name('admin.registered-users');
Route::get('/admin/registrations/search', [RegistrationController::class, 'searchRegistrations'])
    ->name('admin.registrations.search');

// Registration routes
Route::get('/register_npl_Trianing', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/register/success', [RegistrationController::class, 'success'])->name('registration.success');
// Route::get('/registrations', [RegistrationController::class, 'index'])->name('registration.index');

// Admin routes
// Route::get('admin/dashboard', [AdminuserauthController::class, 'index'])->name('adminlogin');
// Route::get('/admin/registrations', [RegistrationController::class, 'adminIndex'])->name('admin.registrations');
// Route::get('/admin/registered-users', [AdminuserauthController::class, 'adminRegisteredUsers'])->name('admin.registered-users');

// Admin user management routes
Route::get('/admin/users/{user}/edit', [AdminuserauthController::class, 'editUser'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [AdminuserauthController::class, 'updateUser'])->name('admin.users.update');
Route::delete('/admin/users/{user}', [AdminuserauthController::class, 'destroyUser'])->name('admin.users.destroy');

// Registration management routes
Route::get('/admin/registrations/{registration}/edit', [RegistrationController::class, 'edit'])->name('admin.registrations.edit');
Route::put('/admin/registrations/{registration}', [RegistrationController::class, 'update'])->name('admin.registrations.update');
Route::delete('/admin/registrations/{registration}', [RegistrationController::class, 'destroy'])->name('admin.registrations.destroy');

// Report generation
Route::get('/admin/reports/event-financial', [ReportController::class, 'downloadReunionReport'])->name('admin.reports.event-financial');
Route::get('/admin/registrations/download', [RegistrationController::class, 'downloadPDF'])
    ->name('admin.registrations.download');

// Auth routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('admin/dashboard', [AdminuserauthController::class, 'index'])->name('adminlogin');
Route::get('/admin/npl', [RegistrationController::class, 'adminIndex'])->name('admin.registrations');
Route::get('/admin/registered-users', [AdminuserauthController::class, 'adminRegisteredUsers'])->name('admin.registered-users');
});

require __DIR__.'/auth.php';

