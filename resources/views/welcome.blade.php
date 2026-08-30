<!DOCTYPE html>
<html lang="id" class="scroll-smooth overflow-x-hidden">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilaa's Store - Premium Account</title>
        <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {}
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #fdf2f8; 
            overflow-x: hidden;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        html.dark body {
            background-color: #020617;
        }

        html.dark .bg-grid-pattern {
            background-image: radial-gradient(rgba(244, 114, 182, 0.15) 2px, transparent 2px);
        }

        html.dark .glass {
            background: rgba(15, 23, 42, 0.8);
            border: 1px solid rgba(51, 65, 85, 0.6);
        }

        html.dark .glass-card {
            background: rgba(15, 23, 42, 0.85);
            border: 1px solid rgba(51, 65, 85, 0.6);
        }


        .swiper-pagination-bullet-active {
            background: #ec4899 !important;
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

        .blob {
            position: absolute;
            filter: blur(80px);
            z-index: -1;
            opacity: 0.6;
            animation: float 10s infinite alternate ease-in-out;
        }
        @keyframes float {
            0% { transform: translateY(0px) scale(1); }
            100% { transform: translateY(-50px) scale(1.1); }
        }

        .animate-float {
            animation: float 6s infinite alternate ease-in-out;
        }

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #fdf2f8; }
        ::-webkit-scrollbar-thumb { background: #fbcfe8; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #f472b6; }
    </style>
</head>

<body class="text-slate-800 dark:text-white antialiased selection:bg-pink-300 selection:text-pink-900 relative bg-grid-pattern overflow-x-hidden w-full">
    
    <!-- Background Blobs -->
    <div class="blob bg-pink-300 w-96 h-96 rounded-full top-[-10%] left-[-10%]"></div>
    <div class="blob bg-purple-300 w-80 h-80 rounded-full top-[20%] right-[-5%] animation-delay-2000"></div>
    <div class="blob bg-rose-200 w-96 h-96 rounded-full bottom-[10%] left-[20%] animation-delay-4000"></div>

    <!-- Navigation -->
    <nav class="glass sticky top-4 z-50 mx-4 md:mx-auto max-w-6xl rounded-2xl px-6 py-4 shadow-sm gs-nav">
        <div class="flex justify-between items-center">
            <a href="#" class="text-2xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500 italic tracking-tight">
                Bilaa's<span class="text-rose-400 font-medium">Store</span>
            </a>
            <div class="hidden md:flex gap-8 text-sm font-semibold text-slate-600 dark:text-slate-300">
                <a href="#cara-order" class="hover:text-pink-500 transition-colors">Cara Order</a>
                <a href="#keunggulan" class="hover:text-pink-500 transition-colors">Keunggulan</a>
                <a href="#katalog" class="hover:text-pink-500 transition-colors">Katalog</a>
                <a href="#faq" class="hover:text-pink-500 transition-colors">FAQ</a>
            </div>
            <div class="flex items-center gap-4">
                <button id="theme-toggle" class="p-2 rounded-full text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 transition-colors focus:outline-none">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <a href="#katalog" class="hidden md:block bg-gradient-to-r from-pink-500 to-rose-400 text-white px-6 py-2.5 rounded-full text-sm font-bold shadow-lg shadow-pink-300/50 hover:shadow-pink-400/50 hover:-translate-y-0.5 transition-all duration-300">
                    Beli Sekarang
                </a>
                <button id="mobile-menu-button" class="md:hidden p-2 text-slate-600 dark:text-slate-300 hover:text-pink-500 transition focus:outline-none">
                    <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-8 h-8 hidden">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden md:hidden absolute top-[calc(100%+1rem)] left-0 right-0 bg-white dark:bg-slate-800/95 dark:bg-slate-900/95 backdrop-blur-xl border border-pink-100 dark:border-slate-800 rounded-3xl p-6 shadow-2xl flex flex-col gap-4 text-center font-semibold text-slate-700 dark:text-slate-200 animate-fadeDown">
            <a href="#cara-order" class="mobile-link py-2 hover:text-pink-500">Cara Order</a>
            <a href="#keunggulan" class="mobile-link py-2 hover:text-pink-500">Keunggulan</a>
            <a href="#katalog" class="mobile-link py-2 hover:text-pink-500">Katalog</a>
            <a href="#faq" class="mobile-link py-2 hover:text-pink-500">FAQ</a>
            <a href="#katalog" class="mobile-link mt-2 bg-gradient-to-r from-pink-500 to-rose-400 text-white py-3 rounded-xl font-bold shadow-lg shadow-pink-300/50 flex items-center justify-center gap-2">
                <span>Beli Sekarang</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative pt-24 md:pt-32 pb-24 px-4 overflow-hidden">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                
                <!-- Text Content -->
                <div class="flex-1 text-center lg:text-left relative z-10">
                    <div class="gs-hero-badge inline-flex items-center gap-2 px-5 py-2 mb-8 text-xs font-bold tracking-widest text-pink-600 uppercase bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-full border border-pink-200 dark:border-slate-700 shadow-sm">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-pink-500"></span>
                        </span>
                        Trusted & Fast Response
                    </div>
                    <h2 class="gs-hero-title text-5xl md:text-6xl lg:text-7xl font-black text-slate-800 dark:text-white mb-6 leading-[1.1] tracking-tight">
                        Nonton Premium <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-rose-500 to-purple-500 italic font-serif">Gak Harus Mahal!</span>
                    </h2>
                    <p class="gs-hero-desc text-slate-600 dark:text-slate-300 max-w-xl mx-auto lg:mx-0 mb-10 text-lg font-medium leading-relaxed">
                        Nikmati akses premium Netflix, Spotify, Disney+, dan lainnya dengan harga kantong pelajar. Aman, legal, dan bergaransi penuh!
                    </p>
                    
                    <div class="gs-hero-btn flex flex-wrap justify-center lg:justify-start gap-4 mb-10">
                        <a href="#katalog" class="px-8 py-4 bg-slate-800 dark:bg-slate-200 text-white dark:text-slate-900 rounded-full font-bold text-lg shadow-xl shadow-slate-800/20 hover:bg-slate-900 hover:-translate-y-1 transition-all duration-300">Lihat Katalog</a>
                        <a href="#cara-order" class="px-8 py-4 bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 text-slate-700 dark:text-slate-200 rounded-full font-bold text-lg shadow-lg shadow-pink-100/50 hover:bg-white dark:bg-slate-800 hover:-translate-y-1 transition-all duration-300 border border-white dark:border-slate-700">Cara Kerjanya?</a>
                    </div>

                    <!-- Avatars -->
                    <div class="gs-hero-desc flex items-center justify-center lg:justify-start gap-4">
                        <div class="flex -space-x-3">
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-700 shadow-sm" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80" alt="User">
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-700 shadow-sm" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80" alt="User">
                            <img class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-700 shadow-sm" src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=100&q=80" alt="User">
                            <div class="w-10 h-10 rounded-full border-2 border-white dark:border-slate-700 shadow-sm bg-pink-100 flex items-center justify-center text-xs font-bold text-pink-600">+10k</div>
                        </div>
                        <div class="text-sm font-semibold text-slate-600 dark:text-slate-300">Pelanggan Puas</div>
                    </div>
                </div>

                <!-- CSS UI Composition (No Image) -->
                <div class="flex-1 relative w-full flex justify-center lg:justify-end gs-hero-img mt-12 lg:mt-0">
                    <div class="relative w-full max-w-[350px] aspect-square flex items-center justify-center">
                        <!-- Glow behind composition -->
                        <div class="absolute inset-0 bg-gradient-to-tr from-pink-400 to-purple-400 rounded-full blur-[80px] opacity-40 animate-pulse"></div>
                        
                        <!-- Main Center Card (Netflix style) -->
                        <div class="relative w-64 bg-slate-900/90 backdrop-blur-xl p-6 rounded-2xl border border-slate-700 shadow-2xl z-20 animate-float" style="animation-duration: 6s;">
                            <div class="flex justify-between items-start mb-6">
                                <div class="w-14 h-14 bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center text-white font-black text-2xl shadow-lg shadow-red-500/40">N</div>
                                <span class="px-3 py-1 bg-white dark:bg-slate-800/10 text-white/80 text-[10px] font-bold rounded-full uppercase tracking-wider">4K UHD</span>
                            </div>
                            <h4 class="text-white font-black text-xl mb-1">Netflix Premium</h4>
                            <p class="text-slate-400 dark:text-slate-500 text-sm mb-4">Sharing & Private</p>
                            <div class="w-full bg-slate-800 rounded-full h-2 mb-2">
                                <div class="bg-red-500 h-2 rounded-full w-3/4"></div>
                            </div>
                            <p class="text-[10px] text-slate-500 dark:text-slate-400 font-medium">Ready Stock</p>
                        </div>

                        <!-- Top Left Floating Card (Spotify style) -->
                        <div class="absolute -top-8 -left-2 sm:-left-12 lg:-left-20 w-44 sm:w-48 bg-white dark:bg-slate-800/95 dark:bg-slate-900/95 backdrop-blur-xl p-4 sm:p-5 rounded-2xl border border-white dark:border-slate-700 shadow-xl shadow-pink-100/50 z-10 transform -rotate-12 hover:rotate-0 hover:z-30 transition-all duration-500 animate-float" style="animation-duration: 5s; animation-delay: 1s;">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-600 rounded-xl mb-4 flex items-center justify-center text-white shadow-lg shadow-green-500/40">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2zm4.586 14.424c-.18.295-.563.387-.857.207-2.35-1.434-5.305-1.76-8.786-.963-.335.077-.67-.133-.746-.468-.077-.334.132-.67.467-.745 3.809-.87 7.076-.496 9.715 1.115.293.18.386.563.207.854zm1.214-2.71c-.226.368-.7.483-1.068.257-2.693-1.656-6.812-2.146-9.971-1.176-.412.126-.84-.105-.967-.517-.126-.412.106-.84.518-.967 3.614-1.11 8.163-.563 11.231 1.334.368.227.483.7.257 1.069zm.104-2.836c-3.23-1.918-8.56-2.096-11.642-1.162-.497.151-1.018-.13-1.169-.626-.151-.497.129-1.018.626-1.169 3.518-1.067 9.407-.866 13.115 1.336.446.265.594.838.33 1.284-.265.446-.838.594-1.26.337z"/></svg>
                            </div>
                            <h4 class="text-slate-800 dark:text-white font-black text-lg">Spotify</h4>
                            <p class="text-slate-500 dark:text-slate-400 text-[10px] mb-3">Individual / Family</p>
                            <div class="flex items-center gap-1.5">
                                <span class="flex h-2 w-2 relative">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                                </span>
                                <span class="text-[9px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Aktif 1 Tahun</span>
                            </div>
                        </div>

                        <!-- Bottom Right Floating Card (Disney style) -->
                        <div class="absolute -bottom-8 -right-2 sm:-right-8 lg:-right-16 w-44 sm:w-48 bg-gradient-to-br from-blue-600 to-blue-800 backdrop-blur-xl p-4 sm:p-5 rounded-2xl border border-blue-400/50 shadow-xl shadow-blue-900/30 z-30 transform rotate-12 hover:rotate-0 hover:z-40 transition-all duration-500 animate-float" style="animation-duration: 7s; animation-delay: 2s;">
                            <div class="w-12 h-12 bg-white dark:bg-slate-800 rounded-xl mb-4 flex items-center justify-center text-blue-700 font-black text-2xl shadow-lg shadow-white/20">D+</div>
                            <h4 class="text-white font-black text-lg leading-tight mb-1">Disney+<br>Hotstar</h4>
                            <div class="mt-4 pt-3 border-t border-blue-500/50 flex justify-between items-center">
                                <span class="text-blue-200 text-[10px] font-bold uppercase tracking-wider">Premium</span>
                                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Keunggulan Section -->
    <section id="keunggulan" class="container mx-auto px-4 py-20 relative z-10">
        <div class="glass-card rounded-2xl p-10 md:p-16 shadow-2xl shadow-pink-100/40 dark:shadow-none">
            <div class="text-center mb-12 gs-fade-up">
                <h3 class="text-3xl font-black mb-3 text-slate-800 dark:text-white">Kenapa Belanja di Bilaa?</h3>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Bukan sekadar murah, tapi kualitas dan pelayanan nomor satu.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="gs-feature-card bg-white dark:bg-slate-800/60 dark:bg-slate-900/60 p-8 rounded-2xl border border-white dark:border-slate-700 hover:bg-white dark:bg-slate-800 transition-colors duration-300 text-center shadow-sm">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-br from-green-400 to-emerald-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg shadow-green-200 rotate-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h4 class="font-bold text-xl mb-3 text-slate-800 dark:text-white">Proses Kilat</h4>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">Gak pake lama! Akun langsung dikirim 5-15 menit setelah pembayaran dikonfirmasi.</p>
                </div>
                <div class="gs-feature-card bg-white dark:bg-slate-800/60 dark:bg-slate-900/60 p-8 rounded-2xl border border-white dark:border-slate-700 hover:bg-white dark:bg-slate-800 transition-colors duration-300 text-center shadow-sm">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-br from-blue-400 to-indigo-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg shadow-blue-200 -rotate-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h4 class="font-bold text-xl mb-3 text-slate-800 dark:text-white">100% Legal & Aman</h4>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">Anti hold atau blokir. Semua akun berlangganan secara resmi, dijamin aman dipakai.</p>
                </div>
                <div class="gs-feature-card bg-white dark:bg-slate-800/60 dark:bg-slate-900/60 p-8 rounded-2xl border border-white dark:border-slate-700 hover:bg-white dark:bg-slate-800 transition-colors duration-300 text-center shadow-sm">
                    <div class="w-16 h-16 mx-auto bg-gradient-to-br from-pink-400 to-rose-500 text-white rounded-2xl flex items-center justify-center text-3xl mb-6 shadow-lg shadow-pink-200 rotate-3">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h4 class="font-bold text-xl mb-3 text-slate-800 dark:text-white">Full Garansi</h4>
                    <p class="text-slate-600 dark:text-slate-300 leading-relaxed">Ada kendala? Jangan panik, Bilaa siap bantu sampai tuntas sesuai masa garansi kamu!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Order -->
    <section id="cara-order" class="container mx-auto px-4 py-20 relative z-10">
        <div class="text-center mb-16 gs-fade-up">
            <h3 class="text-4xl font-black mb-3 text-slate-800 dark:text-white">Gimana Cara Ordernya?</h3>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Gampang banget, cuma butuh 4 langkah simpel!</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 relative">
            <div class="hidden md:block absolute top-12 left-[10%] right-[10%] h-0.5 bg-gradient-to-r from-transparent via-pink-300 to-transparent z-0 opacity-50"></div>
            
            <div class="gs-step-card text-center p-8 bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl shadow-xl shadow-pink-50/50 dark:shadow-none border border-white dark:border-slate-700 relative z-10 group hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-full flex items-center justify-center mx-auto mb-6 font-black text-2xl shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform">1</div>
                <h4 class="font-bold text-lg mb-3 text-slate-800 dark:text-white">Pilih Akun</h4>
                <p class="text-slate-600 dark:text-slate-300">Pilih aplikasi dan paket durasi yang kamu mau di katalog.</p>
            </div>
            <div class="gs-step-card text-center p-8 bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl shadow-xl shadow-pink-50/50 dark:shadow-none border border-white dark:border-slate-700 relative z-10 group hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-full flex items-center justify-center mx-auto mb-6 font-black text-2xl shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform">2</div>
                <h4 class="font-bold text-lg mb-3 text-slate-800 dark:text-white">Klik Pesan</h4>
                <p class="text-slate-600 dark:text-slate-300">Kamu akan diarahkan otomatis ke WhatsApp admin Bilaa.</p>
            </div>
            <div class="gs-step-card text-center p-8 bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl shadow-xl shadow-pink-50/50 dark:shadow-none border border-white dark:border-slate-700 relative z-10 group hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-full flex items-center justify-center mx-auto mb-6 font-black text-2xl shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform">3</div>
                <h4 class="font-bold text-lg mb-3 text-slate-800 dark:text-white">Pembayaran</h4>
                <p class="text-slate-600 dark:text-slate-300">Lakukan pembayaran via QRIS, E-Wallet, atau Transfer Bank.</p>
            </div>
            <div class="gs-step-card text-center p-8 bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-md rounded-2xl shadow-xl shadow-pink-50/50 dark:shadow-none border border-white dark:border-slate-700 relative z-10 group hover:-translate-y-2 transition-transform duration-300">
                <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-500 text-white rounded-full flex items-center justify-center mx-auto mb-6 font-black text-2xl shadow-lg shadow-pink-200 group-hover:scale-110 transition-transform">4</div>
                <h4 class="font-bold text-lg mb-3 text-slate-800 dark:text-white">Selesai!</h4>
                <p class="text-slate-600 dark:text-slate-300">Akun dikirim dan kamu bisa langsung mulai rebahan sambil nonton.</p>
            </div>
        </div>
    </section>

    <!-- Katalog Section -->
    <section id="katalog" class="container mx-auto px-4 py-20 relative z-10">
        <div class="text-center mb-12 gs-fade-up">
            <h3 class="text-4xl font-black mb-4 text-slate-800 dark:text-white">Katalog Aplikasi</h3>
            <p class="text-slate-500 dark:text-slate-400 text-lg mb-10">Pilih aplikasi favoritmu di bawah ini</p>
            
            <div class="max-w-2xl mx-auto relative group">
                <div class="absolute -inset-1 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                <input type="text" id="searchInput" placeholder="Cari aplikasi kesukaanmu..."
                    class="relative w-full pl-14 pr-6 py-5 bg-white dark:bg-slate-800/90 dark:bg-slate-900/90 backdrop-blur-md border border-pink-100 dark:border-slate-800 rounded-full shadow-lg outline-none focus:ring-2 focus:ring-pink-400/50 transition-all text-lg font-medium text-slate-700 dark:text-slate-200 placeholder:text-slate-400 dark:text-slate-500">
                <div class="absolute left-6 top-1/2 -translate-y-1/2 text-pink-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                </div>
            </div>
        </div>

        <div id="appGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($apps as $app)
                <div class="app-card gs-app-card relative h-full group" data-name="{{ strtolower($app->nama) }}">
                    <div class="absolute -inset-0.5 bg-gradient-to-br from-pink-300 to-purple-400 rounded-2xl blur opacity-0 group-hover:opacity-40 transition duration-500 z-0"></div>
                    
                    <div class="relative bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-xl h-full rounded-2xl p-8 flex flex-col justify-between border border-white dark:border-slate-700 shadow-xl shadow-pink-100/40 dark:shadow-none z-10 overflow-hidden">
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-pink-100 rounded-full blur-2xl opacity-50"></div>
                        
                        <div>
                            <div class="flex justify-between items-start mb-8">
                                <div class="w-20 h-20 bg-white dark:bg-slate-800 p-4 rounded-2xl border border-pink-50 dark:border-slate-800 shadow-md group-hover:scale-110 group-hover:-rotate-3 transition-all duration-500 relative z-10 flex items-center justify-center overflow-hidden">
                                    @if ($app->logo)
                                        <img src="{{ Str::startsWith($app->logo, 'http') ? $app->logo : asset('storage/' . $app->logo) }}" class="w-full h-full object-contain drop-shadow-sm">
                                    @else
                                        <svg class="w-8 h-8 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                                    @endif
                                </div>
                                <span class="px-4 py-1.5 bg-gradient-to-r from-pink-500 to-rose-400 text-white text-[10px] font-black uppercase tracking-widest rounded-full shadow-md shadow-pink-200">
                                    Bergaransi
                                </span>
                            </div>
                            <h3 class="text-3xl font-black text-slate-800 dark:text-white mb-2 tracking-tight">{{ $app->nama }}</h3>
                            <div class="h-1.5 w-12 bg-gradient-to-r from-pink-400 to-purple-400 rounded-full mb-6"></div>
                        </div>

                        <div class="relative z-10">
                            @php $hargaTermurah = $app->plans->min('harga'); @endphp
                            <div class="mb-6">
                                <span class="block text-sm text-slate-500 dark:text-slate-400 font-medium mb-1 uppercase tracking-wider">Mulai dari</span>
                                <p class="text-4xl font-black text-slate-800 dark:text-white flex items-baseline gap-1">
                                    Rp {{ number_format($hargaTermurah, 0, ',', '.') }}
                                    <span class="text-base text-slate-400 dark:text-slate-500 font-semibold">/paket</span>
                                </p>
                            </div>

                            <a href="{{ route('app.detail', $app->id) }}" class="flex items-center justify-center gap-2 w-full bg-slate-800 dark:bg-slate-200 text-white dark:text-slate-900 py-4 rounded-2xl font-bold text-lg shadow-lg hover:bg-gradient-to-r hover:from-pink-500 hover:to-rose-500 hover:shadow-pink-300 transition-all duration-300 group/btn">
                                <span>Pilih Paket</span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 group-hover/btn:translate-x-1 transition-transform">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach

            <!-- Empty State -->
            <div id="noResults" class="hidden col-span-full text-center py-20 bg-white dark:bg-slate-800/60 dark:bg-slate-900/60 backdrop-blur-sm rounded-2xl border-2 border-dashed border-pink-200 dark:border-slate-700">
                <svg class="w-20 h-20 mx-auto text-pink-400 mb-6 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <h3 class="text-3xl font-black text-slate-800 dark:text-white mb-2">Ups! Enggak ketemu...</h3>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Coba cari nama aplikasi lain ya sis, mungkin salah ketik.</p>
            </div>
        </div>
    </section>

    <!-- Testimoni -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-pink-100/50 to-transparent -z-10 transform -skew-y-3"></div>
        
        <div class="container mx-auto px-4 relative z-10">
            <div class="text-center mb-16 gs-fade-up">
                <h2 class="text-4xl md:text-5xl font-black text-slate-800 dark:text-white mb-4">
                    Kata <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">Mereka</span>
                </h2>
                <p class="text-slate-500 dark:text-slate-400 text-lg">Ribuan pelanggan udah buktiin nyamannya belanja di Bilaa's Store.</p>
            </div>

            <div class="swiper testimonySwiper pb-16 gs-fade-up">
                <div class="swiper-wrapper">
                    @foreach ($testimonies as $t)
                        <div class="swiper-slide h-auto">
                            <div class="glass-card p-8 md:p-10 rounded-2xl h-full flex flex-col justify-between relative overflow-hidden group hover:-translate-y-2 transition-transform duration-300">
                                <div class="absolute top-4 right-6 text-pink-200 text-8xl font-serif opacity-30 group-hover:text-pink-300 transition-colors">“</div>

                                <div class="relative z-10">
                                    <div class="flex text-yellow-400 mb-6 gap-1 text-lg">
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                        <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 24 24"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/></svg>
                                    </div>
                                    <p class="text-slate-700 dark:text-slate-200 font-medium italic leading-relaxed mb-8 text-lg">
                                        "{{ $t->teks }}"
                                    </p>
                                </div>

                                <div class="flex items-center gap-4 border-t border-pink-100 dark:border-slate-800 pt-6">
                                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-400 to-purple-500 text-white flex items-center justify-center border-2 border-white dark:border-slate-700 shadow-md flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                            <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.6-7.812-1.7a.75.75 0 01-.437-.695z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-black text-slate-800 dark:text-white text-lg">{{ $t->nama }}</h4>
                                        <p class="text-xs text-pink-500 font-bold tracking-widest uppercase">Verified Buyer</p>
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

    <!-- FAQ Accordion -->
    <section id="faq" class="container mx-auto px-4 py-20 max-w-3xl relative z-10">
        <div class="text-center mb-12 gs-fade-up">
            <h3 class="text-4xl font-black mb-4 text-slate-800 dark:text-white">Sering Ditanyakan (FAQ)</h3>
            <p class="text-slate-500 dark:text-slate-400 text-lg">Masih ragu? Cek pertanyaan yang sering ditanyakan di sini ya!</p>
        </div>
        
        <div class="space-y-4 gs-fade-up">
            <div class="accordion-item bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-2xl border border-pink-100 dark:border-slate-800 overflow-hidden transition-all duration-300">
                <button class="accordion-btn w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-bold text-lg text-slate-800 dark:text-white">Ada garansinya nggak kak?</span>
                    <svg class="w-6 h-6 text-pink-500 transform transition-transform duration-300 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div class="accordion-content hidden px-6 pb-6 text-slate-500 dark:text-slate-400">
                    <p>Pastinya! Ada garansi penuh sesuai masa durasi yang kamu beli. Kalau ada kendala, tinggal chat Bilaa aja, langsung dibantu sampai tuntas.</p>
                </div>
            </div>
            
            <div class="accordion-item bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-2xl border border-pink-100 dark:border-slate-800 overflow-hidden transition-all duration-300">
                <button class="accordion-btn w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-bold text-lg text-slate-800 dark:text-white">Berapa lama proses pengirimannya?</span>
                    <svg class="w-6 h-6 text-pink-500 transform transition-transform duration-300 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div class="accordion-content hidden px-6 pb-6 text-slate-500 dark:text-slate-400">
                    <p>Proses super kilat! Setelah pembayaran dikonfirmasi, akun akan dikirim dalam waktu 5-15 menit (tergantung antrean saat itu).</p>
                </div>
            </div>

            <div class="accordion-item bg-white dark:bg-slate-800/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-2xl border border-pink-100 dark:border-slate-800 overflow-hidden transition-all duration-300">
                <button class="accordion-btn w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">
                    <span class="font-bold text-lg text-slate-800 dark:text-white">Bisa perpanjang akun pakai email sendiri?</span>
                    <svg class="w-6 h-6 text-pink-500 transform transition-transform duration-300 icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                </button>
                <div class="accordion-content hidden px-6 pb-6 text-slate-500 dark:text-slate-400">
                    <p>Bisa banget untuk beberapa aplikasi tertentu. Silakan hubungi admin via WhatsApp untuk menanyakan ketersediaan perpanjang pakai email pribadi ya.</p>
                </div>
            </div>
        </div>
    </section>

    
    <!-- CTA Section -->
    <section class="container mx-auto px-4 py-12 relative z-10 gs-fade-up">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
            <!-- Background gradient -->
            <div class="absolute inset-0 bg-gradient-to-r from-pink-500 via-rose-500 to-purple-600"></div>
            
            <!-- Floating orbs for design -->
            <div class="absolute top-0 right-0 w-64 h-64 bg-white dark:bg-slate-800 opacity-10 rounded-full blur-3xl transform translate-x-1/2 -translate-y-1/2 animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-white dark:bg-slate-800 opacity-10 rounded-full blur-3xl transform -translate-x-1/2 translate-y-1/2 animate-pulse"></div>
            
            <!-- Content -->
            <div class="relative z-10 px-8 py-16 md:py-20 text-center flex flex-col items-center">
                <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight leading-tight">
                    Tunggu Apa Lagi? <br />
                    <span class="text-pink-200 italic font-serif">Mulai Nonton Sekarang!</span>
                </h2>
                <p class="text-pink-100 text-lg md:text-xl max-w-2xl mb-10 font-medium">
                    Gabung dengan ribuan pengguna lainnya yang sudah menikmati akses premium tanpa bikin dompet nangis. Klik tombol di bawah dan dapatkan akunmu dalam 5 menit.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#katalog" class="px-10 py-4 bg-white dark:bg-slate-800 text-pink-600 rounded-full font-black text-lg shadow-xl shadow-pink-900/20 hover:scale-105 hover:shadow-2xl hover:shadow-pink-900/40 transition-all duration-300 inline-flex items-center gap-2">
                        <span>Beli Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                    <a href="#faq" class="px-10 py-4 bg-pink-700/30 backdrop-blur-sm text-white border border-pink-300/30 rounded-full font-bold text-lg hover:bg-pink-700/50 transition-all duration-300">
                        Baca FAQ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="mt-12 bg-white dark:bg-slate-800/90 dark:bg-slate-900/90 backdrop-blur-md border-t border-pink-100 dark:border-slate-800 pt-16 pb-8">
        <div class="container mx-auto px-4 text-center">
            <a href="#" class="inline-block text-3xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500 italic tracking-tight mb-4">
                Bilaa's Store
            </a>
            <p class="text-slate-500 dark:text-slate-400 mb-8 max-w-md mx-auto">Nonton premium sepuasnya tanpa bikin dompet nangis. Kualitas resmi, harga merakyat!</p>
            <div class="flex justify-center gap-6 mb-12 text-slate-400 dark:text-slate-500">
                <a href="#" class="hover:text-pink-500 transition-colors">Instagram</a>
                <a href="#" class="hover:text-pink-500 transition-colors">WhatsApp</a>
                <a href="#" class="hover:text-pink-500 transition-colors">TikTok</a>
            </div>
            <div class="pt-8 border-t border-pink-50 dark:border-slate-800 text-slate-400 dark:text-slate-500 text-sm font-medium">
                © 2026 Bilaa's Store Premium. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
                // --- 0. Dark Mode Logic ---
        const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
        const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
        const themeToggleBtn = document.getElementById('theme-toggle');

        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            themeToggleLightIcon.classList.remove('hidden');
            document.documentElement.classList.add('dark');
        } else {
            themeToggleDarkIcon.classList.remove('hidden');
        }

        themeToggleBtn.addEventListener('click', function() {
            themeToggleDarkIcon.classList.toggle('hidden');
            themeToggleLightIcon.classList.toggle('hidden');

            if (localStorage.getItem('color-theme')) {
                if (localStorage.getItem('color-theme') === 'light') {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                }
            } else {
                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            }
        });

        // --- 1. Inisialisasi Elemen ---
        const searchInput = document.getElementById('searchInput');
        const appCards = document.querySelectorAll('.app-card');
        const noResults = document.getElementById('noResults');
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');
        const mobileLinks = document.querySelectorAll('.mobile-link');

        // --- 2. Mobile Menu Toggle ---
        function toggleMenu() {
            if (menu) menu.classList.toggle('hidden');
            if (menuIcon) menuIcon.classList.toggle('hidden');
            if (closeIcon) closeIcon.classList.toggle('hidden');
        }
        if (btn) btn.addEventListener('click', toggleMenu);
        if (mobileLinks) {
            mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));
        }

        // --- 2.5. Navbar Scroll Effect ---
        const navBar = document.querySelector('.gs-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navBar.classList.remove('glass');
                navBar.classList.add('bg-white', 'dark:bg-slate-900', 'shadow-md');
            } else {
                navBar.classList.add('glass');
                navBar.classList.remove('bg-white', 'dark:bg-slate-900', 'shadow-md');
            }
        });

        // --- 3. Search Functionality ---
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                let hasResults = false;

                appCards.forEach(card => {
                    const appName = card.getAttribute('data-name').toLowerCase();
                    if (appName.includes(searchTerm)) {
                        card.style.display = 'block';
                        hasResults = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                if (hasResults) {
                    noResults.classList.add('hidden');
                    if(typeof ScrollTrigger !== 'undefined') ScrollTrigger.refresh(); 
                } else {
                    noResults.classList.remove('hidden');
                }
            });
        }

        // --- 4. Swiper Initialization ---
        var swiper = new Swiper(".testimonySwiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true
            },
            breakpoints: {
                640: { slidesPerView: 2, spaceBetween: 30 },
                1024: { slidesPerView: 3, spaceBetween: 40 },
            },
        });

        // --- 5. FAQ Accordion ---
        const accordions = document.querySelectorAll('.accordion-item');
        accordions.forEach(acc => {
            const btn = acc.querySelector('.accordion-btn');
            const content = acc.querySelector('.accordion-content');
            const icon = acc.querySelector('.icon');

            btn.addEventListener('click', () => {
                accordions.forEach(otherAcc => {
                    if (otherAcc !== acc) {
                        otherAcc.querySelector('.accordion-content').classList.add('hidden');
                        otherAcc.querySelector('.icon').classList.remove('rotate-180');
                    }
                });
                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // --- 6. GSAP Animations ---
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline();
        
        tl.from(".gs-nav", { y: -50, opacity: 0, duration: 0.8, ease: "power3.out" })
          .from(".gs-hero-badge", { scale: 0.5, opacity: 0, duration: 0.5, ease: "back.out(1.7)" }, "-=0.4")
          .from(".gs-hero-title", { y: 50, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.2")
          .from(".gs-hero-desc", { y: 30, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.6")
          .from(".gs-hero-btn a", { y: 20, opacity: 0, duration: 0.6, stagger: 0.1, ease: "power2.out" }, "-=0.4")
          .from(".gs-hero-img", { scale: 0.9, opacity: 0, duration: 1, ease: "power3.out" }, "-=0.8");

        gsap.utils.toArray(".gs-fade-up").forEach(elem => {
            gsap.from(elem, {
                scrollTrigger: {
                    trigger: elem,
                    start: "top 85%", 
                    toggleActions: "play none none reverse"
                },
                y: 50,
                opacity: 0,
                duration: 0.8,
                ease: "power3.out"
            });
        });

        gsap.from(".gs-feature-card", {
            scrollTrigger: {
                trigger: "#keunggulan",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.15,
            ease: "power3.out"
        });

        gsap.from(".gs-step-card", {
            scrollTrigger: {
                trigger: "#cara-order",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.6,
            stagger: 0.15,
            ease: "back.out(1.2)"
        });

        gsap.from(".gs-app-card", {
            scrollTrigger: {
                trigger: "#appGrid",
                start: "top 85%",
            },
            y: 60,
            opacity: 0,
            duration: 0.8,
            stagger: 0.1,
            ease: "power3.out"
        });
    </script>
</body>
</html>
