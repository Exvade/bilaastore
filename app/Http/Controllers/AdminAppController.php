<?php

namespace App\Http\Controllers;

use App\Models\PremiumApp;
use App\Models\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminAppController extends Controller
{
    // Tampilkan daftar aplikasi
    public function index() {
    // Mengambil semua aplikasi beserta data harganya (plans)
    $apps = PremiumApp::with('plans')->get();
    return view('admin.apps.index', compact('apps'));
}

    // Tampilkan form tambah
    public function create() {
        return view('admin.apps.create');
    }

    // Simpan data ke database
   public function store(Request $request) {
    // 1. Validasi - Hapus 'whatsapp' => 'required'
    $request->validate([
        'nama' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
        'deskripsi' => 'required',
        'durasi' => 'required|array', // Pastikan durasi ada
        'harga' => 'required|array',  // Pastikan harga ada
    ]);

    // 2. Handle Upload Logo
    $path = null;
    if ($request->hasFile('logo')) {
        $path = $request->file('logo')->store('logos', 'public');
    }

    // 3. Simpan Data Aplikasi - Hapus baris whatsapp di sini
    $app = \App\Models\PremiumApp::create([
        'nama' => $request->nama,
        'logo' => $path,
        'deskripsi' => $request->deskripsi,
        // Baris whatsapp dihapus dari sini karena sudah jadi global settings
    ]);

    // 4. Simpan Data Durasi & Harga
    foreach ($request->durasi as $key => $val) {
        if (!empty($val)) { // Pastikan tidak menyimpan baris kosong
            \App\Models\Plan::create([
                'premium_app_id' => $app->id,
                'durasi' => $val,
                'harga' => $request->harga[$key],
            ]);
        }
    }

    return redirect('/admin/apps')->with('success', 'Aplikasi berhasil ditambah!');
}
    public function destroy($id) {
    $app = PremiumApp::findOrFail($id);
    
    // Hapus logo dari folder storage jika ada
    if($app->logo) {
        Storage::disk('public')->delete($app->logo);
    }
    
    $app->delete(); // Ini otomatis menghapus plans karena kita pakai 'cascade' di database
    return back()->with('success', 'Aplikasi berhasil dihapus!');
}
}