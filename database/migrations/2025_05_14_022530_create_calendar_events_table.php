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
Schema::create('calendar_events', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('plant_id')->nullable()->constrained()->onDelete('set null');
    $table->string('title');
    $table->text('description')->nullable();
    $table->dateTime('start_date');
    $table->dateTime('end_date')->nullable();
    $table->string('event_type'); // e.g., watering, fertilizing, pruning
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('calendar_events');
    }
};
