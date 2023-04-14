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
        Schema::create('veiculo', function (Blueprint $table) {
            $table->id();
            $table->string('chassi');
            $table->string('placa');
            $table->string('renavam');
            $table->string('marca');
            $table->double('valor_compra',10,2);
            $table->unsignedBigInteger("empresa_id");
            $table->foreign("empresa_id")
                ->references("id")
                ->on("empresa");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculo');
    }
};
