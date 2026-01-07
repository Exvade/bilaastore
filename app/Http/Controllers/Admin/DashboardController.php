<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PremiumApp;
use App\Models\Plan;
use App\Models\Setting;

class DashboardController extends Controller
{
    public function index()
    {
        $totalApps = PremiumApp::count();
        $totalPlans = Plan::count();
        $whatsapp = Setting::where('key', 'whatsapp_number')->first();

        return view('admin.dashboard', compact('totalApps', 'totalPlans', 'whatsapp'));
    }
}