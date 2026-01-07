@extends('layouts.admin')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-slate-800">Apa Kata Mereka? 💬</h1>
        <a href="{{ route('testimonies.create') }}"
            class="bg-pink-500 text-white px-6 py-3 rounded-2xl font-bold hover:bg-pink-600 transition">+ Testimoni</a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach ($testimonies as $t)
            <div
                class="bg-white p-6 rounded-[2rem] shadow-xl shadow-pink-100 border border-pink-50 flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        <div
                            class="w-10 h-10 bg-pink-100 rounded-full flex items-center justify-center text-pink-500 font-bold">
                            {{ substr($t->nama, 0, 1) }}
                        </div>
                        <h3 class="font-bold text-slate-700">{{ $t->nama }}</h3>
                    </div>
                    <p class="text-slate-500 italic text-sm">"{{ $t->teks }}"</p>
                </div>

                <div class="flex gap-3 mt-6 justify-end">
                    <a href="{{ route('testimonies.edit', $t->id) }}" class="text-blue-500 font-bold text-sm">Edit</a>
                    <form action="{{ route('testimonies.destroy', $t->id) }}" method="POST"
                        onsubmit="return confirm('Hapus testimoni ini?')">
                        @csrf @method('DELETE')
                        <button class="text-red-500 font-bold text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
