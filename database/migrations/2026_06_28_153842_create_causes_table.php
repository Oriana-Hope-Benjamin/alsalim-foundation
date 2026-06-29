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
        Schema::create('causes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->decimal('goal_amount', 10, 2);
            $table->decimal('amount_raised', 10, 2)->default(0);
            $table->string('image')->nullable(); // Stores the file path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('causes');
    }
};
