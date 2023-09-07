<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable  = [
        'title', 'description','slug', 'status', 'order', 'product_category', 'image', 'weight',
        'nature',
        'min_order_qty',
        'price_range',


    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'product_category');
    }
}
