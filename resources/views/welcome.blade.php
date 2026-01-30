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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .swiper-pagination-bullet-active {
            background: #ec4899 !important;
            /* pink-500 */
        }

        @keyframes fadeDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeDown {
            animation: fadeDown 0.3s ease-out forwards;
        }

        /* Perbaikan Safari iOS untuk blur */
        .backdrop-blur-lg {
            -webkit-backdrop-filter: blur(16px);
        }

        .app-card {
            will-change: transform, opacity;
        }

        /* Tambahan agar saat pencarian fungsionalitas display tidak terganggu GSAP */
        .app-card[style*="display: none"] {
            opacity: 0 !important;
            transform: scale(0.9) !important;
        }
    </style>

</head>

<body class="bg-pink-50 text-slate-800">

    <nav class="bg-white/90 backdrop-blur-lg fixed top-0 left-0 right-0 z-[100] border-b border-pink-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <h1 class="text-2xl font-bold text-pink-500 italic">Bilaa's<span class="text-rose-300">Store</span></h1>

                <div class="hidden md:flex items-center gap-8">
                    <div class="flex gap-6 text-sm font-semibold text-slate-600">
                        <a href="#cara-order" class="hover:text-pink-500 transition">Cara Order</a>
                        <a href="#katalog" class="hover:text-pink-500 transition">Katalog</a>
                        <a href="#faq" class="hover:text-pink-500 transition">FAQ</a>
                    </div>
                    <a href="#katalog"
                        class="bg-pink-500 text-white px-6 py-2.5 rounded-full text-sm font-bold hover:shadow-lg hover:shadow-pink-200 transition active:scale-95">
                        Beli Sekarang
                    </a>
                </div>

                <button id="mobile-menu-button"
                    class="md:hidden p-2 text-slate-600 hover:text-pink-500 transition focus:outline-none">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke-width="2" stroke="currentColor" class="w-8 h-8 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div id="mobile-menu"
            class="hidden md:hidden bg-white/95 backdrop-blur-xl border-b border-pink-50 absolute w-full left-0 shadow-2xl animate-fadeDown">
            <div class="flex flex-col p-6 gap-4 text-center font-semibold text-slate-700">
                <a href="#cara-order" class="mobile-link py-3 border-b border-pink-50 hover:text-pink-500">Cara
                    Order</a>
                <a href="#katalog" class="mobile-link py-3 border-b border-pink-50 hover:text-pink-500">Katalog</a>
                <a href="#faq" class="mobile-link py-3 border-b border-pink-50 hover:text-pink-500">FAQ</a>
                <a href="#katalog"
                    class="mobile-link mt-2 bg-pink-500 text-white py-4 rounded-2xl font-bold shadow-lg shadow-pink-200">
                    Beli Sekarang ✨
                </a>
            </div>
        </div>
    </nav>

    <div class="h-20"></div>

    <header class="relative pt-12 pb-16 lg:pt-20 lg:pb-24 px-4 bg-white overflow-hidden">
        <div class="absolute top-0 right-0 w-1/4 h-full bg-pink-50/30 -skew-x-12 translate-x-10 z-0"></div>

        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 items-center">

                <div class="hero-text">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 mb-4 bg-pink-50 border border-pink-100 rounded-lg">
                        <span class="w-1.5 h-1.5 rounded-full bg-pink-500 animate-pulse"></span>
                        <span class="text-[9px] font-bold tracking-[0.2em] text-pink-500 uppercase">Trusted Store Since
                            2025</span>
                    </div>

                    <h2 class="text-4xl md:text-5xl font-black text-slate-900 leading-tight tracking-tight mb-6">
                        Akses Premium. <br>
                        <span class="text-pink-500 italic">Harga Minimum.</span>
                    </h2>

                    <p class="text-slate-500 text-base md:text-lg leading-relaxed max-w-sm mb-8">
                        Nikmati konten favoritmu tanpa batas. aman dan bergaransi penuh selama berlangganan.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="#katalog"
                            class="bg-slate-900 text-white px-8 py-3.5 rounded-xl font-bold hover:bg-pink-500 transition-all duration-300 shadow-lg shadow-slate-200 text-sm">
                            Beli Sekarang
                        </a>
                    </div>
                </div>

                <div class="relative h-[400px] flex items-center justify-center hero-visual mt-10 lg:mt-0">
                    <div class="absolute w-60 h-60 bg-pink-100 rounded-full blur-[80px] opacity-40"></div>

                    <div
                        class="card-float-1 absolute top-0 w-56 bg-white p-5 rounded-[2rem] shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-pink-50 z-30">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl overflow-hidden flex-shrink-0 p-1.5">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/1/18/Netflix_2016_N_logo.svg"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-[8px] font-bold text-slate-400 uppercase tracking-widest">Premium</p>
                                <p class="text-xs font-black text-slate-800 italic">Netflix</p>
                            </div>
                        </div>
                        <div class="text-xl font-black text-pink-500 italic">Rp 5k</div>
                    </div>

                    <div
                        class="card-float-2 absolute bottom-5 left-4 md:left-10 w-52 bg-white p-5 rounded-[2rem] shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-pink-50 z-20">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl overflow-hidden flex-shrink-0 p-1.5">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/960px-Spotify_icon.svg.png"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-[8px] font-bold text-slate-400 uppercase tracking-widest">Music</p>
                                <p class="text-xs font-black text-slate-800 italic">Spotify</p>
                            </div>
                        </div>
                        <div class="text-lg font-black text-slate-800 italic">Rp 18k</div>
                    </div>

                    <div
                        class="card-float-3 absolute bottom-5 right-4 md:right-10 bg-white p-5 rounded-[2rem] shadow-[0_15px_40px_rgba(0,0,0,0.04)] border border-pink-50 z-10 w-52">
                        <div class="flex items-center gap-3 mb-3">
                            <div class="w-10 h-10 bg-slate-100 rounded-xl overflow-hidden flex-shrink-0 p-1.5">
                                <img src="https://upload.wikimedia.org/wikipedia/id/3/36/CapCut_logo.png"
                                    class="w-full h-full object-contain">
                            </div>
                            <div>
                                <p class="text-[8px] font-bold text-slate-400 uppercase tracking-widest">Editing</p>
                                <p class="text-xs font-black text-slate-800 italic">CapCut</p>
                            </div>
                        </div>
                        <div class="text-lg font-black text-slate-800 italic">Rp 3k</div>
                    </div>
                </div>

            </div>
        </div>
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
        // 1. Registrasi Plugin
        gsap.registerPlugin(ScrollTrigger);

        // 2. Inisialisasi Elemen Dasar
        const searchInput = document.getElementById('searchInput');
        const appCards = document.querySelectorAll('.app-card');
        const noResults = document.getElementById('noResults');
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        // 3. REVEAL ANIMASI AWAL (Satu Timeline Utama)
        const masterTl = gsap.timeline();

        // Navbar
        masterTl.from("nav", {
            y: -100,
            opacity: 0,
            duration: 1,
            ease: "power4.out"
        });

        // Hero Text
        masterTl.from(".hero-text > *", {
            x: -50,
            opacity: 0,
            duration: 1,
            stagger: 0.2,
            ease: "power4.out"
        }, "-=0.5");

        // Hero Cards Reveal
        masterTl.from(".hero-visual div[class*='card-float']", {
            y: 100,
            opacity: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "back.out(1.7)"
        }, "-=1");

        // 4. ANIMASI LOOPING MELAYANG (AKTIF TERUS)
        gsap.to(".card-float-1", {
            y: -25,
            x: 10,
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
        gsap.to(".card-float-2", {
            y: 20,
            x: -15,
            duration: 3.5,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 0.3
        });
        gsap.to(".card-float-3", {
            y: -15,
            x: 10,
            rotation: 3,
            duration: 2.8,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 0.6
        });

        // 5. SETUP KATALOG (Mencegah Flicker)
        gsap.set(".app-card", {
            opacity: 0,
            y: 50,
            scale: 0.9
        });

        // 6. FUNGSI TOGGLE MENU
        function toggleMenu() {
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
        if (btn) btn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // 7. LOGIKA SEARCH
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let hasResults = false;
                appCards.forEach(card => {
                    const appName = card.getAttribute('data-name').toLowerCase();
                    if (appName.includes(searchTerm)) {
                        card.style.display = 'block';
                        gsap.to(card, {
                            opacity: 1,
                            scale: 1,
                            y: 0,
                            duration: 0.3
                        });
                        hasResults = true;
                    } else {
                        card.style.display = 'none';
                        card.style.opacity = '0';
                    }
                });
                hasResults ? noResults.classList.add('hidden') : noResults.classList.remove('hidden');
            });
        }

        // 8. SWIPER
        new Swiper(".testimonySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                640: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                }
            },
        });

        // 9. SCROLL ANIMATIONS
        gsap.from("#cara-order div.bg-white", {
            scrollTrigger: {
                trigger: "#cara-order",
                start: "top 80%"
            },
            y: 50,
            opacity: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power2.out"
        });

        gsap.to(".app-card", {
            scrollTrigger: {
                trigger: "#appGrid",
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 1,
            y: 0,
            scale: 1,
            duration: 0.8,
            stagger: 0.1,
            ease: "back.out(1.2)",
            onComplete: () => gsap.set(".app-card", {
                clearProps: "y,scale,transform"
            })
        });

        // 10. HOVER MAGNETIK
        document.querySelectorAll('.bg-pink-500').forEach(b => {
            b.addEventListener('mouseenter', () => gsap.to(b, {
                scale: 1.05,
                duration: 0.3
            }));
            b.addEventListener('mouseleave', () => gsap.to(b, {
                scale: 1,
                duration: 0.3
            }));
        });
    </script>
</body>

</html>
