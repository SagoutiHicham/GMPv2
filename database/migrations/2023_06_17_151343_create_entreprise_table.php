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
        Schema::create('entreprise', function (Blueprint $table) {
            $table->id('entreprise_id');
            $table->string('entreprise_nom');
            $table->string('rue');
            $table->integer('code_postal');
            $table->string('ville');
            $table->string('email')->unique();
            $table->foreignId('fk_entreprise_user_id')->nullable()->constrained('users', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprise');
    }
};