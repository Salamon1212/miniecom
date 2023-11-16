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
            $table->integer('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->string('product_name');
            $table->string('product_img');
            $table->string('details');
            $table->integer('price');
            $table->integer('quantity');
            $table->timestamps();


            $table->foreign('subcategory_id')->references('subcategory_id')->on('sub_categories');
            // $table->foreign('category_id')->references('id')->on('categories');
            // $table->timestamps();
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
