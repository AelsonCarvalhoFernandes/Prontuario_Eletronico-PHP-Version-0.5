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
        Schema::create('laudos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->foreignId('doctor_id')
            ->constrained()
            ->onDelete('CASCADE')
            ->onUpdate('CASCADE');
            $table->string('resume');
            $table->string('content');
            $table->date('data_emissao');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laudos');
    }
};
