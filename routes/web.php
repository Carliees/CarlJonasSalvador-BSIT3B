<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employmngcontroler;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    // Route::get('about', [\App\Http\Controllers\UserController::class, ''])->name('about');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    
    Route::get('employee_sample', [employmngcontroler::class, 'index'])->name('employee_sample.index');
    Route::post('employee_sample', [employmngcontroler::class, 'store'])->name('employee_sample.store');

    Route::get('employee_sample/{id}/edit', [employmngcontroler::class, 'edit'])->name('employee_sample.edit');
    Route::post('employee_sample/{id}', [employmngcontroler::class, 'update'])->name('employee_sample.update');

    Route::resource("/uniqueemployee", employmngcontroler::class);
});
