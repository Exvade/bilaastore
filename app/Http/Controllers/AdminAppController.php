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
   public function edit($id) {
    $app = PremiumApp::with('plans')->findOrFail($id);
    return view('admin.apps.edit', compact('app'));
}

public function update(Request $request, $id) {
    $app = PremiumApp::findOrFail($id);

    $request->validate([
        'nama' => 'required',
        'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
        'deskripsi' => 'required',
    ]);

    // Update Logo jika ada file baru
    if ($request->hasFile('logo')) {
        if ($app->logo) { Storage::disk('public')->delete($app->logo); }
        $app->logo = $request->file('logo')->store('logos', 'public');
    }

    $app->update([
        'nama' => $request->nama,
        'deskripsi' => $request->deskripsi,
    ]);

    // Update Plans: Hapus yang lama, masukkan yang baru (cara paling simpel)
    $app->plans()->delete();
    foreach ($request->durasi as $key => $val) {
        if (!empty($val)) {
            \App\Models\Plan::create([
                'premium_app_id' => $app->id,
                'durasi' => $val,
                'harga' => $request->harga[$key],
            ]);
        }
    }

    return redirect()->route('apps.index')->with('success', 'Aplikasi berhasil diperbarui! ✨');
}

public function destroy($id) {
    $app = PremiumApp::findOrFail($id);
    if($app->logo) { Storage::disk('public')->delete($app->logo); }
    $app->delete();
    return back()->with('success', 'Aplikasi telah dihapus! 🗑️');
}
}