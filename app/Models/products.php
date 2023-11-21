<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'code',
        'name',
        'category',
        'image',
        'stock',
        'price',
        'sell_price',
        'thumbnail',
        'id_provider',
    ];

    public function provider()
    {
        return $this->belongsTo(Provider::class, 'id_provider');
    }
}
