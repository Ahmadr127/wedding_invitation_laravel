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
        Schema::create('couples', function (Blueprint $table) {
            $table->id();
            $table->foreignId('theme_id')->constrained('themes');
            $table->foreignId('user_id')->constrained('users');
            $table->string('groom_name');
            $table->string('bride_name');
            $table->string('groom_nickname')->nullable();
            $table->string('bride_nickname')->nullable();
            $table->string('groom_instagram')->nullable();
            $table->string('bride_instagram')->nullable();
            $table->date('wedding_date');
            $table->time('wedding_time');
            $table->string('venue_name');
            $table->text('venue_address');
            $table->text('google_maps_url')->nullable();
            $table->text('google_maps_embed')->nullable();
            $table->string('slug')->unique();
            $table->string('cover_image');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couples');
    }
};
