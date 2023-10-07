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
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('dni'); // Agregar columna de DNI antes que el nombre
            $table->string('nombre');
            $table->string('telefono');
            $table->string('n_personas');
            $table->string('niños');
            $table->string('incluye');
            $table->date('fecha');
            $table->string('combo');
            $table->string('ticket');
            $table->string('imagen')->nullable();
            $table->decimal('precio', 10, 2)->default(0.00);
            $table->timestamps();
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cliente');
    }
};
