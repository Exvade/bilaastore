@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6 italic text-pink-600">Edit Aplikasi: {{ $app->nama }}</h1>

    <form action="{{ route('apps.update', $app->id) }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-8 rounded-3xl shadow-lg border border-pink-100">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Nama Aplikasi</label>
            <input type="text" name="nama" value="{{ $app->nama }}"
                class="w-full border p-3 rounded-2xl focus:ring-pink-400 outline-none">
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Logo Baru (Kosongkan jika tidak diubah)</label>
            <input type="file" name="logo" class="w-full border p-2 rounded-2xl">
            <p class="text-xs text-gray-400 mt-2">Logo saat ini: {{ $app->logo }}</p>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Deskripsi</label>
            <textarea name="deskripsi" class="w-full border p-3 rounded-2xl" rows="4">{{ $app->deskripsi }}</textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-pink-500 italic">Daftar Harga & Durasi</label>
            <div id="plan-container">
                @foreach ($app->plans as $plan)
                    <div class="flex gap-4 mb-3">
                        <input type="text" name="durasi[]" value="{{ $plan->durasi }}"
                            class="flex-1 border p-3 rounded-2xl" required>
                        <input type="number" name="harga[]" value="{{ $plan->harga }}"
                            class="flex-1 border p-3 rounded-2xl" required>
                    </div>
                @endforeach
            </div>
            <button type="button" onclick="addPlan()" class="mt-2 text-sm text-pink-500 font-bold">+ Tambah Baris</button>
        </div>

        <div class="flex gap-3">
            <button type="submit"
                class="bg-pink-500 text-white px-8 py-3 rounded-2xl font-bold hover:bg-pink-600 transition">Update
                Simpan</button>
            <a href="{{ route('apps.index') }}" class="bg-gray-100 text-gray-500 px-8 py-3 rounded-2xl font-bold">Batal</a>
        </div>
    </form>

    <script>
        function addPlan() {
            const container = document.getElementById('plan-container');
            container.insertAdjacentHTML('beforeend',
                `<div class="flex gap-4 mb-3"><input type="text" name="durasi[]" placeholder="Durasi" class="flex-1 border p-3 rounded-2xl" required><input type="number" name="harga[]" placeholder="Harga" class="flex-1 border p-3 rounded-2xl" required></div>`
                );
        }
    </script>
@endsection
