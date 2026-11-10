@php
    $contactUrl = \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau tanya tentang aplikasi premium.");
    $isHome = request()->is('/');
    $homeLink = $isHome ? '' : url('/');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fff9f5">
    <meta name="description" content="@yield('description', 'Temukan aplikasi premium untuk nonton, musik, dan kreativitasmu di Bilaa’s Store. Pilih paket favorit, lalu pesan dengan mudah lewat WhatsApp.')">
    <title>@yield('title', "Bilaa's Store — Sedikit premium, banyak happy.")</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('storefront/favicon.svg') }}">
    <link rel="preload" href="{{ asset('storefront/fonts/dm-sans-regular.ttf') }}" as="font" type="font/ttf" crossorigin>
    <link rel="stylesheet" href="{{ asset('storefront/storefront.css') }}?v={{ filemtime(public_path('storefront/storefront.css')) }}">
    <script src="{{ asset('storefront/storefront.js') }}?v={{ filemtime(public_path('storefront/storefront.js')) }}" defer></script>
    <noscript><style>.category-filters,.detail-page .plan-option,.detail-page .order-summary,.detail-page [data-order-link],.detail-page .mobile-order-bar{display:none!important}</style></noscript>
    @stack('head')
</head>
<body class="@yield('body-class')">
    <a class="skip-link" href="#main-content">Langsung ke konten</a>
    <div class="announcement"><x-store-icon name="sparkle"/> Sedikit treat untuk hari-hari favoritmu <span aria-hidden="true">♡</span></div>
    <header class="site-header">
        <div class="container navigation">
            <a class="brand" href="{{ url('/') }}" aria-label="Bilaa's Store, beranda"><span class="brand-flower"><x-store-icon name="flower"/></span><span>bilaa’s<span class="brand-store">store</span><span class="brand-dot">.</span></span></a>
            <nav class="desktop-nav" aria-label="Navigasi utama"><a href="{{ $homeLink }}#katalog" @if($isHome) aria-current="page" @endif>Katalog</a><a href="{{ $homeLink }}#cara-order">Cara order</a><a href="{{ $homeLink }}#cerita">Kata mereka</a><a href="{{ $homeLink }}#faq">FAQ</a></nav>
            <div class="nav-actions">@if($contactUrl)<a class="button button-small button-outline nav-contact" href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer"><x-store-icon name="chat"/> Tanya Bilaa</a>@else<a class="button button-small button-outline nav-contact" href="{{ $homeLink }}#faq">Butuh bantuan?</a>@endif<button class="icon-button menu-toggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="mobile-navigation"><x-store-icon name="menu"/></button></div>
        </div>
        <nav id="mobile-navigation" class="mobile-navigation" aria-label="Navigasi seluler" hidden><a href="{{ $homeLink }}#katalog">Katalog <x-store-icon name="arrow"/></a><a href="{{ $homeLink }}#cara-order">Cara order <x-store-icon name="arrow"/></a><a href="{{ $homeLink }}#cerita">Kata mereka <x-store-icon name="arrow"/></a><a href="{{ $homeLink }}#faq">FAQ <x-store-icon name="arrow"/></a></nav>
    </header>
    <main id="main-content">@yield('content')</main>
    <footer class="site-footer"><div class="container footer-main"><div><a class="brand" href="{{ url('/') }}"><span class="brand-flower"><x-store-icon name="flower"/></span><span>bilaa’s<span class="brand-store">store</span><span class="brand-dot">.</span></span></a><p>Hal kecil yang bikin harimu lebih happy.</p></div><nav aria-label="Navigasi footer"><a href="{{ $homeLink }}#katalog">Katalog</a><a href="{{ $homeLink }}#cara-order">Cara order</a><a href="{{ $homeLink }}#faq">FAQ</a>@if($contactUrl)<a href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer">WhatsApp <x-store-icon name="arrow-up"/></a>@endif</nav></div><div class="container footer-bottom"><p>© {{ date('Y') }} Bilaa’s Store. Dibuat dengan sepenuh hati.</p><span>Teman kecil untuk me time kamu <x-store-icon name="heart"/></span></div></footer>
</body>
</html>
