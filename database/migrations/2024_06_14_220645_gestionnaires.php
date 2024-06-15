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
        Schema::create('gestionnaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom_gest');
           // $table->string('mail_gest')->unique();
            $table->string('address_gest');
            $table->string('telephone_gest');
            $table->string('identite_gest');
            $table->string('password_gest')->nullable();
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
