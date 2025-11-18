<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['video', 'story']);
            $table->string('name', 255);
            $table->string('program_name', 255)->nullable();
            $table->string('university', 255);
            $table->text('university_image')->nullable();
            $table->text('image');
            $table->text('story_content')->nullable();
            $table->string('video_title')->nullable();
            $table->text('video_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
