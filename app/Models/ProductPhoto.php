<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
    use HasFactory;
    protected $table = '_product_photo';
    protected $fillable = ['image', 'product_id', 'status'];
}
