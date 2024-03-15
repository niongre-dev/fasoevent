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
            $table->string('nomComplet')->nullable();
            $table->string('nom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('email')->unique();
            $table->enum('role', ['admin', 'promoteur', 'abonne'])->default('abonne');
            $table->string('password');
            $table->string('adresse')->nullable();
            $table->string('telephone')->nullable();
            $table->string('photo')->nullable();
            $table->string('siege')->nullable();
            $table->string('activites')->nullable();
            $table->string('preferences')->nullable();
            $table->enum('status', ['en_attente', 'accepter', 'rejeter'])->default('en_attente');
            $table->rememberToken();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
