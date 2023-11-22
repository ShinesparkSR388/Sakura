<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shoppingCar extends Model
{
    protected $fillable = [
        'id_product',
        'id_user',
        'Cantidad',
        'Total',
    ];

    public function product()
    {
        return $this->belongsTo(products::class, 'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
