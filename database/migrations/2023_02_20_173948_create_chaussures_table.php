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
        Schema::create('chaussures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorie_id');
            $table->string('nom_chaussure');
            $table->string('description');
            $table->integer('nombre_disponible');
            $table->string('marque');
            $table->double('prix');
            $table->timestamps();

            $table
                ->foreign('categorie_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chaussures');
    }
};
