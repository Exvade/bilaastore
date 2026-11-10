@extends('layouts.storefront')

@push('head')
    <link rel="preload" as="image" href="{{ asset('storefront/images/me-time.webp') }}" fetchpriority="high">
@endpush

@section('content')
    @php $contactUrl = \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau tanya tentang aplikasi premium."); @endphp
    <section class="hero container">
        <div class="hero-copy">
            <span class="eyebrow"><span class="tiny-flower" aria-hidden="true">✳</span> PREMIUM UNTUK SETIAP MOOD</span>
            <h1>Sedikit <em>premium,</em><br>banyak happy<span class="pink-dot">.</span></h1>
            <p>Maraton drama, putar lagu favorit, sampai bikin karya. Aplikasi premium pilihanmu, dengan harga yang bikin senyum.</p>
            <div class="hero-actions"><a class="button button-primary" href="#katalog">Temukan favoritmu <span class="button-circle"><x-store-icon name="arrow-up"/></span></a><a class="text-link" href="#cara-order"><span class="play-circle"><x-store-icon name="play"/></span> Gimana cara ordernya?</a></div>
            <div class="hero-note"><x-store-icon name="heart"/><span>Untuk me time yang lebih <strong>kamu banget.</strong></span></div>
        </div>
        <div class="hero-visual">
            <div class="hero-image-frame"><img src="{{ asset('storefront/images/me-time.webp') }}" alt="Laptop dan headphone pink, pita satin, serta minuman stroberi untuk menemani waktu santai" width="1100" height="1100" fetchpriority="high"></div>
            <div class="hero-sticker"><x-store-icon name="sparkle"/><span>Jadwal hari ini:<br><strong>bahagiain diri sendiri.</strong></span></div>
            <div class="hero-caption"><span class="music-disc"><x-store-icon name="headphones"/></span><span>Mode: me time<strong>Sedikit jeda, banyak cerita.</strong></span><span class="sound-wave" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></span></div>
            <span class="hero-doodle" aria-hidden="true">♡</span><span class="hero-sparkle" aria-hidden="true">✧</span>
        </div>
    </section>

    <div class="benefit-strip"><div class="container"><span><x-store-icon name="grid"/> Paket sesuai kebutuhan</span><span><x-store-icon name="wallet"/> Harga ramah di kantong</span><span><x-store-icon name="chat"/> Pesan langsung via WhatsApp</span><span><x-store-icon name="heart"/> Admin siap bantu</span></div></div>

    <section class="catalog-section section-space container" id="katalog" aria-labelledby="catalog-title">
        <div class="section-heading"><div><span class="eyebrow">PILIHAN KECIL, HAPPY BESAR</span><h2 id="catalog-title">Temukan <em>favoritmu.</em><span class="heading-star" aria-hidden="true">✳</span></h2></div><p>Satu tempat untuk semua kesukaanmu.<br>Tinggal pilih, lalu nikmati.</p></div>
        <div class="catalog-toolbar">
            <div class="category-filters" role="group" aria-label="Filter kategori aplikasi">
                <button type="button" class="filter-chip is-active" data-category="semua" aria-pressed="true"><x-store-icon name="grid"/> Semua</button>
                <button type="button" class="filter-chip" data-category="nonton" aria-pressed="false"><x-store-icon name="play"/> Nonton</button>
                <button type="button" class="filter-chip" data-category="musik" aria-pressed="false"><x-store-icon name="headphones"/> Musik</button>
                <button type="button" class="filter-chip" data-category="produktif" aria-pressed="false"><x-store-icon name="sparkle"/> Produktif</button>
                @if($apps->contains(fn ($product) => \App\Support\Storefront::category($product) === 'lainnya'))<button type="button" class="filter-chip" data-category="lainnya" aria-pressed="false">Lainnya</button>@endif
            </div>
            <form class="catalog-search" action="{{ url('/') }}#katalog" role="search"><label class="sr-only" for="catalog-search">Cari aplikasi</label><x-store-icon name="search"/><input type="search" id="catalog-search" name="search" value="{{ request('search') }}" placeholder="Cari aplikasi favorit..." autocomplete="off"><button class="clear-search icon-button" type="button" aria-label="Hapus pencarian" hidden><x-store-icon name="close"/></button></form>
        </div>
        <div class="catalog-meta"><p id="catalog-count" role="status" aria-live="polite">{{ $apps->count() }} aplikasi untuk kamu</p><span>Pilih yang bikin kamu happy <x-store-icon name="heart"/></span></div>
        <div class="product-grid" data-server-search="{{ request('search') ? 'true' : 'false' }}">
            @foreach ($apps as $app)
                @php
                    $category = \App\Support\Storefront::category($app);
                    $logoUrl = \App\Support\Storefront::logoUrl($app);
                    $cheapest = $app->plans->min('harga');
                @endphp
                <article class="product-card" data-name="{{ mb_strtolower($app->nama) }}" data-category="{{ $category }}">
                    <a href="{{ route('app.detail', $app->id) }}" class="product-art art-{{ $category }}" tabindex="-1" aria-hidden="true">
                        <span class="product-category">{{ \App\Support\Storefront::categoryLabel($app) }}</span><span class="art-sparkle">✧</span>
                        <div class="product-logo">@if($logoUrl)<img src="{{ $logoUrl }}" alt="" width="110" height="70" loading="lazy" data-logo><span class="logo-fallback" hidden>{{ mb_substr($app->nama, 0, 1) }}</span>@else<span class="logo-fallback">{{ mb_substr($app->nama, 0, 1) }}</span>@endif</div>
                        <span class="art-orbit" aria-hidden="true"></span><span class="art-caption">a little more {{ $category === 'musik' ? 'good vibes' : ($category === 'produktif' ? 'creativity' : 'happiness') }} ♡</span>
                    </a>
                    <div class="product-info">
                        <div class="product-title-row"><h3><a href="{{ route('app.detail', $app->id) }}">{{ $app->nama }}</a></h3><x-store-icon name="sparkle"/></div>
                        <p class="product-description">{{ \Illuminate\Support\Str::limit(preg_replace('/\s+/', ' ', $app->deskripsi), 100) }}</p>
                        <div class="product-price-row"><div><span class="price-label">{{ $cheapest !== null ? 'Mulai dari' : 'Pilihan paket' }}</span>@if($cheapest !== null)<p class="price">Rp{{ number_format($cheapest, 0, ',', '.') }}<span>/ paket</span></p>@else<p class="price price-empty">Segera hadir</p>@endif</div><a class="product-arrow" href="{{ route('app.detail', $app->id) }}" aria-label="Lihat paket {{ $app->nama }}"><x-store-icon name="arrow-up"/></a></div>
                    </div>
                </article>
            @endforeach
        </div>
        <div class="empty-state" id="catalog-empty" @if($apps->isNotEmpty()) hidden @endif><span class="empty-icon"><x-store-icon name="search"/></span><h3>Belum ketemu yang kamu cari?</h3><p>Coba kata kunci atau kategori lain, ya.</p><a href="{{ url('/') }}#katalog" class="button button-outline" data-reset-catalog>Lihat semua aplikasi <x-store-icon name="arrow"/></a></div>
        <div class="catalog-help"><x-store-icon name="chat"/><p>Bingung pilih paket? Bilaa bantu cariin yang cocok.</p>@if($contactUrl)<a href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer">Yuk, ngobrol <x-store-icon name="arrow"/></a>@else<a href="#faq">Lihat pertanyaan umum <x-store-icon name="arrow"/></a>@endif</div>
    </section>

    <section class="how-section" id="cara-order">
        <div class="container how-layout">
            <div class="how-intro"><span class="eyebrow">NGGAK PAKAI RIBET</span><h2>Dari pilih-pilih,<br>jadi <em>happy.</em></h2><p>Cukup tiga langkah untuk mulai menikmati aplikasi favoritmu.</p><span class="handwritten">semudah itu, bestie! <span aria-hidden="true">↗</span></span></div>
            <div class="steps">
                <article class="step"><span class="step-number">01</span><div><h3>Temukan yang kamu suka</h3><p>Jelajahi katalog, lalu pilih aplikasi dan durasi paket yang pas buat kamu.</p></div><x-store-icon name="bag"/></article>
                <article class="step"><span class="step-number">02</span><div><h3>Say hello ke Bilaa</h3><p>Klik tombol pesan. Detail pilihanmu langsung terbawa ke chat WhatsApp admin.</p></div><x-store-icon name="chat"/></article>
                <article class="step"><span class="step-number">03</span><div><h3>Saatnya menikmati!</h3><p>Konfirmasi stok dan pembayaran dengan admin, lalu ikuti panduan aktivasi akunmu.</p></div><x-store-icon name="heart"/></article>
            </div>
        </div>
    </section>

    <section class="testimonials-section section-space container" id="cerita">
        <div class="section-heading"><div><span class="eyebrow">CATATAN MANIS DARI KAMU</span><h2>Cerita kecil, <em>senyum besar.</em></h2></div><span class="testimonial-decoration" aria-hidden="true">with love, ♡</span></div>
        @if($testimonies->isNotEmpty())
            <div class="testimonials-grid">@foreach($testimonies as $testimony)<figure class="testimonial"><span class="quote-mark" aria-hidden="true">“</span><blockquote>{{ $testimony->teks }}</blockquote><figcaption><span class="avatar-initial">{{ mb_strtoupper(mb_substr($testimony->nama, 0, 1)) }}</span><span><strong>{{ $testimony->nama }}</strong><small>Cerita pelanggan Bilaa</small></span><x-store-icon name="heart"/></figcaption></figure>@endforeach</div>
        @else
            <div class="story-empty"><x-store-icon name="heart"/><p>Cerita kamu bisa jadi yang pertama.<br>Sudah belanja? Bagikan pengalamanmu ke Bilaa, ya.</p>@if($contactUrl)<a class="text-link" href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer">Ceritain pengalamanmu <x-store-icon name="arrow"/></a>@endif</div>
        @endif
    </section>

    <section class="faq-section section-space container" id="faq">
        <div class="faq-intro"><span class="eyebrow">BIAR MAKIN YAKIN</span><h2>Ada yang<br>mau <em>ditanyain?</em></h2><p>Mungkin jawabannya ada di sini.<br>Kalau belum, Bilaa siap bantu kamu.</p>@if($contactUrl)<a class="text-link" href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer">Tanya langsung ke Bilaa <x-store-icon name="arrow-up"/></a>@endif</div>
        <div class="faq-list">
            <details name="faq" open><summary>Gimana cara beli akun premium?<x-store-icon name="plus"/></summary><div>Pilih aplikasi di katalog, tentukan paket, lalu klik “Pesan via WhatsApp”. Admin akan membantu konfirmasi ketersediaan, pembayaran, dan aktivasi akunmu.</div></details>
            <details name="faq"><summary>Bedanya paket sharing dan private apa?<x-store-icon name="plus"/></summary><div>Paket sharing digunakan bersama sesuai pembagian profil atau perangkat, sedangkan private mengikuti akses khusus pada paketnya. Baca ketentuan setiap aplikasi dan konfirmasikan kebutuhanmu ke admin sebelum membeli.</div></details>
            <details name="faq"><summary>Berapa lama proses aktivasinya?<x-store-icon name="plus"/></summary><div>Pesanan diproses setelah pembayaran dikonfirmasi. Waktunya menyesuaikan aplikasi, ketersediaan, dan antrean. Admin akan menginformasikan estimasinya melalui WhatsApp.</div></details>
            <details name="faq"><summary>Kalau akunnya bermasalah, gimana?<x-store-icon name="plus"/></summary><div>Kirim detail kendala dan tangkapan layar ke admin melalui WhatsApp. Bantuan dan ketentuan garansi mengikuti paket yang kamu pilih.</div></details>
            <details name="faq"><summary>Bisa perpanjang langganan?<x-store-icon name="plus"/></summary><div>Tanyakan ke admin sebelum masa aktif habis. Opsi perpanjangan dan penggunaan email pribadi bergantung pada aplikasi serta paket yang tersedia.</div></details>
        </div>
    </section>

    <section class="closing-section container"><div class="closing-card"><div class="closing-copy"><span class="eyebrow">A LITTLE TREAT, JUST FOR YOU</span><h2>Hari biasa juga layak<br>dibikin <em>istimewa.</em></h2><p>Mulai dari satu aplikasi favoritmu.</p><a class="button button-light" href="#katalog">Pilih teman me time-mu <x-store-icon name="arrow-up"/></a></div><div class="closing-image"><img src="{{ asset('storefront/images/me-time.webp') }}" alt="Sudut santai bernuansa pink dengan headphone dan laptop" width="1100" height="1100" loading="lazy"></div><span class="closing-heart" aria-hidden="true">♡</span></div></section>
@endsection
