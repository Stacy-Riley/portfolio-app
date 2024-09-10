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
        Schema::create('homepage_profile', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_published')->default(false);
            $table->integer('priority')->default(0);
            $table->string('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->string('job_titles')->nullable();
            $table->string('programming_skills')->nullable();
            $table->string('language_skills')->nullable();
            $table->string('cover_image');
            $table->string('supporting_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_profile');
    }
};
