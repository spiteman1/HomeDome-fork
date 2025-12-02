<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * following code is used to create the product_media table.
     */
    public function up(): void
    {
        Schema::create('product_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->string('media_type'); // 'image' or '3D_MODEL'
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * following code is used to drop the product_media table.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_media');
    }
};

