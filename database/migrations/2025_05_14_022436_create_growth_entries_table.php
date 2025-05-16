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
   Schema::create('growth_entries', function (Blueprint $table) {
    $table->id();
    $table->foreignId('plant_id')->constrained()->onDelete('cascade');
    $table->date('entry_date');
    $table->decimal('height', 8, 2)->nullable();
    $table->integer('leaf_count')->nullable();
    $table->text('notes')->nullable();
    $table->string('image_url')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('growth_entries');
    }
};
