<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'purchase_count',
        'stock_count',
        'description',
        'hidden',
    ];

    public function medias(){
        return $this->hasManyThrough(Media::class, MediaProduct::class);
    }

    public function tags(){
        return $this->hasManyThrough(Tag::class, ProductTag::class);
    }
}
