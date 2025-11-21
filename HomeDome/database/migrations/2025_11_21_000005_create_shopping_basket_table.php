<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * following code is used to create the shopping basket table.
     */
    public function up(): void
    {
        Schema::create('shopping_basket', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->unsignedInteger('quantity')->default(1);
            $table->timestamps();

            $table->unique(['user_id', 'product_id']);
        });
    }

    /**
     * following code is used to drop the shopping basket table 
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_basket');
    }
};


