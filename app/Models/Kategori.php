<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Kategori extends Model
{
   use HasFactory;

   
    protected $fillable = [
        'kategori',
        'slug',
    ];

    // public function produk()
    // {
    //     return $this->hasMany(Produk::class);
    // }
}
