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
        Schema::create('alternance', function (Blueprint $table) {
            $table->id('alternance_id');
            $table->string('alternance_nom');
            $table->date('alternance_date_debut');
            $table->date('alternance_date_fin');
            $table->text('alternance_detail');
            $table->string('alternance_rue');
            $table->integer('alternance_code_postal');
            $table->string('alternance_ville');
            $table->string('alternance_email');
            $table->boolean('confirmed')->default(false);
            $table->foreignId('fk_user_id')->nullable()->constrained('users', 'user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alternance');
    }
};