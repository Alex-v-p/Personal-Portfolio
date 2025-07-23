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
        Schema::create('about_mes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('occupation')->nullable();
            $table->string('displayEmail')->nullable();
            $table->string('displayLinkedIn')->nullable();
            $table->string('displayGithub')->nullable();
            $table->string('displayPhone')->nullable();
            $table->string('location')->nullable();
            $table->string('birthDay')->nullable();
            $table->foreignId('cvDownload')->constrained('downloadables')->onDelete('cascade');
            $table->string('description')->nullable();
            $table->string('imageLocation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_mes');
    }
};
