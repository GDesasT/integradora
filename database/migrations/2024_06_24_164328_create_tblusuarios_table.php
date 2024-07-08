<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblusuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('telefono');
            $table->string('sexo');
            $table->string('marca');
            $table->string('compañia');
            $table->decimal('saldo', 10, 2);
            $table->integer('nivel');
            $table->boolean('activo');
            $table->string('email');
            $table->string('usuario');
            $table->timestamps(); // Añade created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblusuarios');
    }
}
