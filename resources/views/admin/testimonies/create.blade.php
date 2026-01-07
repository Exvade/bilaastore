@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Tambah Testimoni ✍️</h1>

    <form action="{{ route('testimonies.store') }}" method="POST"
        class="max-w-2xl bg-white p-8 rounded-[2.5rem] shadow-xl shadow-pink-100 border border-pink-50">
        @csrf
        <div class="mb-6">
            <label class="block mb-2 font-bold text-slate-700">Nama Pelanggan</label>
            <input type="text" name="nama"
                class="w-full p-4 bg-pink-50/50 border border-pink-100 rounded-2xl outline-none focus:bg-white focus:ring-2 focus:ring-pink-400 transition"
                placeholder="Contoh: Siska Amelia">
        </div>
        <div class="mb-6">
            <label class="block mb-2 font-bold text-slate-700">Isi Testimoni</label>
            <textarea name="teks" rows="4"
                class="w-full p-4 bg-pink-50/50 border border-pink-100 rounded-2xl outline-none focus:bg-white focus:ring-2 focus:ring-pink-400 transition"
                placeholder="Akunnya awet banget, makasih Bilaa!"></textarea>
        </div>
        <button type="submit"
            class="bg-pink-500 text-white px-8 py-4 rounded-2xl font-bold shadow-lg shadow-pink-200">Simpan Testimoni
            ✨</button>
    </form>
@endsection
