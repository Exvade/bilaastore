<?php

namespace App\Http\Controllers;

use App\Models\PremiumApp;
use App\Models\Setting;
use App\Models\Testimony; // Jangan lupa panggil model Testimoni di sini
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 1. Ambil semua aplikasi beserta paket harganya
        $apps = PremiumApp::with('plans')->get();

        // 2. Ambil setting WhatsApp Global
        $whatsapp = Setting::where('key', 'whatsapp_number')->first();

        // 3. Ambil 6 testimoni terbaru untuk dipajang
        $testimonies = Testimony::latest()->take(6)->get();

        // 4. Kirim semua data ke view 'welcome'
        return view('welcome', compact('apps', 'whatsapp', 'testimonies'));
    }

    // Fungsi untuk halaman detail (tetap ada)
    public function show($id)
    {
        $app = PremiumApp::with('plans')->findOrFail($id);
        $whatsapp = Setting::where('key', 'whatsapp_number')->first();

        return view('detail', compact('app', 'whatsapp'));
    }
}