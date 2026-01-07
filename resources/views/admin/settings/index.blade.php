@extends('layouts.admin')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Pengaturan Umum</h1>

    <div class="max-w-md bg-white p-6 rounded-xl shadow-md">
        <form action="/admin/settings/update" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block mb-2 font-semibold">Nomor WhatsApp Order</label>
                <input type="text" name="whatsapp" value="{{ $whatsapp->value ?? '' }}" class="w-full border p-2 rounded"
                    placeholder="Contoh: 62812345678">
                <p class="text-xs text-gray-500 mt-1">*Gunakan kode negara (62), tanpa tanda +</p>
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700 font-bold">
                Simpan Perubahan
            </button>
        </form>
    </div>
@endsection
