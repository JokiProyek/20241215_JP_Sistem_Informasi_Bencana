<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DisasterController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect('/dashboard');
    });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Bencana Routes
    Route::get('/bencana/alam', [DisasterController::class, 'indexAlam'])->name('disasters.alam');
    Route::get('/bencana/non-alam', [DisasterController::class, 'indexNonAlam'])->name('disasters.non-alam');
    Route::resource('disasters', DisasterController::class)->except(['index']);
    
    // Pasien Routes
    Route::resource('patients', PatientController::class);
    Route::get('/patients/create', [PatientController::class, 'create'])->name('patients.create');
    Route::post('/patients', [PatientController::class, 'store'])->name('patients.store');
    
     // Master Data Routes
    Route::prefix('master')->name('master.')->group(function () {
        Route::resource('disaster-types', DisasterTypeController::class);
        Route::resource('users', UserController::class);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
