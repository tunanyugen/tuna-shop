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
        'description',
        'hidden',
    ];

    public function media(){
        return $this->belongsToMany(Media::class);
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function product_variants(){
        return $this->hasMany(ProductVariant::class);
    }
}
