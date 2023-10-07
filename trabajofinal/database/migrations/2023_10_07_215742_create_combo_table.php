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
        Schema::create('combo', function (Blueprint $table) {
            $table->id();
            $table->string('lugar');
            $table->text('descripcion');
            $table->decimal('precio', 10, 2);
            $table->integer('dias');
            $table->text('incluye');
            $table->string('imagen')->nullable(); // Columna para la imagen (puedes agregarla)
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
        Schema::dropIfExists('combo');
    }
};
