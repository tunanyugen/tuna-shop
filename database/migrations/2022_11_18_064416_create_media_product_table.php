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
            error_log((new Media)->getTable());
            $table->foreign('media_id')->references('id')->on((new Media)->getTable())->onDelete('cascade');
            $table->foreignId('product_id');
            $table->foreign('product_id')->references('id')->on((new Product)->getTable())->onDelete('cascade');
            $table->integer('index')->default(0);
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
