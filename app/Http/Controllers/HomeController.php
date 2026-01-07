<?php

namespace App\Http\Controllers;

use App\Models\PremiumApp;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $apps = PremiumApp::with('plans')->get();
        $whatsapp = Setting::where('key', 'whatsapp_number')->first();
        
        return view('welcome', compact('apps', 'whatsapp'));
    }
    public function show($id)
{
    // Ambil aplikasi berdasarkan ID beserta paket-paket harganya
    $app = PremiumApp::with('plans')->findOrFail($id);
    $whatsapp = Setting::where('key', 'whatsapp_number')->first();

    return view('detail', compact('app', 'whatsapp'));
}
}