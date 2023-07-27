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
        Schema::create('numero_paiments', function (Blueprint $table) {
            $table->id();
            $table->string("icon");
            $table->string("nom");
            $table->string("numero");
            $table->foreignId("pays_id")->nullable()->constrained("pays");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numero_paiments');
    }
};
