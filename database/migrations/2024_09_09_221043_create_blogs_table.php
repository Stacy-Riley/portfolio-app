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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->boolean('is_published')->default(false);
            $table->integer('priority')->default(0);
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('body');
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->string('cover_image');
            $table->string('supporting_images')->nullable();
            $table->date('publish_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
