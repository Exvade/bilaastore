@extends('layouts.storefront')
@section('title', $app->nama." — Bilaa's Store")
@section('description', \Illuminate\Support\Str::limit(preg_replace('/\s+/', ' ', $app->deskripsi), 155))
@section('body-class', 'detail-page')

@section('content')
    @php
        $contactUrl = \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau tanya tentang aplikasi premium.");
        $category = \App\Support\Storefront::category($app);
        $logoUrl = \App\Support\Storefront::logoUrl($app);
        $plans = $app->plans->sortBy('harga')->values();
        $selectedPlan = $plans->first();
        $orderUrl = $selectedPlan ? \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau order *{$app->nama}* untuk paket *{$selectedPlan->durasi}* seharga Rp ".number_format($selectedPlan->harga, 0, ',', '.').'. Masih tersedia?') : null;
    @endphp
    <div class="container detail-container">
        <nav class="breadcrumb" aria-label="Breadcrumb"><a href="{{ url('/') }}#katalog"><x-store-icon name="back"/> Katalog</a><x-store-icon name="chevron"/><span aria-current="page">{{ $app->nama }}</span></nav>
        <div class="detail-layout">
            <div class="detail-story">
                <div class="detail-art art-{{ $category }}"><span class="product-category">{{ \App\Support\Storefront::categoryLabel($app) }}</span><span class="detail-art-star" aria-hidden="true">✧</span><div class="detail-logo">@if($logoUrl)<img src="{{ $logoUrl }}" alt="Logo {{ $app->nama }}" width="240" height="160" data-logo><span class="logo-fallback" hidden>{{ mb_substr($app->nama, 0, 1) }}</span>@else<span class="logo-fallback">{{ mb_substr($app->nama, 0, 1) }}</span>@endif</div><div class="detail-art-label"><span>YOUR DAILY DOSE OF</span><strong>{{ $category === 'musik' ? 'good vibes.' : ($category === 'produktif' ? 'little genius.' : 'happiness.') }}</strong><x-store-icon name="heart"/></div><span class="detail-orbit" aria-hidden="true"></span></div>
                <div class="detail-assurances"><span><x-store-icon name="chat"/> Dibantu admin</span><span><x-store-icon name="grid"/> Pilihan fleksibel</span><span><x-store-icon name="heart"/> Untuk kamu</span></div>
                <section class="product-details" aria-labelledby="product-details-title"><span class="eyebrow">KENALAN DULU, YUK</span><h2 id="product-details-title">Detail & <em>ketentuan.</em></h2><div class="product-terms">{{ $app->deskripsi }}</div></section>
                <div class="detail-guide"><x-store-icon name="shield"/><div><h3>Sedikit catatan sebelum checkout</h3><p>Pastikan paket dan durasi sudah sesuai. Penggunaan akun, perangkat, serta garansi mengikuti ketentuan di atas. Kalau masih ragu, tanya Bilaa dulu, ya.</p></div></div>
                <div class="detail-lifestyle"><img src="{{ asset('storefront/images/me-time.webp') }}" alt="Perangkat pink untuk waktu santai yang menyenangkan" width="1100" height="1100" loading="lazy"><div><span class="eyebrow">ME TIME, UPGRADED</span><h3>Waktu untuk<br><em>diri sendiri.</em></h3><p>Satu pilihan kecil untuk hari yang lebih menyenangkan.</p></div></div>
            </div>
            <div class="detail-purchase">
                <span class="eyebrow"><x-store-icon name="sparkle"/> PILIHAN PREMIUM BILAA</span><h1>{{ $app->nama }}</h1><p class="detail-subtitle">Satu langkah lebih dekat ke me time favoritmu.<br>Pilih paket yang paling cocok, yuk.</p>
                <div class="plan-picker">
                    <fieldset><legend>Pilih paketmu <span>{{ $plans->count() }} pilihan</span></legend><p class="plan-hint">Harga sesuai durasi dan jenis paket yang dipilih.</p>
                        <div class="plan-options">
                            @forelse($plans as $plan)
                                @php $planUrl = \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau order *{$app->nama}* untuk paket *{$plan->durasi}* seharga Rp ".number_format($plan->harga, 0, ',', '.').'. Masih tersedia?'); @endphp
                                <label class="plan-option"><input type="radio" name="plan" value="{{ $plan->id }}" data-label="{{ $plan->durasi }}" data-price="Rp{{ number_format($plan->harga, 0, ',', '.') }}" data-url="{{ $planUrl }}" @checked($loop->first)><span class="radio-dot" aria-hidden="true"></span><span class="plan-copy"><strong>{{ $plan->durasi }}</strong><span>{{ $loop->first && $plans->count() > 1 ? 'Harga paling ringan' : 'Pilihan untuk kamu' }}</span></span><span class="plan-price">Rp{{ number_format($plan->harga, 0, ',', '.') }}</span></label>
                            @empty
                                <div class="plans-empty"><x-store-icon name="heart"/><h3>Paketnya sedang disiapkan</h3><p>Cek lagi nanti atau tanyakan ketersediaan ke admin.</p></div>
                            @endforelse
                        </div>
                    </fieldset>
                    @if($selectedPlan)
                        <div class="order-summary" aria-live="polite"><div><span>Pilihanmu</span><strong data-selected-label>{{ $selectedPlan->durasi }}</strong></div><div class="order-total"><span>Total pembayaran</span><strong data-selected-price>Rp{{ number_format($selectedPlan->harga, 0, ',', '.') }}</strong></div></div>
                        @if($orderUrl)<a class="button button-primary order-button" data-order-link href="{{ $orderUrl }}" target="_blank" rel="noopener noreferrer"><x-store-icon name="chat"/> Pesan via WhatsApp <x-store-icon name="arrow-up"/></a><p class="checkout-note"><x-store-icon name="shield"/> Konfirmasi stok & pembayaran langsung dengan admin.</p>@else<p class="contact-unavailable" role="status">Pemesanan sedang belum tersedia. Silakan cek kembali nanti, ya.</p>@endif
                        <noscript><div class="noscript-order"><p>Pesan paket pilihanmu langsung:</p>@foreach($plans as $plan)@php $directUrl = \App\Support\Storefront::whatsappUrl($whatsapp->value ?? null, "Halo Bilaa! Aku mau order {$app->nama}, paket {$plan->durasi}, seharga Rp ".number_format($plan->harga, 0, ',', '.').'. Masih tersedia?'); @endphp @if($directUrl)<a href="{{ $directUrl }}" target="_blank" rel="noopener noreferrer">{{ $plan->durasi }} — Rp{{ number_format($plan->harga, 0, ',', '.') }} <x-store-icon name="arrow-up"/></a>@endif @endforeach</div></noscript>
                    @elseif($contactUrl)<a class="button button-primary order-button" href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer"><x-store-icon name="chat"/> Tanya ketersediaan</a>@endif
                </div>
                <div class="purchase-help"><span class="help-avatar">b.</span><div><strong>Butuh teman pilih paket?</strong><p>@if($contactUrl)<a href="{{ $contactUrl }}" target="_blank" rel="noopener noreferrer">Tanya Bilaa, dengan senang hati <x-store-icon name="arrow"/></a>@else<a href="{{ url('/') }}#faq">Lihat pertanyaan yang sering ditanyakan <x-store-icon name="arrow"/></a>@endif</p></div></div>
                <details class="detail-faq"><summary>Setelah pesan, apa selanjutnya?<x-store-icon name="plus"/></summary><p>Admin akan mengonfirmasi stok dan pembayaran, lalu mengirimkan detail akun atau panduan aktivasi melalui WhatsApp. Simpan percakapan untuk bantuan selama masa langganan.</p></details>
            </div>
        </div>
        <div class="back-to-catalog"><span>Masih pengin lihat-lihat?</span><a class="text-link" href="{{ url('/') }}#katalog">Jelajahi aplikasi lainnya <x-store-icon name="arrow"/></a></div>
    </div>
    @if($selectedPlan && $orderUrl)
        <div class="mobile-order-bar"><div><span>Total pilihanmu</span><strong data-selected-price>Rp{{ number_format($selectedPlan->harga, 0, ',', '.') }}</strong></div><a class="button button-primary" data-order-link href="{{ $orderUrl }}" target="_blank" rel="noopener noreferrer">Pesan sekarang <x-store-icon name="arrow-up"/></a></div>
    @endif
@endsection
