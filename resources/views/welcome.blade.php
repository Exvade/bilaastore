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

    <header class="relative py-16 lg:py-24 px-4 bg-gradient-to-b from-white to-pink-50 overflow-hidden">
        <div class="container mx-auto max-w-6xl grid lg:grid-cols-2 gap-16 items-center">

            <div class="hero-text z-10">
                <div
                    class="inline-flex items-center gap-2 px-3 py-1 mb-6 text-[10px] font-bold tracking-[0.2em] text-pink-500 bg-white border border-pink-100 rounded-md uppercase">
                    Premium Digital Assistant
                </div>

                <h2 class="text-5xl md:text-6xl font-black text-slate-900 mb-6 leading-[1.1] tracking-tight">
                    Streaming Berkualitas, <br>
                    <span class="text-pink-500">Harga Terjangkau.</span>
                </h2>

                <p class="text-slate-500 text-lg mb-10 max-w-md leading-relaxed">
                    Akses resmi Netflix, Spotify, hingga YouTube Premium tanpa iklan. Layanan cepat, legal, dan dukungan
                    garansi penuh setiap hari.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#katalog"
                        class="bg-pink-500 text-white px-10 py-4 rounded-xl font-bold text-base shadow-xl shadow-pink-200 hover:bg-pink-600 transition-all text-center">
                        Lihat Paket Akun
                    </a>
                    <div class="flex items-center gap-3 px-6 py-4 bg-white/50 rounded-xl border border-slate-100">
                        <span class="text-sm font-bold text-slate-600">🛡️ Full Garansi</span>
                    </div>
                </div>
            </div>

            <div class="relative h-[400px] hidden lg:block hero-visual">
                <div
                    class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-pink-200 rounded-full blur-[100px] opacity-40">
                </div>

                <div
                    class="card-float-1 absolute top-0 right-10 w-64 bg-white p-6 rounded-[2rem] shadow-2xl border border-pink-50 z-30">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-10 h-10 bg-red-500 rounded-xl flex items-center justify-center text-white font-bold">
                            N</div>
                        <span class="font-bold text-slate-800 text-sm italic">Netflix Premium</span>
                    </div>
                    <p class="text-2xl font-black text-slate-900">Rp 25.000</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-widest mt-1 italic">Ultra HD 4K + HDR</p>
                </div>

                <div
                    class="card-float-2 absolute bottom-20 left-0 w-56 bg-white p-6 rounded-[2rem] shadow-2xl border border-pink-50 z-20">
                    <div class="flex items-center gap-4 mb-4">
                        <div
                            class="w-10 h-10 bg-green-500 rounded-xl flex items-center justify-center text-white font-bold">
                            S</div>
                        <span class="font-bold text-slate-800 text-sm italic">Spotify Fam</span>
                    </div>
                    <p class="text-xl font-black text-slate-900">Rp 15.000</p>
                    <p class="text-[10px] text-slate-400 uppercase tracking-widest mt-1 italic">No Ads • Offline</p>
                </div>

                <div
                    class="card-float-3 absolute top-32 -left-10 bg-pink-500 text-white p-5 rounded-[1.5rem] shadow-xl z-40 rotate-12">
                    <div class="flex items-center gap-3">
                        <span class="text-xl">✨</span>
                        <span
                            class="text-xs font-black uppercase tracking-tighter italic leading-none">Proses<br>Kilat!</span>
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
        // --- SEMUA SCRIPT DIGABUNG DI SINI ---

        // Inisialisasi Elemen
        const searchInput = document.getElementById('searchInput');
        const appCards = document.querySelectorAll('.app-card');
        const noResults = document.getElementById('noResults');
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');
        // 1. Reveal Animasi (Sekali muncul saat page load)
        const heroTl = gsap.timeline();
        heroTl.from(".hero-text > *", {
                x: -50,
                opacity: 0,
                duration: 1,
                stagger: 0.2,
                ease: "power4.out"
            })
            .from(".hero-visual div[class*='card-float']", {
                y: 100,
                opacity: 0,
                duration: 1.2,
                stagger: 0.2,
                ease: "back.out(1.7)"
            }, "-=1");

        // 2. Loop Melayang (Terus menerus/Aktif)
        // Kartu 1: Gerakan lambat & lebar
        gsap.to(".card-float-1", {
            y: -20,
            x: 10,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });

        // Kartu 2: Gerakan lebih cepat & kecil
        gsap.to(".card-float-2", {
            y: 15,
            x: -5,
            duration: 4,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut",
            delay: 0.5
        });

        // Kartu 3: Rotasi kecil & melayang
        gsap.to(".card-float-3", {
            rotation: 5,
            y: -10,
            duration: 2.5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut"
        });

        // Registrasi ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // 1. SETUP AWAL GSAP (Agar tidak flicker dan tidak hilang)
        // Kita set opacity 0 lewat JS, bukan CSS statis
        gsap.set(".app-card", {
            opacity: 0,
            y: 50,
            scale: 0.9
        });

        // 2. FUNGSI TOGGLE MENU
        function toggleMenu() {
            menu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        }
        btn.addEventListener('click', toggleMenu);
        mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

        // 3. LOGIKA SEARCH (Tetap di atas animasi agar tidak tertimpa)
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            let hasResults = false;

            appCards.forEach(card => {
                const appName = card.getAttribute('data-name');
                if (appName.includes(searchTerm)) {
                    card.style.display = 'block';
                    // Pastikan saat muncul kembali, opacity-nya 1
                    gsap.to(card, {
                        opacity: 1,
                        scale: 1,
                        y: 0,
                        duration: 0.3
                    });
                    hasResults = true;
                } else {
                    card.style.display = 'none';
                    card.style.opacity = '0'; // Set manual agar tidak transparan saat difilter
                }
            });

            if (hasResults) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });

        // 4. SWIPER
        var swiper = new Swiper(".testimonySwiper", {
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
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 40
                },
            },
        });

        // 5. ANIMASI GSAP (REVEAL)
        // Navbar
        gsap.from("nav", {
            y: -100,
            opacity: 0,
            duration: 1,
            ease: "power4.out"
        });

        // Hero Header
        const heroTl = gsap.timeline();
        heroTl.from("header h2", {
                y: 50,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out"
            })
            .from("header p", {
                y: 30,
                opacity: 0,
                duration: 0.8
            }, "-=0.4")
            .from("header div.inline-block", {
                scale: 0.5,
                opacity: 0,
                duration: 0.5,
                ease: "back.out(1.7)"
            }, "-=0.6");

        // Cara Order
        gsap.from("#cara-order div.bg-white", {
            scrollTrigger: {
                trigger: "#cara-order",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.6,
            stagger: 0.2,
            ease: "power2.out"
        });

        // PERBAIKAN UTAMA: Animasi Katalog
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
            onComplete: function() {
                // Kita hapus transform saja, tapi biarkan opacity tetap diatur oleh class/search
                gsap.set(".app-card", {
                    clearProps: "y,scale,transform"
                });
            }
        });

        // Hover Magnetik
        const buttons = document.querySelectorAll('.bg-pink-500');
        buttons.forEach(btn => {
            btn.addEventListener('mouseenter', () => gsap.to(btn, {
                scale: 1.05,
                duration: 0.3
            }));
            btn.addEventListener('mouseleave', () => gsap.to(btn, {
                scale: 1,
                duration: 0.3
            }));
        });
    </script>
</body>

</html>
