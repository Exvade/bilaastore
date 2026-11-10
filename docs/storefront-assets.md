# Aset desain etalase Bilaa

Landing page dan halaman detail menggunakan layout `resources/views/layouts/storefront.blade.php` serta CSS/JavaScript lokal di `public/storefront/`. Tidak membutuhkan CDN Tailwind, GSAP, Swiper, atau Google Fonts saat halaman dibuka.

## Aset lokal

- `public/storefront/images/me-time.webp`: ilustrasi utama, 1.100 × 1.100 piksel, sekitar 75 KB. Digunakan ulang pada landing page dan halaman detail supaya gaya visual konsisten.
- `public/storefront/images/me-time-original.png`: sumber ilustrasi resolusi asli.
- `public/storefront/logos/netflix.svg` dan `spotify.svg`: diunduh dari [Simple Icons](https://github.com/simple-icons/simple-icons/tree/develop/icons).
- `public/storefront/logos/disney.svg`: diunduh dari [Wikimedia Commons](https://commons.wikimedia.org/wiki/File:Disney%2B_logo.svg).
- Font DM Sans dan DM Serif Display diunduh dari Google Fonts. Lisensi OFL tersimpan bersama font di `public/storefront/fonts/`.
- Logo yang diunggah melalui admin tetap menggunakan file dari storage aplikasi. Jika logo tidak dapat dimuat, halaman menampilkan inisial produk.

## Ilustrasi utama

Dibuat dengan tool imagegen bawaan, kemudian disalin ke proyek dan dikompresi menjadi WebP. Prompt final:

> Use case: product-mockup. Asset type: website hero artwork for Bilaa's Store, a feminine digital subscription boutique. Create one high-end editorial 3D still life, square format, tactile and photorealistic, soft cream and strawberry pink palette with deep burgundy accents. Scene: blush pink over-ear headphones draped against an open small pastel pink laptop on a low round ivory pedestal; the laptop has a dark burgundy screen with only a simple pink play triangle (no app UI, no words). In the foreground a delicate loosely tied pink satin ribbon, one small glossy cherry-red heart sculpture, and a strawberry milk drink in a clear ribbed glass. Warm pale blush seamless studio backdrop, a diffuse circular window shadow from upper left, beautiful soft directional sunlight, subtle realistic shadows, tasteful spacious arrangement. Camera at three-quarter angle, all objects fully in frame and centered with 12 percent breathing room, headphones and laptop are the hero. Stylish playful feminine lifestyle magazine, premium product art direction, not childish, no people, no writing, no typography, no logos, no watermark. Colors should blend with a cream #fff9f5 website and soft rose #f8dce5. Render detailed satin and matte plastic textures.

## Menjalankan dan memasang

Jalankan aplikasi Laravel seperti biasa (`php artisan serve`). Perubahan etalase dapat dilihat pada `/` dan `/aplikasi/{id}`. Semua file `public/storefront/` perlu ikut dipasang ke hosting. Jika hosting memakai root proyek sebagai document root, aturan khusus di `.htaccess` mengarahkan URL `/storefront/` ke folder aset tersebut.

Jalankan `php artisan view:clear` setelah memasang pembaruan Blade. Data produk, harga, deskripsi, testimoni, dan nomor WhatsApp berasal dari database yang dikelola admin. Kategori tampilan dikelompokkan dari nama aplikasi; ini tidak menambah kolom atau mengubah data produk.

## Verifikasi

`php artisan test --compact` memeriksa katalog, harga, detail produk, tautan pesanan, pencarian, kondisi kosong, serta escaping konten. Database tes menggunakan SQLite in-memory yang terpisah dari database aplikasi.
