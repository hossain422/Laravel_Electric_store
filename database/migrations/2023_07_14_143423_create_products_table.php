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
            $table->string('name');
            $table->string('image');
            $table->string('category_id');
            $table->string('sub_category_id')->nullable();
            $table->string('brand_id');
            $table->text('thambnail')->nullable();
            $table->string('price');
            $table->text('short_desc')->nullable();
            $table->text('description');
            $table->string('qty')->nullable();
            $table->text('tag')->nullable();
            $table->string('status')->default(1);

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
