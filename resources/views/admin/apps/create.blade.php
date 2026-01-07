@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Tambah Aplikasi Premium</h1>
    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('apps.store') }}" method="POST" enctype="multipart/form-data"
        class="bg-white p-8 rounded-xl shadow-md">
        @csrf
        <div class="grid grid-cols-2 gap-6 mb-6">
            <div>
                <label class="block mb-2 font-semibold">Nama Aplikasi</label>
                <input type="text" name="nama" class="w-full border p-2 rounded" placeholder="Contoh: Netflix">
            </div>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Logo Aplikasi</label>
            <input type="file" name="logo" class="w-full border p-2 rounded">
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold">Deskripsi / Ketentuan</label>
            <textarea name="deskripsi" class="w-full border p-2 rounded" rows="3"></textarea>
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-semibold text-blue-600">Daftar Harga & Durasi</label>
            <div id="plan-container">
                <div class="flex gap-4 mb-2">
                    <input type="text" name="durasi[]" placeholder="Durasi (ex: 1 Bulan)"
                        class="flex-1 border p-2 rounded" required>
                    <input type="number" name="harga[]" placeholder="Harga (ex: 50000)" class="flex-1 border p-2 rounded"
                        required>
                </div>
            </div>
            <button type="button" onclick="addPlan()" class="mt-2 text-sm bg-gray-200 px-3 py-1 rounded">+ Tambah Baris
                Harga</button>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded font-bold hover:bg-blue-700">Simpan
            Aplikasi</button>
    </form>

    <script>
        function addPlan() {
            const container = document.getElementById('plan-container');
            const html = `
            <div class="flex gap-4 mb-2">
                <input type="text" name="durasi[]" placeholder="Durasi" class="flex-1 border p-2 rounded" required>
                <input type="number" name="harga[]" placeholder="Harga" class="flex-1 border p-2 rounded" required>
            </div>
        `;
            container.insertAdjacentHTML('beforeend', html);
        }
    </script>
@endsection
