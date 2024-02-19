<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('color');
            $table->string('categoria');
            $table->string('material')->nullable();
            $table->longText('descripcion');
            $table->longText('infoadicional');
            $table->string('imguno')->nullable();
            $table->string('imgdos')->nullable();
            $table->string('imgtres')->nullable();
            $table->string('imgcuatro')->nullable();
            $table->string('imgcinco')->nullable();
            $table->string('imgseis')->nullable();
            $table->string('imgsiete')->nullable();
            $table->string('imgocho')->nullable();
            $table->string('imgnueve')->nullable();
            $table->string('imgdiez')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
