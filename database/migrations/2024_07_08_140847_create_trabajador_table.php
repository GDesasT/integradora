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
        Schema::create('trabajador', function (Blueprint $table) {
            $table->id('employeeid');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('title');
            $table->string('titleofcourtesy');
            $table->date('birthdate');
            $table->date('hiredate');
            $table->string('address');
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('postalcode');
            $table->string('country');
            $table->string('phone');
            $table->unsignedBigInteger('mgrid')->nullable();
            $table->foreign('mgrid')->references('employeeid')->on('trabajador')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trabajador');
    }
};
