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
        Schema::create('intership_opportunities', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->text('description');
            $table->date('start');
            $table->date('end');
            $table->string('email');
            $table->timestamps();
             // Création de la clé étrangère pour lier l'offre de stage à un utilisateur
            //$table->foreignId('user_id')->constrained();
             // Création de la clé étrangère pour lier l'entreprise à une offre de stage
            // $table->foreignId('company_id')->constrained();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intership_opportunities');
    }
};
