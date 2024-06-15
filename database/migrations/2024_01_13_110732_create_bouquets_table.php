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
        Schema::create('bouquets', function (Blueprint $table) {
            $table->id();
            $table->string("bq_photo");
            $table->string("bq_titre")->unique();
            $table->string("bq_type");
            $table->string("bq_nombreachat");
            $table->string("bq_montant");
            $table->date("bq_dateAchat");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bouquets');
    }
};
