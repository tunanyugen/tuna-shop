<?php

namespace Database\Seeders;

use App\Models\Media;
use App\Models\MediaProduct;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\ProductVariant;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = Product::create([
            'name' => 'Fake product',
            'price' => 780000,
            'description' => 'This is a fake product used for testing',
            'hidden' => false,
        ]);

        for ($i = 0; $i < 6; $i++){
            $media = Media::create([
                'url' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
            ]);
            MediaProduct::create([
                'media_id' => $media->id,
                'product_id' => $product->id,
            ]);
        }

        foreach(['Fake Product', 'Fake Tag', 'Example'] as $tagName){
            $tag = Tag::create([
                'name' => $tagName
            ]);
            ProductTag::create([
                'product_id' => $product->id,
                'tag_id' => $tag->id,
            ]);
        }
        
        foreach(['Black', 'Orange', 'White'] as $color){
            ProductVariant::create([
                'product_id' => $product->id,
                'name' => $color,
                'stock_count' => 44,
            ]);
        }
    }
}
