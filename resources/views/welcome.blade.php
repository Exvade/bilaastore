<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilaa's Store - Premium Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }
    </style>
</head>

<body class="bg-pink-50 text-slate-800">

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 py-4 shadow-sm">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-pink-500 italic">Bilaa's<span class="text-rose-300">Store</span></h1>
            <div class="hidden md:flex gap-6 text-sm font-semibold text-slate-600">
                <a href="#cara-order" class="hover:text-pink-500">Cara Order</a>
                <a href="#katalog" class="hover:text-pink-500">Katalog</a>
                <a href="#faq" class="hover:text-pink-500">FAQ</a>
            </div>
            <a href="#katalog"
                class="bg-pink-500 text-white px-5 py-2 rounded-full text-sm font-semibold hover:shadow-lg hover:shadow-pink-300 transition">Beli
                Sekarang</a>
        </div>
    </nav>

    <header class="py-20 px-4 text-center bg-gradient-to-b from-white to-pink-50">
        <div
            class="inline-block px-4 py-1.5 mb-6 text-xs font-bold tracking-wider text-pink-500 uppercase bg-pink-100 rounded-full">
            Trusted & Fast Response ✨
        </div>
        <h2 class="text-4xl md:text-6xl font-extrabold text-slate-800 mb-6 leading-tight">Nonton Premium <br><span
                class="text-pink-500 font-serif italic">Gak Harus Mahal!</span></h2>
        <p class="text-slate-500 max-w-2xl mx-auto mb-10 text-lg">Nikmati akses premium Netflix, Spotify, Disney+, dan
            lainnya dengan harga kantong pelajar. Aman, legal, dan bergaransi penuh!</p>
    </header>

    <section id="cara-order" class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold mb-2">Gimana Cara Ordernya?</h3>
            <p class="text-slate-500">Gampang banget, cuma butuh 4 langkah!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="text-center p-6 bg-white rounded-3xl shadow-sm border border-pink-100">
                <div
                    class="w-12 h-12 bg-pink-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg shadow-pink-200">
                    1</div>
                <h4 class="font-bold mb-2">Pilih Akun</h4>
                <p class="text-sm text-slate-500">Pilih aplikasi dan paket durasi yang kamu mau di katalog.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-3xl shadow-sm border border-pink-100">
                <div
                    class="w-12 h-12 bg-pink-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg shadow-pink-200">
                    2</div>
                <h4 class="font-bold mb-2">Klik Pesan</h4>
                <p class="text-sm text-slate-500">Kamu akan diarahkan otomatis ke WhatsApp Bilaa.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-3xl shadow-sm border border-pink-100">
                <div
                    class="w-12 h-12 bg-pink-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg shadow-pink-200">
                    3</div>
                <h4 class="font-bold mb-2">Pembayaran</h4>
                <p class="text-sm text-slate-500">Lakukan pembayaran via Dana, GoPay, OVO, atau ShopeePay.</p>
            </div>
            <div class="text-center p-6 bg-white rounded-3xl shadow-sm border border-pink-100">
                <div
                    class="w-12 h-12 bg-pink-500 text-white rounded-2xl flex items-center justify-center mx-auto mb-4 font-bold text-xl shadow-lg shadow-pink-200">
                    4</div>
                <h4 class="font-bold mb-2">Selesai!</h4>
                <p class="text-sm text-slate-500">Akun dikirim dan kamu bisa langsung mulai menonton.</p>
            </div>
        </div>
    </section>

    <section id="katalog" class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold mb-2">Katalog Akun</h3>
            <p class="text-slate-500 text-lg">Pilih aplikasi favoritmu di bawah ini ✨</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($apps as $app)
                <div
                    class="bg-white rounded-[2rem] shadow-xl shadow-pink-100 overflow-hidden border border-pink-100 hover:translate-y-[-10px] transition-all duration-300">
                    <div class="h-44 bg-pink-100 flex items-center justify-center p-8">
                        @if ($app->logo)
                            <img src="{{ asset('storage/' . $app->logo) }}"
                                class="h-full object-contain drop-shadow-2xl">
                        @endif
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold mb-1">{{ $app->nama }}</h3>

                        @php
                            $hargaTermurah = $app->plans->min('harga');
                        @endphp

                        <p class="text-pink-500 font-bold text-lg mb-4">
                            Mulai dari Rp {{ number_format($hargaTermurah, 0, ',', '.') }}
                        </p>

                        <p class="text-slate-500 text-sm mb-6 line-clamp-2 leading-relaxed">
                            {{ $app->deskripsi }}
                        </p>

                        <a href="{{ route('app.detail', $app->id) }}"
                            class="block text-center bg-pink-500 text-white py-3 rounded-2xl font-bold shadow-md shadow-pink-200 hover:bg-pink-600 transition">
                            Lihat Detail & Harga
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <section id="faq" class="container mx-auto px-4 py-20 max-w-4xl">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold mb-2">Sering Ditanyakan (FAQ)</h3>
            <p class="text-slate-500">Masih ragu? Cek di sini ya!</p>
        </div>
        <div class="space-y-4">
            <div class="bg-white p-6 rounded-3xl border border-pink-100">
                <h4 class="font-bold text-pink-600 mb-2">Apakah akunnya legal dan aman?</h4>
                <p class="text-sm text-slate-500">Iya dong! Semua akun di Bilaa's Store didaftarkan secara legal, jadi
                    aman dari blokir selama pemakaian wajar.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-pink-100">
                <h4 class="font-bold text-pink-600 mb-2">Ada garansinya nggak sis?</h4>
                <p class="text-sm text-slate-500">Pastinya! Ada garansi penuh sesuai masa durasi yang kamu beli. Kalau
                    ada kendala, tinggal chat Bilaa aja.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-pink-100">
                <h4 class="font-bold text-pink-600 mb-2">Berapa lama proses pengirimannya?</h4>
                <p class="text-sm text-slate-500">Proses kilat! Setelah pembayaran dikonfirmasi, akun akan dikirim dalam
                    waktu 5-15 menit (tergantung antrean).</p>
            </div>
        </div>
    </section>

    <footer class="py-12 bg-white text-center border-t border-pink-100">
        <p class="text-pink-500 font-bold text-xl italic mb-2">Bilaa's Store</p>
        <p class="text-slate-400 text-sm px-4">Terpercaya sejak 2026. Nonton puas, dompet ceria. ✨</p>
    </footer>

</body>

</html>
