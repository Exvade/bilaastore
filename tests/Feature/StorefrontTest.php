<?php

namespace Tests\Feature;

use App\Models\PremiumApp;
use App\Models\Setting;
use App\Models\Testimony;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StorefrontTest extends TestCase
{
    use RefreshDatabase;

    public function test_catalog_uses_products_prices_and_testimonies_from_admin(): void
    {
        $product = $this->product();
        $product->plans()->createMany([
            ['durasi' => '3 Bulan', 'harga' => 95000],
            ['durasi' => '1 Bulan', 'harga' => 35000],
        ]);
        Testimony::create(['nama' => 'Pelanggan Uji', 'teks' => 'Paket sesuai pilihan saya.']);

        $this->get('/')
            ->assertOk()
            ->assertSee('Netflix Premium')
            ->assertSee('Rp35.000')
            ->assertSee(route('app.detail', $product->id))
            ->assertSee('Paket sesuai pilihan saya.')
            ->assertSee('storefront/images/me-time.webp')
            ->assertSee('storefront/logos/netflix.svg')
            ->assertDontSee('cdn.tailwindcss.com');
    }

    public function test_detail_contains_matching_package_prices_and_whatsapp_links(): void
    {
        Setting::create(['key' => 'whatsapp_number', 'value' => '0812-3456-7890']);
        $product = $this->product();
        $product->plans()->createMany([
            ['durasi' => '3 Bulan (Private)', 'harga' => 95000],
            ['durasi' => '1 Bulan (Sharing)', 'harga' => 35000],
        ]);

        $response = $this->get(route('app.detail', $product->id));
        $response->assertOk()
            ->assertSeeInOrder(['1 Bulan (Sharing)', '3 Bulan (Private)'])
            ->assertSee('https://wa.me/6281234567890?text=', false)
            ->assertSee(rawurlencode('1 Bulan (Sharing)'), false)
            ->assertSee(rawurlencode('3 Bulan (Private)'), false)
            ->assertSee('data-price="Rp95.000"', false)
            ->assertSee('data-selected-price>Rp35.000', false);
    }

    public function test_missing_packages_and_contact_have_clear_empty_states(): void
    {
        $product = $this->product();
        $this->get('/')->assertOk()->assertSee('Segera hadir');
        $this->get(route('app.detail', $product->id))
            ->assertOk()
            ->assertSee('Paketnya sedang disiapkan')
            ->assertDontSee('https://wa.me/');
    }

    public function test_missing_whatsapp_never_creates_a_broken_checkout_link(): void
    {
        $product = $this->product();
        $product->plans()->create(['durasi' => '1 Bulan', 'harga' => 35000]);
        $this->get(route('app.detail', $product->id))
            ->assertOk()
            ->assertSee('Pemesanan sedang belum tersedia.')
            ->assertDontSee('https://wa.me/');
    }

    public function test_catalog_search_and_empty_database_render_successfully(): void
    {
        $this->get('/')->assertOk()->assertSee('Belum ketemu yang kamu cari?');
        $this->product();
        PremiumApp::create(['nama' => 'Spotify Premium', 'deskripsi' => 'Paket musik']);
        $this->get('/?search=Spotify')->assertOk()->assertSee('Spotify Premium')->assertDontSee('Netflix Premium');
        $this->get('/?search=tidak-ada')->assertOk()->assertSee('Belum ketemu yang kamu cari?');
    }

    public function test_product_content_is_escaped_and_missing_product_is_404(): void
    {
        $product = PremiumApp::create([
            'nama' => 'Paket <script>alert(1)</script>',
            'deskripsi' => '<img src=x onerror=alert(1)>',
        ]);
        $this->get(route('app.detail', $product->id))
            ->assertOk()
            ->assertSee('&lt;script&gt;', false)
            ->assertDontSee('<script>alert(1)</script>', false)
            ->assertDontSee('<img src=x onerror=alert(1)>', false);
        $this->get('/aplikasi/999999')->assertNotFound();
    }

    private function product(): PremiumApp
    {
        return PremiumApp::create([
            'nama' => 'Netflix Premium',
            'deskripsi' => "Ketentuan paket dari admin.\nGunakan sesuai durasi pilihan.",
            'logo' => 'https://upload.wikimedia.org/wikipedia/commons/0/08/Netflix_2015_logo.svg',
        ]);
    }
}
