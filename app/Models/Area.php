<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    public function shops()
    {
        // リレーション　親
        return $this->hasMany(Shop::class);
    }
}
