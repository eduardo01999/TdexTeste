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
        Schema::create('multa', function (Blueprint $table) {
            $table->id();
            $table->string('descricao');
            $table->string('orgao');
            $table->double('valor',10,2);
            $table->boolean('quitacao');
            $table->unsignedBigInteger("veiculo_id");
            $table->foreign("veiculo_id")
                ->references("id")
                ->on("veiculo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multa');
    }
};
