<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $fillable  = ['title', 'description', 'details', 'status', 'order', 'image'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}
