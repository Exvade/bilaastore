@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 rounded-r-xl shadow-sm animate-bounce">
            {{ session('success') }}
        </div>
    @endif

    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Manajemen Produk Bilaa 🌸</h1>
        <a href="/admin/apps/create"
            class="bg-pink-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-pink-600 transition">+ Produk Baru</a>
    </div>

    <div class="bg-white rounded-[2rem] shadow-xl shadow-pink-100 overflow-hidden border border-pink-50">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-pink-50 text-pink-600 uppercase text-xs tracking-widest">
                    <th class="p-6">Produk</th>
                    <th class="p-6">Harga Termurah</th>
                    <th class="p-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-pink-50">
                @foreach ($apps as $app)
                    <tr class="hover:bg-pink-50/30 transition">
                        <td class="p-6">
                            <div class="flex items-center gap-4">
                                <img src="{{ asset('storage/' . $app->logo) }}"
                                    class="w-12 h-12 rounded-xl object-cover border border-pink-100">
                                <span class="font-bold text-slate-700 text-lg">{{ $app->nama }}</span>
                            </div>
                        </td>
                        <td class="p-6 text-slate-500 font-medium">
                            Rp {{ number_format($app->plans->min('harga'), 0, ',', '.') }}
                        </td>
                        <td class="p-6 flex justify-center gap-3">
                            <a href="{{ route('apps.edit', $app->id) }}"
                                class="text-blue-500 hover:bg-blue-50 px-4 py-2 rounded-xl font-bold transition">Edit</a>

                            <button onclick="openModal('{{ $app->id }}', '{{ $app->nama }}')"
                                class="text-red-500 hover:bg-red-50 px-4 py-2 rounded-xl font-bold transition">
                                Hapus
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div id="deleteModal"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black/50 backdrop-blur-sm p-4">
        <div class="bg-white rounded-[2.5rem] p-8 max-w-sm w-full text-center shadow-2xl border border-pink-100">
            <div
                class="w-20 h-20 bg-red-100 text-red-500 rounded-full flex items-center justify-center mx-auto mb-6 text-3xl">
                ⚠️</div>
            <h2 class="text-2xl font-bold mb-2">Hapus <span id="modalAppName"></span>?</h2>
            <p class="text-slate-500 mb-8">Data yang dihapus tidak bisa dikembalikan lagi ya Sis.</p>

            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex gap-3">
                    <button type="button" onclick="closeModal()"
                        class="flex-1 bg-slate-100 text-slate-500 py-3 rounded-2xl font-bold">Batal</button>
                    <button type="submit"
                        class="flex-1 bg-red-500 text-white py-3 rounded-2xl font-bold hover:bg-red-600 shadow-lg shadow-red-200">Ya,
                        Hapus!</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id, name) {
            document.getElementById('modalAppName').innerText = name;
            document.getElementById('deleteForm').action = "/admin/apps/delete/" + id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
@endsection
