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
        Schema::create('examroutine', function (Blueprint $table) {
            $table->id();
            $table->foreignId('class_id')->constrained('addclass')->cascadeOnDelete();
            $table->text('title');
            $table->string('date');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examroutine');
    }
};
