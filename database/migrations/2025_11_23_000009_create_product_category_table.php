<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * following code is used to create the product_category pivot table.
     */
    public function up(): void
    {
        Schema::create('product_category', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->primary(['product_id', 'category_id']);
        });
    }

    /**
     * following code is used to drop the product_category table.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_category');
    }
};

