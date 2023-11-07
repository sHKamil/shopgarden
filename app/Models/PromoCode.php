<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'promo_code',
        'type',
        'product_id',
        'quantity',
        'quantity_left',
        'linear_discount',
    ];
}
