<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app->nama }} - Bilaa's Store Premium</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- GSAP Core -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #fdf2f8; 
            overflow-x: hidden;
        }

        .bg-grid-pattern {
            background-image: radial-gradient(rgba(244, 114, 182, 0.25) 2px, transparent 2px);
            background-size: 30px 30px;
        }

        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(249, 168, 212, 0.4);
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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #fdf2f8; }
        ::-webkit-scrollbar-thumb { background: #fbcfe8; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #f472b6; }
    </style>
</head>

<body class="text-slate-800 antialiased selection:bg-pink-300 selection:text-pink-900 relative min-h-screen flex flex-col bg-grid-pattern">

    <!-- Blur Background Image specific to App -->
    <div class="fixed inset-0 z-[-2] opacity-[0.03]">
        <img src="https://images.unsplash.com/photo-1611162617474-5b21e879e113?auto=format&fit=crop&w=2000&q=80" alt="Background" class="w-full h-full object-cover">
    </div>

    <!-- Background Blobs -->
    <div class="blob bg-pink-300 w-96 h-96 rounded-full top-[-10%] left-[-10%]"></div>
    <div class="blob bg-purple-300 w-80 h-80 rounded-full top-[40%] right-[-10%] animation-delay-2000"></div>
    <div class="blob bg-rose-200 w-96 h-96 rounded-full bottom-[-10%] left-[20%] animation-delay-4000"></div>

    <!-- Navigation -->
    <nav class="gs-nav container mx-auto px-4 py-6 relative z-10">
        <a href="/" class="inline-flex items-center gap-2 text-pink-600 font-bold hover:text-pink-700 transition-colors bg-white/90 backdrop-blur-md px-6 py-3 rounded-full shadow-lg shadow-pink-100 border border-white group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-5 h-5 group-hover:-translate-x-1 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Kembali ke Katalog
        </a>
    </nav>

    <main class="container mx-auto px-4 pb-20 flex-grow relative z-10">
        <div class="gs-main-card glass-card rounded-[3rem] shadow-2xl shadow-pink-100/50 overflow-hidden p-6 md:p-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Left Column (Product Image & Perks) -->
                <div class="lg:col-span-5 lg:sticky lg:top-8 h-fit space-y-8">
                    <div class="relative bg-gradient-to-br from-white to-pink-50 rounded-[2.5rem] p-12 flex items-center justify-center border border-white shadow-inner overflow-hidden group">
                        <div class="absolute inset-0 bg-pink-300 blur-3xl opacity-20 group-hover:opacity-40 transition-opacity duration-700"></div>
                        
                        <div class="gs-logo-container relative z-10 w-full flex justify-center">
                            @if ($app->logo)
                                <img src="{{ Str::startsWith($app->logo, 'http') ? $app->logo : asset('storage/' . $app->logo) }}" class="gs-logo w-4/5 md:w-3/5 drop-shadow-2xl">
                            @else
                                <div class="h-40 w-40 bg-pink-200 rounded-3xl animate-pulse"></div>
                            @endif
                        </div>
                    </div>

                    <div class="gs-fade-up bg-white/70 backdrop-blur-sm rounded-[2rem] p-8 border border-white shadow-lg shadow-pink-50/50">
                        <h3 class="font-black text-xl mb-5 flex items-center gap-2 text-slate-800">
                            Benefit Order di Sini
                        </h3>
                        <ul class="space-y-5">
                            <li class="flex items-start gap-4">
                                <div class="bg-gradient-to-br from-green-400 to-emerald-500 p-2.5 rounded-xl text-white shadow-md shadow-green-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                                <div class="pt-0.5">
                                    <strong class="block text-slate-800 font-bold">100% Legal & Aman</strong>
                                    <p class="text-sm text-slate-500 mt-1 leading-relaxed">Berlangganan resmi, anti blokir atau hold.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="bg-gradient-to-br from-blue-400 to-indigo-500 p-2.5 rounded-xl text-white shadow-md shadow-blue-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div class="pt-0.5">
                                    <strong class="block text-slate-800 font-bold">Proses Kilat</strong>
                                    <p class="text-sm text-slate-500 mt-1 leading-relaxed">Akun dikirim 5-15 menit setelah pembayaran.</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div class="bg-gradient-to-br from-pink-400 to-rose-500 p-2.5 rounded-xl text-white shadow-md shadow-pink-200">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                                </div>
                                <div class="pt-0.5">
                                    <strong class="block text-slate-800 font-bold">Full Garansi</strong>
                                    <p class="text-sm text-slate-500 mt-1 leading-relaxed">Ada kendala? Langsung chat Bilaa, pasti dibantu!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Column (Pricing & Info) -->
                <div class="lg:col-span-7 space-y-10 py-4">
                    
                    <div class="gs-fade-up">
                        <div class="inline-block px-4 py-1.5 mb-4 text-xs font-black tracking-widest text-pink-600 uppercase bg-pink-100 rounded-full border border-pink-200">
                            Kategori Premium
                        </div>
                        <h1 class="text-5xl md:text-6xl font-black text-slate-800 mb-4 tracking-tight">{{ $app->nama }}</h1>
                        <p class="text-lg text-slate-500">Pilih paket langganan yang cocok buat kamu di bawah ini</p>
                    </div>

                    <div class="space-y-5">
                        @foreach ($app->plans as $plan)
                            @php
                                $fakeOriginalPrice = $plan->harga * 1.35;
                                $isBestSeller = str_contains(strtolower($plan->durasi), '1 bulan');
                            @endphp
                            <div class="gs-plan-card gs-fade-up relative bg-white/90 backdrop-blur-sm rounded-[2rem] border-2 {{ $isBestSeller ? 'border-pink-400 shadow-pink-200/50' : 'border-white hover:border-pink-300' }} p-6 md:p-8 flex flex-col md:flex-row items-center justify-between shadow-xl shadow-pink-100/30 overflow-hidden group transition-colors duration-300">
                                
                                <div class="absolute top-0 left-0 bottom-0 w-2 {{ $isBestSeller ? 'bg-gradient-to-b from-pink-400 to-rose-500' : 'bg-pink-200 group-hover:bg-pink-400' }} transition-colors"></div>

                                <div class="flex-1 w-full pl-6 md:pl-4 mb-6 md:mb-0">
                                    <div class="flex items-center gap-3 mb-2">
                                        <h3 class="text-2xl font-black text-slate-800">{{ $plan->durasi }}</h3>
                                        @if ($isBestSeller)
                                            <span class="px-3 py-1 bg-gradient-to-r from-pink-500 to-rose-500 text-white text-[10px] font-black uppercase tracking-widest rounded-full shadow-md">
                                                Best Seller
                                            </span>
                                        @endif
                                    </div>
                                    <div class="flex items-end gap-3">
                                        <span class="text-4xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500">
                                            Rp {{ number_format($plan->harga, 0, ',', '.') }}
                                        </span>
                                        <span class="text-base text-slate-400 line-through decoration-pink-300 decoration-2 font-medium pb-1">
                                            Rp {{ number_format($fakeOriginalPrice, 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>

                                @php
                                    $waNumber = $whatsapp->value ?? '628xxx';
                                    $msg = "Halo Bilaa! Aku mau order *{$app->nama}* untuk paket *{$plan->durasi}* seharga Rp " . number_format($plan->harga, 0, ',', '.') . '. Masih ready kah?';
                                    $waUrl = "https://wa.me/{$waNumber}?text=" . urlencode($msg);
                                @endphp
                                
                                <a href="{{ $waUrl }}" target="_blank" class="w-full md:w-auto shrink-0 relative z-10 flex items-center justify-center gap-2 bg-pink-500 hover:bg-pink-600 text-white px-8 py-4 rounded-[1.5rem] font-bold text-lg shadow-xl shadow-pink-300 hover:shadow-pink-400 hover:-translate-y-1 transition-all duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.463 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" /></svg>
                                    Pesan via WA
                                </a>
                            </div>
                        @endforeach
                    </div>

                    <hr class="border-pink-200/50 my-10">

                    <div class="space-y-8 gs-fade-up">
                        <div>
                            <h2 class="text-3xl font-black text-slate-800 mb-6 flex items-center gap-3">
                                <svg class="w-8 h-8 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg> Deskripsi & Ketentuan
                            </h2>
                            <div class="bg-white/80 backdrop-blur-md p-8 md:p-10 rounded-[2.5rem] border border-white shadow-lg shadow-pink-50/50 text-slate-600 leading-relaxed whitespace-pre-line prose-pink prose-lg">
                                {!! nl2br(e($app->deskripsi)) !!}
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="bg-gradient-to-br from-pink-50 to-white p-8 rounded-[2rem] border border-pink-100 shadow-sm">
                                <h4 class="font-black text-lg text-slate-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg> Cara Pakai
                                </h4>
                                <p class="text-slate-500 leading-relaxed">Email & Password akan dikirim via WhatsApp. Tinggal login di aplikasi resminya (jangan ubah profile/password ya).</p>
                            </div>
                            <div class="bg-gradient-to-br from-pink-50 to-white p-8 rounded-[2rem] border border-pink-100 shadow-sm">
                                <h4 class="font-black text-lg text-slate-800 mb-3 flex items-center gap-2">
                                    <svg class="w-5 h-5 text-pink-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg> Klaim Garansi
                                </h4>
                                <p class="text-slate-500 leading-relaxed">Jika akun bermasalah sebelum masa aktif habis, cukup screenshot dan kirim ke WA admin. Beres!</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

    <footer class="mt-auto text-center py-8 text-sm text-pink-400 font-bold tracking-wide relative z-10">
        © 2026 Bilaa's Store Premium. Happy Shopping!
    </footer>

    <script>
        const tl = gsap.timeline();
        
        tl.from(".gs-nav", { y: -30, opacity: 0, duration: 0.6, ease: "power3.out" })
          .from(".gs-main-card", { y: 40, opacity: 0, duration: 0.8, ease: "power3.out" }, "-=0.4")
          .from(".gs-logo-container", { scale: 0.8, opacity: 0, duration: 0.8, ease: "back.out(1.5)" }, "-=0.2")
          .from(".gs-fade-up", { y: 30, opacity: 0, duration: 0.6, stagger: 0.15, ease: "power2.out" }, "-=0.4");

        gsap.to(".gs-logo", {
            y: -15,
            rotation: 2,
            duration: 2.5,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    </script>
</body>
</html>
