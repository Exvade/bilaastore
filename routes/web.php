<?php
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAppController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TestimonyController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/aplikasi/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('app.detail');
// Halaman Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Halaman Dashboard (Hanya bisa diakses jika sudah login)
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth');
 Route::delete('/admin/apps/delete/{id}', [AdminAppController::class, 'destroy']);
 Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::middleware('auth')->prefix('admin')->group(function () {
    // Tambahkan ->name('apps.index') di baris ini
    Route::get('/apps', [AdminAppController::class, 'index'])->name('apps.index');
    
    // Tambahkan ->name('apps.create') juga agar tombol "Tambah" tidak error
    Route::get('/apps/create', [AdminAppController::class, 'create'])->name('apps.create');
    Route::post('/apps/store', [AdminAppController::class, 'store'])->name('apps.store');
    // Route Baru: Edit & Update
    Route::get('/apps/edit/{id}', [AdminAppController::class, 'edit'])->name('apps.edit');
    Route::put('/apps/update/{id}', [AdminAppController::class, 'update'])->name('apps.update');
    
    // Route Baru: Delete
    Route::delete('/apps/delete/{id}', [AdminAppController::class, 'destroy'])->name('apps.delete');

    Route::get('/settings', [SettingController::class, 'index']);
    Route::post('/settings/update', [SettingController::class, 'update']);

    Route::resource('testimonies', TestimonyController::class);

   
});