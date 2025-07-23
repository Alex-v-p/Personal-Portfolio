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
        Schema::create('section_downloadables', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sectionId')->constrained('sections')->onDelete('cascade');
            $table->foreignId('downloadId')->constrained('downloadables')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('section_downloadables');
    }
};
