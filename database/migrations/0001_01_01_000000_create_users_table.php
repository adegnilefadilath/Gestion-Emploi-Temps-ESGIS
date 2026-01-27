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
       Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    
    // --- AJOUTE CES LIGNES ICI ---
    $table->string('role')->default('student'); // admin ou student
    $table->string('level')->nullable();        // L1, L2, L3
    $table->string('major')->nullable();        // AL, SI, SRC
    // -----------------------------

    $table->rememberToken();
    $table->timestamps();
});
    }
};
