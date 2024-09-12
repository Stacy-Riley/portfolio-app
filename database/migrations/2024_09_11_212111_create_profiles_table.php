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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_published')->default(false);
            $table->integer('priority')->default(0);
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('body')->nullable();
            $table->string('job_titles')->nullable();
            $table->string('programming_skills')->nullable();
            $table->string('webdev_tools')->nullable();
            $table->string('soft_skills')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
