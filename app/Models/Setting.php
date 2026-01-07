<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    // Daftarkan kolom yang boleh diisi secara massal
    protected $fillable = ['key', 'value'];
    
    /**
     * Tips Pro: Tambahkan fungsi statis agar memanggil 
     * setting di tempat lain (seperti Blade) jadi lebih mudah.
     */
    public static function get($key, $default = null)
    {
        $setting = self::where('key', $key)->first();
        return $setting ? $setting->value : $default;
    }
}