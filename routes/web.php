<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

// home
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// admin
Route::middleware('auth')->group(function () {
    Route::get('/admin/menu', [MenuController::class, 'adminIndex'])->name('admin.menu');
    Route::get('/admin/menu/create', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/admin/menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/admin/menu/{menu}/edit', [MenuController::class, 'edit'])->name('menu.edit');
    Route::put('/admin/menu/{menu}', [MenuController::class, 'update'])->name('menu.update');
    Route::delete('/admin/menu/{menu}', [MenuController::class, 'destroy'])->name('menu.destroy');

    Route::get('/admin/messages', [ContactController::class, 'adminIndex'])->name('admin.messages');
});
