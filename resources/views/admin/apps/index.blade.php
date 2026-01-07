@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold">Daftar Aplikasi</h1>
        <a href="/admin/apps/create" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">+ Tambah
            Aplikasi</a>
    </div>

    <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-slate-50 border-b">
                <tr>
                    <th class="p-4 font-semibold text-slate-700">Logo</th>
                    <th class="p-4 font-semibold text-slate-700">Nama Aplikasi</th>
                    <th class="p-4 font-semibold text-slate-700">Paket Harga</th>
                    <th class="p-4 font-semibold text-slate-700 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                @foreach ($apps as $app)
                    <tr>
                        <td class="p-4">
                            @if ($app->logo)
                                <img src="{{ asset('storage/' . $app->logo) }}" class="w-12 h-12 object-cover rounded-lg">
                            @else
                                <div
                                    class="w-12 h-12 bg-gray-200 rounded-lg flex items-center justify-center text-xs text-gray-400">
                                    No Img</div>
                            @endif
                        </td>
                        <td class="p-4 font-medium">{{ $app->nama }}</td>
                        <td class="p-4">
                            <ul class="text-sm text-gray-600">
                                @foreach ($app->plans as $plan)
                                    <li>• {{ $plan->durasi }} (Rp {{ number_format($plan->harga, 0, ',', '.') }})</li>
                                @endforeach
                            </ul>
                        </td>
                        <td class="p-4 text-center">
                            <form action="/admin/apps/delete/{{ $app->id }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500 hover:text-red-700 font-medium">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
