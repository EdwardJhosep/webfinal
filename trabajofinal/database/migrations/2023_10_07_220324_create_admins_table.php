<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('contrasena');
            $table->unsignedBigInteger('combo_id'); // Clave foránea para relacionar con combos
            $table->timestamps();

            // Definir la relación con la tabla 'combo'
            $table->foreign('combo_id')->references('id')->on('combo');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
};
