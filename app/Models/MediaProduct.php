<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'media_id',
        'product_id',
        'index',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function media(){
        return $this->belongsTo(Media::class);
    }
}
