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
        Schema::table('projects', function (Blueprint $table) {
            // Drop multiple columns using an array
            $table->dropColumn(['supporting_images', 'cover_image_modal']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // Recreate the columns with the correct data type
            $table->string('supporting_images')->nullable();
            $table->string('cover_image_modal')->nullable();
        });
    }

};
