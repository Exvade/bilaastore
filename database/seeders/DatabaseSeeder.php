<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\PremiumApp;
use App\Models\Plan;
use App\Models\Testimony;
use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Akun Utama (Bilaa)
        User::firstOrCreate(
            ['email' => 'bila@gmail.com'],
            [
                'name' => "Bilaa's Owner",
                'password' => Hash::make('bila141104'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'Admin Support',
                'password' => Hash::make('admin123'),
            ]
        );

        // 2. Data Dummy Aplikasi Premium
        $netflix = PremiumApp::firstOrCreate(
            ['nama' => 'Netflix Premium'],
            [
                'deskripsi' => "Netflix Premium - Nonton sepuasnya resolusi 4K UHD.\nBisa profile sendiri, anti hold, garansi penuh.",
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg' 
            ]
        );

        $spotify = PremiumApp::firstOrCreate(
            ['nama' => 'Spotify Premium'],
            [
                'deskripsi' => "Spotify Premium Individual/Family.\nDengerin musik tanpa iklan, bisa download lagu sesuka hati.",
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/2/26/Spotify_logo_with_text.svg'
            ]
        );

        $disney = PremiumApp::firstOrCreate(
            ['nama' => 'Disney+ Hotstar'],
            [
                'deskripsi' => "Disney+ Hotstar Premium.\nNonton film Marvel, Disney, Pixar favoritmu tanpa batas.",
                'logo' => 'https://upload.wikimedia.org/wikipedia/commons/3/3e/Disney%2B_logo.svg'
            ]
        );

        // 3. Data Dummy Plan
        if ($netflix->plans()->count() == 0) {
            Plan::create(['premium_app_id' => $netflix->id, 'durasi' => '1 Bulan (Sharing)', 'harga' => 35000]);
            Plan::create(['premium_app_id' => $netflix->id, 'durasi' => '3 Bulan (Sharing)', 'harga' => 95000]);
            Plan::create(['premium_app_id' => $netflix->id, 'durasi' => '1 Bulan (Private)', 'harga' => 120000]);
        }

        if ($spotify->plans()->count() == 0) {
            Plan::create(['premium_app_id' => $spotify->id, 'durasi' => '1 Bulan', 'harga' => 15000]);
            Plan::create(['premium_app_id' => $spotify->id, 'durasi' => '3 Bulan', 'harga' => 40000]);
            Plan::create(['premium_app_id' => $spotify->id, 'durasi' => '1 Tahun', 'harga' => 140000]);
        }

        if ($disney->plans()->count() == 0) {
            Plan::create(['premium_app_id' => $disney->id, 'durasi' => '1 Bulan (Sharing)', 'harga' => 20000]);
            Plan::create(['premium_app_id' => $disney->id, 'durasi' => '1 Bulan (Private)', 'harga' => 45000]);
        }

        // 4. Data Dummy Testimoni
        if (Testimony::count() == 0) {
            Testimony::create([
                'nama' => 'Siska',
                'teks' => 'Prosesnya bener-bener cepet banget, gak nyampe 5 menit akun udah dikirim. Layanannya ramah abis!'
            ]);
            Testimony::create([
                'nama' => 'Rangga',
                'teks' => 'Udah langganan Netflix 3 bulan di sini, aman sentosa tanpa kendala hold sama sekali. Mantap!'
            ]);
            Testimony::create([
                'nama' => 'Aurel',
                'teks' => 'Harganya miring tapi kualitas nggak murahan. Adminnya juga fast response pas diklaim garansi.'
            ]);
        }

        // 5. Data Dummy Settings (Whatsapp)
        Setting::updateOrCreate(
            ['key' => 'whatsapp_number'],
            ['value' => '6281234567890']
        );
    }
}