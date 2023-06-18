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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('agenda');
            $table->date('date_agenda');
            $table->foreignId('enseignant_id')->nullable()->constrained('enseignant', 'enseignant_id');
            $table->foreignId('fk_etudiant_id')->nullable()->constrained('etudiant', 'etudiant_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};