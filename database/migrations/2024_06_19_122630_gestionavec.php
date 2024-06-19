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
        Schema::create('gestionavec', function (Blueprint $table) {
            $table->id();
            $table->string('titre_attr');
            $table->foreignId('gestionnaires_id')->constrained()->onDelete('cascade');
            $table->foreignId('comptes_id')->constrained()->onDelete('cascade');
            $table->string('status_attr')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
