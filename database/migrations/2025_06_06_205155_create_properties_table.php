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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('state');
            $table->integer('price');
            $table->integer('rent_per_week');
            $table->integer('house_area');
            $table->integer('land_area');
            $table->integer('total_area');
            $table->tinyInteger('bedrooms');
            $table->decimal('bathrooms', 2, 1);
            $table->tinyInteger('garage');
            $table->string('image_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
