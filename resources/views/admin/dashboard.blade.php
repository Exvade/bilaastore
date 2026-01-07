@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Halo, Bilaa! ✨</h1>
        <p class="text-slate-500">Semoga jualanmu hari ini laris manis ya!</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-pink-100 border border-pink-50 relative overflow-hidden">
            <div class="absolute right-[-10px] top-[-10px] text-pink-100 text-6xl font-bold italic opacity-20">Apps</div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Total Aplikasi</p>
            <h3 class="text-4xl font-black text-pink-500 mt-2">{{ $totalApps }}</h3>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-pink-100 border border-pink-50 relative overflow-hidden">
            <div class="absolute right-[-10px] top-[-10px] text-pink-100 text-6xl font-bold italic opacity-20">Plans</div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">Varian Harga</p>
            <h3 class="text-4xl font-black text-pink-500 mt-2">{{ $totalPlans }}</h3>
        </div>

        <div class="bg-white p-6 rounded-[2rem] shadow-xl shadow-pink-100 border border-pink-50 relative overflow-hidden">
            <div class="absolute right-[-10px] top-[-10px] text-green-100 text-6xl font-bold italic opacity-20">WA</div>
            <p class="text-slate-500 text-sm font-semibold uppercase tracking-wider">WA Aktif</p>
            <h3 class="text-xl font-black text-green-500 mt-4">+{{ $whatsapp->value ?? 'Belum diatur' }}</h3>
        </div>
    </div>

    <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-pink-100 border border-pink-50">
        <h3 class="text-xl font-bold text-slate-800 mb-6">Aksi Cepat ⚡</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="/admin/apps/create"
                class="flex flex-col items-center p-6 bg-pink-50 rounded-3xl hover:bg-pink-100 transition border border-pink-100">
                <span class="text-3xl mb-2">🎁</span>
                <span class="font-bold text-pink-600 text-sm">Tambah Produk</span>
            </a>
            <a href="/admin/settings"
                class="flex flex-col items-center p-6 bg-blue-50 rounded-3xl hover:bg-blue-100 transition border border-blue-100">
                <span class="text-3xl mb-2">📱</span>
                <span class="font-bold text-blue-600 text-sm">Ganti No WA</span>
            </a>
            <a href="/" target="_blank"
                class="flex flex-col items-center p-6 bg-purple-50 rounded-3xl hover:bg-purple-100 transition border border-purple-100">
                <span class="text-3xl mb-2">🌐</span>
                <span class="font-bold text-purple-600 text-sm">Lihat Web</span>
            </a>
            <div class="flex flex-col items-center p-6 bg-yellow-50 rounded-3xl border border-yellow-100">
                <span class="text-3xl mb-2">🎀</span>
                <span class="font-bold text-yellow-600 text-sm text-center italic">Be Kind to Yourself</span>
            </div>
        </div>
    </div>
@endsection
