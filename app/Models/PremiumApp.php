<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiumApp extends Model
{
    protected $fillable = ['nama', 'logo', 'deskripsi'];

    public function plans() {
        return $this->hasMany(Plan::class);
    }
}