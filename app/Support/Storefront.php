<?php

namespace App\Support;

use App\Models\PremiumApp;
use Illuminate\Support\Str;

class Storefront
{
    public static function category(PremiumApp $app): string
    {
        $name = Str::lower($app->nama);

        return match (true) {
            Str::contains($name, ['spotify', 'music', 'musik', 'joox', 'tidal']) => 'musik',
            Str::contains($name, ['netflix', 'disney', 'youtube', 'viu', 'vidio', 'wetv', 'prime', 'hbo', 'iqiyi', 'crunchyroll']) => 'nonton',
            Str::contains($name, ['canva', 'capcut', 'adobe', 'chatgpt', 'gemini', 'office', 'notion', 'zoom']) => 'produktif',
            default => 'lainnya',
        };
    }

    public static function categoryLabel(PremiumApp $app): string
    {
        return match (self::category($app)) {
            'musik' => 'Musik',
            'nonton' => 'Film & serial',
            'produktif' => 'Kreativitas & kerja',
            default => 'Pilihan premium',
        };
    }

    public static function logoUrl(PremiumApp $app): ?string
    {
        if ($app->logo && ! Str::startsWith($app->logo, ['http://', 'https://'])) {
            return asset('storage/'.$app->logo);
        }

        foreach (['netflix', 'spotify', 'disney'] as $brand) {
            if (Str::contains(Str::lower($app->nama), $brand)) {
                return asset('storefront/logos/'.$brand.'.svg');
            }
        }

        return $app->logo ?: null;
    }

    public static function whatsappUrl(?string $number, string $message): ?string
    {
        $number = preg_replace('/\D/', '', $number ?? '');
        if (str_starts_with($number, '0')) {
            $number = '62'.substr($number, 1);
        }

        return strlen($number) >= 8 && strlen($number) <= 15
            ? 'https://wa.me/'.$number.'?text='.rawurlencode($message)
            : null;
    }
}
