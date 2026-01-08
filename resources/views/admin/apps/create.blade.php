@extends('layouts.admin')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-black text-slate-800">Tambah Produk Baru 🎀</h1>
        <p class="text-slate-500 italic">Masukkan detail aplikasi premium untuk katalog Bilaa's Store</p>
    </div>

    @if ($errors->any())
        <div class="bg-red-50 border border-red-100 text-red-600 px-6 py-4 rounded-2xl mb-8 shadow-sm">
            <p class="font-bold mb-2">Ups! Ada yang kurang nih sis: </p>
            <ul class="list-disc list-inside text-sm opacity-80">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('apps.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-8 md:p-10 rounded-[2.5rem] shadow-xl shadow-pink-100 border border-pink-50">
        @csrf

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <div>
                <label class="block mb-3 font-bold text-slate-700 ml-1">Nama Aplikasi</label>
                <input type="text" name="nama"
                    class="w-full px-5 py-4 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all placeholder:text-slate-300"
                    placeholder="Contoh: Netflix Premium">
            </div>

            <div>
                <label class="block mb-3 font-bold text-slate-700 ml-1">Logo Aplikasi</label>
                <input type="file" name="logo"
                    class="w-full px-5 py-3 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-100 file:text-pink-700 hover:file:bg-pink-200">
            </div>
        </div>

        <div class="mb-8">
            <label class="block mb-3 font-bold text-slate-700 ml-1">Deskripsi / Ketentuan</label>
            <textarea name="deskripsi" rows="4"
                class="w-full px-5 py-4 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all placeholder:text-slate-300"
                placeholder="Tuliskan keunggulan akun atau aturan garansi di sini..."></textarea>
        </div>

        <div class="mb-10 p-6 md:p-8 bg-pink-50/30 rounded-[2rem] border border-pink-100 border-dashed">
            <label class="block mb-6 font-black text-pink-500 uppercase tracking-widest text-sm">💎 Daftar Harga &
                Durasi</label>

            <div id="plan-container" class="space-y-4">
                <div class="flex flex-col md:flex-row gap-4">
                    <input type="text" name="durasi[]" placeholder="Durasi (ex: 1 Bulan)"
                        class="flex-1 px-5 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 outline-none transition-all"
                        required>
                    <input type="number" name="harga[]" placeholder="Harga (ex: 35000)"
                        class="flex-1 px-5 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 outline-none transition-all"
                        required>
                </div>
            </div>

            <button type="button" onclick="addPlan()"
                class="mt-6 inline-flex items-center gap-2 text-pink-500 font-bold hover:text-pink-600 transition ml-1">
                <span class="bg-pink-100 w-6 h-6 rounded-full flex items-center justify-center text-lg">+</span>
                Tambah Baris Harga
            </button>
        </div>

        <div class="flex flex-col md:flex-row gap-4">
            <button type="submit"
                class="flex-1 bg-gradient-to-r from-pink-500 to-rose-400 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-pink-200 hover:shadow-pink-300 hover:-translate-y-1 transition-all duration-300 text-lg">
                Simpan Aplikasi ✨
            </button>
            <a href="{{ route('apps.index') }}"
                class="px-8 py-4 bg-slate-100 text-slate-500 rounded-2xl font-bold hover:bg-slate-200 transition-all text-center">
                Batal
            </a>
        </div>
    </form>

    <script>
        function addPlan() {
            const container = document.getElementById('plan-container');
            const html = `
        <div class="flex flex-col md:flex-row gap-4 animate-fadeIn">
            <input type="text" name="durasi[]" placeholder="Durasi" class="flex-1 px-5 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 outline-none transition-all" required>
            <input type="number" name="harga[]" placeholder="Harga" class="flex-1 px-5 py-4 bg-white border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 outline-none transition-all" required>
        </div>
        `;
            container.insertAdjacentHTML('beforeend', html);
        }
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeIn {
            animation: fadeIn 0.3s ease-out forwards;
        }
    </style>
@endsection
