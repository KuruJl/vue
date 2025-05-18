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
        Schema::create('listings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // арендодатель
            $table->string('title');
            $table->text('description');
            $table->decimal('price_per_night', 10, 2);
            $table->string('address');
            $table->string('city');
            $table->string('state')->nullable();
            $table->string('country');
            $table->integer('max_guests');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listings');
    }
};
