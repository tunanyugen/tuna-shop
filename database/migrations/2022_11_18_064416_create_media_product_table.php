<?php

use App\Models\Media;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id');
            $table->foreign('media_id')->references('id')->on(Media::class)->onDelete('cascade');
            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')->on(Product::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media_product');
    }
};
