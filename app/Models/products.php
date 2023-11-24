<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = [
        'code',
        'name',
        'editorial',
        'author',
        'year',
        'category',
        'image',
        'stock',
        'description',
        'price',
        'sell_price',
        'id_provider',
    ];
    public function provider()
    {
        return $this->belongsTo(providers::class, 'id_provider');
    }
}
