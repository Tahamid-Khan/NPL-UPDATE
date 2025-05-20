<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminuserauthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RegistrationController;

// Home routes
// Route::redirect('/', '/login')->name('home');
//Default route of registration form
// Route::redirect('/', '/register_npl_mgt')->name('home');
// Route::redirect('/register', '/register_npl_mgt')->name('register');
Route::redirect('/', '/registration/closed')->name('home');
 Route::redirect('/register', 'registration/closed')->name('register');
Route::get('/login', function () {
    abort(404);
});
//closed registration
Route::get('/registration/closed', [RegistrationController::class, 'closed'])->name('registration.closed');
// Export route without middleware
Route::get('/registrations/export', [RegistrationController::class, 'export'])
    ->name('admin.registrations.export');

// Add these routes to your web.php file
Route::get('/admin/registrations/filter-by-date', [RegistrationController::class, 'filterByDateRange'])
    ->name('admin.registrations.filter-by-date');
Route::get('/admin/registered-users', [RegistrationController::class, 'registeredUsers'])
    ->name('admin.registered-users');
Route::get('/admin/registrations/search', [RegistrationController::class, 'searchRegistrations'])
    ->name('admin.registrations.search');

// Registration routes
Route::get('/register_npl_mgt', [RegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/register/store', [RegistrationController::class, 'store'])->name('registration.store');
Route::get('/register/success', [RegistrationController::class, 'success'])->name('registration.success');
// Route::get('/registrations', [RegistrationController::class, 'index'])->name('registration.index');

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

// Excel file download - Updated to use the correct controller
Route::get('/admin/registrations/export', [RegistrationController::class, 'export'])
    ->name('admin.registrations.export');

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
