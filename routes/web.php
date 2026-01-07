<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAppController;
use App\Http\Controllers\Admin\SettingController;

// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Dashboard (Hanya bisa diakses jika sudah login)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');
 Route::delete('/admin/apps/delete/{id}', [AdminAppController::class, 'destroy']);

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/apps', [AdminAppController::class, 'index']);
    Route::get('/apps/create', [AdminAppController::class, 'create']);
    Route::post('/apps/store', [AdminAppController::class, 'store'])->name('apps.store');

    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings/update', [SettingController::class, 'update']);

   
});