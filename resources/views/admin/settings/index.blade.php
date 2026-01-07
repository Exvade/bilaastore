@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-r-2xl shadow-sm animate-pulse">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Pengaturan Toko 🌸</h1>
        <p class="text-slate-500">Kelola informasi kontak utama Bilaa's Store</p>
    </div>

    <div class="max-w-2xl bg-white p-8 md:p-10 rounded-[2.5rem] shadow-xl shadow-pink-100 border border-pink-50">
        <form action="/admin/settings/update" method="POST" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="block text-lg font-bold text-slate-700">Nomor WhatsApp Order</label>
                <p class="text-sm text-slate-500 mb-2">Nomor ini akan digunakan otomatis untuk semua tombol "Pesan Sekarang"
                    di landing page.</p>

                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400 font-bold">
                        +
                    </span>
                    <input type="text" name="whatsapp" value="{{ $whatsapp->value ?? '' }}"
                        class="w-full pl-10 pr-4 py-4 bg-pink-50/50 border border-pink-100 rounded-2xl focus:ring-2 focus:ring-pink-400 focus:bg-white outline-none transition-all text-lg font-medium tracking-wider"
                        placeholder="Contoh: 62812345678">
                </div>

                <div class="flex items-start gap-2 mt-2 bg-blue-50 p-4 rounded-2xl border border-blue-100 text-blue-600">
                    <span class="text-xl">💡</span>
                    <p class="text-xs leading-relaxed">
                        Pastikan nomor diawali dengan kode negara tanpa tanda plus atau spasi. <br>
                        <strong>Benar:</strong> 62812345678 | <strong>Salah:</strong> 0812345, +62812345
                    </p>
                </div>
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full md:w-auto bg-pink-500 text-white px-10 py-4 rounded-2xl font-bold shadow-lg shadow-pink-200 hover:bg-pink-600 hover:-translate-y-1 transition-all duration-300 text-lg">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
