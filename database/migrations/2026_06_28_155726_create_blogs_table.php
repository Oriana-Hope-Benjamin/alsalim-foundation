<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description'); // longText is better for full blog articles
            $table->string('uploaded_by'); 
            $table->string('image')->nullable();
            $table->timestamps(); // Automatically handles the 'current date' (created_at)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
