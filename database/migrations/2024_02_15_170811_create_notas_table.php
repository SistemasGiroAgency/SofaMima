<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('fecha');
            $table->longText('textouno');
            $table->longText('textodos');
            $table->longText('textotres')->nullable();
            $table->longText('textocuatro')->nullable();
            $table->longText('textocinco')->nullable();
            $table->longText('textoseis')->nullable();
            $table->longText('textosiete')->nullable();
            $table->string('imguno')->nullable();
            $table->string('imgdos')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
