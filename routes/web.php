<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:admin|manager'])
    ->name('dashboard');

Route::middleware(['auth', 'verified', 'role:admin'])
    ->controller(AdminController::class)
    ->prefix('admin/')
    ->as('admin.')
    ->group(function (){
            Route::delete('user/{user}/delete', 'destroy')
                ->name('user.delete');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
