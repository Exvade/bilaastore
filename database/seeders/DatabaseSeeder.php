<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menghapus data user yang lama agar tidak duplikat saat seeder dijalankan ulang
        // User::truncate(); // Opsional: Gunakan jika ingin mengosongkan tabel user dulu

        // 1. Akun Utama (Bilaa)
        User::create([
            'name' => "Bilaa's Owner",
            'email' => 'bila@gmail.com',
            'password' => Hash::make('bila141104'), // Ganti password yang aman ya!
        ]);

        // 2. Akun Admin Cadangan/Pembantu
        User::create([
            'name' => 'Admin Support',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        // 3. Akun Testing (Jika butuh buat coba-coba)
        User::create([
            'name' => 'Staff Toko',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('staffpastibisa'),
        ]);
    }
}