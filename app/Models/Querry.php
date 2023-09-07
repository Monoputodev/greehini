<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Querry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'product_id','phone', 'comment', 'file',
    ];

    public function product()
    {return $this->belongsTo(Product::class, 'product_id');

    }

}
