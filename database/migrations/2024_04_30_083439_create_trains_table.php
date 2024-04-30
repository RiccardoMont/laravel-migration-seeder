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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 20);
            $table->string('Partenza_da', 25);
            $table->string('Arrivo_a', 25);
            $table->dateTime('Orario_di_partenza');
            $table->dateTime('Orario_di_arrivo')->nullable();
            $table->string('Codice_treno', 10);
            $table->unsignedTinyInteger('Numero_carrozze')->nullable();
            $table->boolean('In_orario')->nullable();
            $table->boolean('Cancellato')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
