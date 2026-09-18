<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'description',
        'purchase_price',
        'sale_price',
        'stock',
        'min_stock',
        'status',
    ];

    protected static function booted()
    {
        static::creating(function ($product) {
            if (empty($product->code)) {
                $maxId = static::max('id') ?? 0;
                $product->code = 'MED-' . str_pad($maxId + 1, 4, '0', STR_PAD_LEFT);
            }
            if (empty($product->status)) {
                $product->status = 'Activo';
            }
            if (!isset($product->stock)) {
                $product->stock = 0;
            }
            if (!isset($product->min_stock)) {
                $product->min_stock = 5;
            }
        });
    }

    /**
     * Categoría a la que pertenece el producto.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
