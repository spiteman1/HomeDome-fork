<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * following code is used to create the reviews table.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->unsignedTinyInteger('rating'); // 1-5
            $table->text('review_text')->nullable();
            $table->date('submission_date');
            $table->boolean('is_approved')->default(false);
            $table->timestamps();
        });
    }

    /**
     * following code is used to drop the reviews table.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};

