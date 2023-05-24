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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');

            $table->string('foto')->nullable();
            $table->string('telefone')->nullable(true);
            $table->string('sexo')->nullable(true);
            $table->string('endereco')->nullable(true);
            $table->string('numero')->nullable(true);
            $table->string('bairro')->nullable(true);
            $table->string('cidade')->nullable(true);
            $table->string('estado')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
