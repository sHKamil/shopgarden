<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Cerbero\QueryFilters\FiltersRecords;

class Product extends Model
{
    use HasFactory;
    use FiltersRecords;

    protected $fillable = [
        'name',
        'category_id',
        'id',
        'price',
        'quantity',
        'image_path',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
