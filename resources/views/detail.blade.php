<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app->nama }} - Bilaa's Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50 text-slate-800">

    <nav class="bg-white py-4 shadow-sm mb-8">
        <div class="container mx-auto px-4">
            <a href="/" class="text-pink-500 font-bold">← Kembali ke Katalog</a>
        </div>
    </nav>

    <main class="container mx-auto px-4 pb-20">
        <div
            class="bg-white rounded-[2.5rem] shadow-xl shadow-pink-100 overflow-hidden border border-pink-100 flex flex-col md:flex-row">

            <div class="md:w-1/3 bg-pink-100 p-12 flex items-center justify-center">
                @if ($app->logo)
                    <img src="{{ asset('storage/' . $app->logo) }}" class="w-full drop-shadow-2xl">
                @endif
            </div>

            <div class="md:w-2/3 p-8 md:p-12">
                <h1 class="text-4xl font-extrabold mb-4">{{ $app->nama }}</h1>

                <div class="mb-8">
                    <h2 class="text-lg font-bold text-pink-500 mb-2">Deskripsi Produk:</h2>
                    <p class="text-slate-600 leading-relaxed whitespace-pre-line">
                        {{ $app->deskripsi }}
                    </p>
                </div>

                <h2 class="text-lg font-bold text-pink-500 mb-4">Pilih Paket Durasi:</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach ($app->plans as $plan)
                        <div
                            class="p-4 bg-pink-50 rounded-2xl border border-pink-100 flex justify-between items-center">
                            <div>
                                <p class="text-xs font-bold text-pink-400 uppercase tracking-widest">{{ $plan->durasi }}
                                </p>
                                <p class="text-xl font-bold">Rp {{ number_format($plan->harga, 0, ',', '.') }}</p>
                            </div>

                            @php
                                $waNumber = $whatsapp->value ?? '628xxx';
                                $msg = "Halo Bilaa, mau order {$app->nama} ({$plan->durasi}) dong sis ✨";
                                $waUrl = "https://wa.me/{$waNumber}?text=" . urlencode($msg);
                            @endphp

                            <a href="{{ $waUrl }}" target="_blank"
                                class="bg-pink-500 text-white px-4 py-2 rounded-xl text-sm font-bold">
                                Pesan
                            </a>
                        </div>
                    @endforeach
                </div>

                <div class="mt-10 p-4 bg-slate-50 rounded-2xl border border-dashed border-slate-200">
                    <p class="text-xs text-slate-400 text-center uppercase tracking-widest">Garansi Penuh • Proses 5-15
                        Menit • Legal Akun</p>
                </div>
            </div>
        </div>
    </main>

</body>

</html>
