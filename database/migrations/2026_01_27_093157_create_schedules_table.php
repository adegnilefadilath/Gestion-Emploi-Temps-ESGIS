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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('subject');     // Nom de la matière (ex: PHP)
            $table->string('teacher');     // Nom du professeur
            $table->string('room');        // Salle (ex: Salle 4)
            $table->string('day');         // Lundi, Mardi...
            $table->time('start_time');    // Heure de début
            $table->time('end_time');      // Heure de fin
            $table->string('level');       // L1, L2, L3
            $table->string('major');       // AL, SI, SRC
            $table->timestamps();          // created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};