<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->json('name');
            $table->integer('body_price')->comment('mahsulotning tan narxi');
            $table->integer('sale_price')->comment('mahsulotning sotuvdagi narxi')->nullable();
            $table->integer('discount_price')->comment('mahsulotning chegirmagi narxi')->nullable();
            $table->json('benfits')->nullable();
            $table->double('count');
            $table->text('description');
            $table->integer('category_id');
            $table->integer('brend_id');
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
