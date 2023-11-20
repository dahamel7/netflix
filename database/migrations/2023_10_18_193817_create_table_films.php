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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('titre',100);
            $table->string('categorie', 64);
            $table->text('resume');
            $table->text('pochette');
            $table->foreignId('personnes_id')->constrained('personne');
            $table->unsignedBigInteger('duree');
            $table->text('annee');
            $table->text('rating');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
