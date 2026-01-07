<?php

namespace App\Http\Controllers;

use App\Models\PremiumApp;
use App\Models\Setting;
use App\Models\Testimony; // Jangan lupa panggil model Testimoni di sini
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(Request $request)
{
    // Ambil kata kunci dari input search
    $search = $request->input('search');

    // Query aplikasi
    $apps = PremiumApp::with('plans')
        ->when($search, function($query) use ($search) {
            return $query->where('nama', 'like', '%' . $search . '%');
        })
        ->get();

    $whatsapp = Setting::where('key', 'whatsapp_number')->first();
    $testimonies = Testimony::latest()->take(6)->get();

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