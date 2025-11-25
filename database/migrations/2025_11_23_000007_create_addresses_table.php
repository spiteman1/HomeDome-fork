<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * following code is used to create the addresses table.
     */
    public function up(): void
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('street');
            $table->string('city');
            $table->string('postcode');
            $table->boolean('is_shipping')->default(false);
            $table->boolean('is_billing')->default(false);
            $table->timestamps();
        });
    }

    /**
     * following code is used to drop the addresses table.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};

