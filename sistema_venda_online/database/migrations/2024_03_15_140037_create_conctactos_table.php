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
        Schema::create('conctactos', function (Blueprint $table) {
            $table->id();
            $table->string('bi');
            $table->string('nuit');
            $table->string('numero');
            $table->string('whatsapp');

            $table->unsignedBigInteger('id_user');//Chave estrageira
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conctactos');
    }
};
