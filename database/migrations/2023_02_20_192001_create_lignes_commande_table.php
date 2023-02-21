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
        Schema::create('lignes_commande', function (Blueprint $table) {
            $table->unsignedBigInteger('chaussure_id');
            $table->unsignedBigInteger('commande_id');
            $table->double('prix_unitaire');
            $table->integer('quantite');
            $table->timestamps();

            $table
                ->foreign('chaussure_id')
                ->references('id')
                ->on('chaussures')
                ->onDelete('cascade');;

            $table
                ->foreign('commande_id')
                ->references('id')
                ->on('commandes')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignes_commande');
    }
};
