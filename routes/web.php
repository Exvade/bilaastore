<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Dashboard (Hanya bisa diakses jika sudah login)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');