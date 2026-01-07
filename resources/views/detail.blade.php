<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app->nama }} - Bilaa's Store Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50/50 text-slate-800">

    <nav class="container mx-auto px-4 py-6">
        <a href="/"
            class="inline-flex items-center gap-2 text-pink-500 font-semibold hover:text-pink-600 transition bg-white px-4 py-2 rounded-full shadow-sm border border-pink-50">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Kembali ke Katalog
        </a>
    </nav>

    <main class="container mx-auto px-4 pb-20">
        <div
            class="bg-white rounded-[3rem] shadow-2xl shadow-pink-100/50 overflow-hidden border border-pink-50 p-6 md:p-8">

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

                <div class="lg:col-span-5 lg:sticky lg:top-8 h-fit space-y-8">
                    <div
                        class="bg-gradient-to-b from-pink-100 to-pink-50/30 rounded-[2.5rem] p-12 flex items-center justify-center border border-pink-100 relative overflow-hidden group">
                        <div
                            class="absolute inset-0 bg-white/30 backdrop-blur-sm opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                        @if ($app->logo)
                            <img src="{{ asset('storage/' . $app->logo) }}"
                                class="w-4/5 drop-shadow-2xl relative z-10 transition-transform group-hover:scale-105">
                        @else
                            <div class="h-40 w-40 bg-pink-200 rounded-2xl animate-pulse"></div>
                        @endif
                    </div>

                    <div class="bg-pink-50/50 rounded-[2rem] p-8 border border-pink-100">
                        <h3 class="font-bold text-lg mb-4 flex items-center gap-2">
                            <span class="text-2xl">💖</span> Kenapa beli di Bilaa's?
                        </h3>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div class="bg-green-100 p-2 rounded-full text-green-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-slate-600 leading-tight pt-1"><strong
                                        class="block text-slate-700">Legal & Aman</strong>Anti hold/blokir karena
                                    langganan resmi.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="bg-blue-100 p-2 rounded-full text-blue-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <p class="text-sm text-slate-600 leading-tight pt-1"><strong
                                        class="block text-slate-700">Proses Kilat</strong>Akun dikirim 5-15 menit
                                    setelah bayar.</p>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="bg-purple-100 p-2 rounded-full text-purple-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <p class="text-sm text-slate-600 leading-tight pt-1"><strong
                                        class="block text-slate-700">Full Garansi</strong>Ada kendala? Bilaa siap bantu
                                    sampai tuntas!</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-7 space-y-10 py-4">

                    <div>
                        <h1 class="text-4xl md:text-5xl font-black text-slate-800 mb-4">{{ $app->nama }} Premium</h1>
                        <p class="text-lg text-slate-500">Pilih paket langganan yang cocok buat kamu di bawah ini ✨</p>
                    </div>

                    <div class="space-y-4">
                        @foreach ($app->plans as $plan)
                            @php
                                // Hitung "Diskon Ala-ala" agar terlihat menarik (Opsional)
                                $fakeOriginalPrice = $plan->harga * 1.3;
                            @endphp
                            <div
                                class="group relative bg-white rounded-[2rem] border-2 border-pink-50 hover:border-pink-400 p-6 flex flex-col sm:flex-row items-center justify-between shadow-sm hover:shadow-xl shadow-pink-50 overflow-hidden transition-all duration-300">

                                <div
                                    class="absolute left-0 top-0 bottom-0 w-3 bg-pink-400 group-hover:bg-pink-500 transition-colors">
                                </div>

                                <div class="flex-1 pl-6">
                                    <div class="flex items-center gap-3 mb-1">
                                        <h3 class="text-xl font-black text-slate-700">{{ $plan->durasi }}</h3>
                                        @if (str_contains(strtolower($plan->durasi), '1 bulan'))
                                            <span
                                                class="px-3 py-0.5 bg-gradient-to-r from-pink-500 to-rose-400 text-white text-[10px] font-bold uppercase tracking-wider rounded-full">Best
                                                Seller</span>
                                        @endif
                                    </div>
                                    <div class="flex items-baseline gap-2">
                                        <span class="text-sm text-slate-400 line-through decoration-pink-300/50">Rp
                                            {{ number_format($fakeOriginalPrice, 0, ',', '.') }}</span>
                                        <span class="text-2xl font-black text-pink-500">Rp
                                            {{ number_format($plan->harga, 0, ',', '.') }}</span>
                                    </div>
                                </div>

                                @php
                                    $waNumber = $whatsapp->value ?? '628xxx';
                                    $msg =
                                        "Halo Bilaa! Aku mau order *{$app->nama}* untuk paket *{$plan->durasi}* seharga Rp " .
                                        number_format($plan->harga, 0, ',', '.') .
                                        '. Masih ready kah?';
                                    $waUrl = "https://wa.me/{$waNumber}?text=" . urlencode($msg);
                                @endphp
                                <a href="{{ $waUrl }}" target="_blank"
                                    class="mt-4 sm:mt-0 flex items-center gap-2 bg-gradient-to-r from-green-500 to-emerald-500 hover:from-green-600 hover:to-emerald-600 text-white px-6 py-3 rounded-2xl font-bold shadow-lg shadow-green-200 hover:shadow-xl hover:-translate-y-1 transition-all">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                    Pesan via WA
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <hr class="border-pink-100 my-8">

                    <div class="space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold text-slate-800 mb-4 flex items-center gap-2">
                                <span class="text-pink-500">📝</span> Deskripsi & Ketentuan
                            </h2>
                            <div
                                class="bg-pink-50/50 p-8 rounded-[2rem] border border-pink-100 text-slate-700 leading-relaxed whitespace-pre-line prose-pink prose-lg">
                                {!! nl2br(e($app->deskripsi)) !!}
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-white p-6 rounded-[2rem] border border-pink-100 shadow-sm">
                                <h4 class="font-bold text-pink-500 mb-2 flex items-center gap-2">🚀 Cara Pakai</h4>
                                <p class="text-sm text-slate-500">Email & Password akan dikirim via WhatsApp. Tinggal
                                    login di aplikasi resminya. Jangan ubah data apapun ya!</p>
                            </div>
                            <div class="bg-white p-6 rounded-[2rem] border border-pink-100 shadow-sm">
                                <h4 class="font-bold text-pink-500 mb-2 flex items-center gap-2">🛡️ Klaim Garansi</h4>
                                <p class="text-sm text-slate-500">Jika akun bermasalah sebelum masa aktif habis,
                                    screenshot kendalanya dan kirim ke WA admin Bilaa.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer class="text-center py-8 text-sm text-pink-400 font-medium">
        © 2026 Bilaa's Store Premium. Happy Shopping! 🛍️
    </footer>

</body>

</html>
