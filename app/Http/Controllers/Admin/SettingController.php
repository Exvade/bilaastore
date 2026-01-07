<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index() {
        // Ambil data WA, jika belum ada buat default kosong
        $whatsapp = Setting::where('key', 'whatsapp_number')->first();
        return view('admin.settings.index', compact('whatsapp'));
    }

    public function update(Request $request) {
        Setting::updateOrCreate(
            ['key' => 'whatsapp_number'],
            ['value' => $request->whatsapp]
        );
        return back()->with('success', 'Nomor WhatsApp berhasil diperbarui!');
    }
}