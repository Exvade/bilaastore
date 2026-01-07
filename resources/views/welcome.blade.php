<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilaa's Store - Premium Account</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .swiper-pagination-bullet-active {
            background: #ec4899 !important;
            /* pink-500 */
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
            lainnya dengan harga kantong pelajar. Aman dan bergaransi penuh!</p>
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

    <section class="py-24 bg-gradient-to-b from-white to-pink-50 overflow-hidden">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-slate-800 mb-4">Kesayangan <span
                        class="text-pink-500">Bilaa</span> Berkomentar ✨</h2>
                <p class="text-slate-500">Cek pengalaman manis mereka belanja di Bilaa's Store</p>
            </div>

            <div class="swiper testimonySwiper pb-12">
                <div class="swiper-wrapper">
                    @foreach ($testimonies as $t)
                        <div class="swiper-slide h-auto">
                            <div
                                class="bg-white p-8 rounded-[2.5rem] border border-pink-100 shadow-xl shadow-pink-100/50 h-full flex flex-col justify-between relative overflow-hidden group">
                                <div
                                    class="absolute top-4 right-6 text-pink-100 text-6xl font-serif opacity-50 group-hover:text-pink-200 transition-colors">
                                    “</div>

                                <div class="relative z-10">
                                    <div class="flex text-yellow-400 mb-4 gap-1">
                                        <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                                    </div>
                                    <p class="text-slate-600 italic leading-relaxed mb-6">
                                        "{{ $t->teks }}"
                                    </p>
                                </div>

                                <div class="flex items-center gap-4">
                                    <div
                                        class="w-12 h-12 bg-gradient-to-tr from-pink-500 to-rose-400 rounded-full flex items-center justify-center text-white font-bold shadow-lg shadow-pink-200">
                                        {{ substr($t->nama, 0, 1) }}
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-slate-800">{{ $t->nama }}</h4>
                                        <p class="text-xs text-pink-400 font-medium tracking-widest uppercase">Verified
                                            Buyer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <section id="katalog" class="container mx-auto px-4 py-16">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold mb-2">Katalog Akun</h3>
            <p class="text-slate-500 text-lg">Pilih aplikasi favoritmu di bawah ini ✨</p>
        </div>
        <section class="container mx-auto px-4 mb-12">
            <div class="max-w-2xl mx-auto relative">
                <input type="text" id="searchInput" placeholder="Cari aplikasi kesukaanmu..."
                    class="w-full pl-14 pr-6 py-5 bg-white border-2 border-pink-100 rounded-[2rem] shadow-xl shadow-pink-100/50 outline-none focus:border-pink-400 transition-all text-lg">

                <div class="absolute left-5 top-1/2 -translate-y-1/2 text-pink-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-7 h-7">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>
        </section>
        <div id="appGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($apps as $app)
                <div class="app-card relative h-full group z-0 hover:z-10 transition-all duration-500 hover:-translate-y-2"
                    data-name="{{ strtolower($app->nama) }}">

                    <div
                        class="absolute -inset-1 bg-gradient-to-br from-pink-200 via-rose-200 to-pink-300 rounded-[3rem] blur-md opacity-0 group-hover:opacity-70 transition duration-500 z-[-1]">
                    </div>

                    <div
                        class="relative bg-white h-full rounded-[2.5rem] p-8 flex flex-col justify-between border border-pink-100 shadow-xl shadow-pink-50/50 overflow-hidden z-10">
                        <div>
                            <div class="flex justify-between items-start mb-8">
                                <div
                                    class="w-24 h-24 bg-gradient-to-tr from-pink-50 to-white p-5 rounded-[1.5rem] border border-pink-50 shadow-sm group-hover:scale-105 transition-transform flex items-center justify-center relative overflow-hidden">
                                    <div
                                        class="absolute top-0 right-0 w-10 h-10 bg-pink-100 rounded-bl-full opacity-50">
                                    </div>
                                    @if ($app->logo)
                                        <img src="{{ asset('storage/' . $app->logo) }}"
                                            class="w-full h-full object-contain drop-shadow-md relative z-10">
                                    @else
                                        <span class="text-4xl">✨</span>
                                    @endif
                                </div>
                                <div class="flex flex-col gap-2 items-end">
                                    <span
                                        class="px-3 py-1.5 bg-pink-50 text-pink-500 text-[10px] font-bold uppercase tracking-wider rounded-full border border-pink-100">
                                        Garansi 🛡️
                                    </span>
                                </div>
                            </div>
                            <h3 class="text-3xl font-black text-slate-800 mb-2 leading-tight">{{ $app->nama }}</h3>
                            <div class="h-1 w-12 bg-pink-300 rounded-full mb-6"></div>
                        </div>

                        <div>
                            @php $hargaTermurah = $app->plans->min('harga'); @endphp
                            <div class="mb-6 p-4 bg-pink-50/50 rounded-2xl border border-pink-50/50">
                                <span class="block text-sm text-slate-500 font-medium mb-1">Mulai dari:</span>
                                <p
                                    class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-500">
                                    Rp {{ number_format($hargaTermurah, 0, ',', '.') }}
                                    <span class="text-lg text-slate-400 font-semibold">/paket</span>
                                </p>
                            </div>

                            <a href="{{ route('app.detail', $app->id) }}"
                                class="flex items-center justify-center gap-2 w-full bg-slate-800 text-white py-4 rounded-2xl font-bold text-lg shadow-lg hover:bg-pink-500 hover:shadow-pink-200 transition-all duration-300 group/btn relative overflow-hidden">
                                <span class="relative z-10">Pilih Paket</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="2.5" stroke="currentColor"
                                    class="w-5 h-5 relative z-10 group-hover/btn:translate-x-1 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                                <div
                                    class="absolute inset-0 h-full w-full scale-0 rounded-2xl transition-all duration-300 group-hover/btn:scale-100 group-hover/btn:bg-white/10">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <div id="noResults"
                class="hidden col-span-full text-center py-20 bg-white rounded-[3rem] border-2 border-dashed border-pink-100">
                <span class="text-6xl mb-4 block">😭</span>
                <h3 class="text-2xl font-bold text-slate-800">Ups! Enggak ketemu...</h3>
                <p class="text-slate-500 mt-2">Coba cari nama aplikasi lain ya sis.</p>
            </div>
        </div>
    </section>

    <section id="faq" class="container mx-auto px-4 py-20 max-w-4xl">
        <div class="text-center mb-12">
            <h3 class="text-3xl font-bold mb-2">Sering Ditanyakan (FAQ)</h3>
            <p class="text-slate-500">Masih ragu? Cek di sini ya!</p>
        </div>
        <div class="space-y-4">

            <div class="bg-white p-6 rounded-3xl border border-pink-100">
                <h4 class="font-bold text-pink-600 mb-2">Ada garansinya nggak sis?</h4>
                <p class="text-sm text-slate-500">Pastinya! Ada garansi penuh sesuai masa durasi yang kamu beli. Kalau
                    ada kendala, tinggal chat Bilaa aja.</p>
            </div>
            <div class="bg-white p-6 rounded-3xl border border-pink-100">
                <h4 class="font-bold text-pink-600 mb-2">Berapa lama proses pengirimannya?</h4>
                <p class="text-sm text-slate-500">Proses kilat! Setelah pembayaran dikonfirmasi, akun akan dikirim
                    dalam
                    waktu 5-30 menit (tergantung antrean).</p>
            </div>
        </div>
    </section>

    <footer class="py-12 bg-white text-center border-t border-pink-100">
        <p class="text-pink-500 font-bold text-xl italic mb-2">Bilaa's Store</p>
        <p class="text-slate-400 text-sm px-4">Terpercaya sejak 2025. Nonton puas, dompet ceria. ✨</p>
    </footer>

    <script>
        const searchInput = document.getElementById('searchInput');
        const appCards = document.querySelectorAll('.app-card');
        const noResults = document.getElementById('noResults');

        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            let hasResults = false;

            appCards.forEach(card => {
                const appName = card.getAttribute('data-name');

                if (appName.includes(searchTerm)) {
                    card.style.display = 'block';
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                }
            });

            // Tampilkan pesan jika tidak ada aplikasi yang cocok
            if (hasResults) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
        var swiper = new Swiper(".testimonySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true, // Membuat looping terus menerus
            autoplay: {
                delay: 3000, // Berjalan setiap 3 detik
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // Ketika layar >= 640px (Tablet)
                640: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
                // Ketika layar >= 1024px (Laptop)
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
            },
        });
    </script>
</body>

</html>
