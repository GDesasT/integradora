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
        Schema::create('supplier', function (Blueprint $table) {
            $table->id('supplierid');
            $table->string('companyname');
            $table->string('contactname');
            $table->string('contacttitle');
            $table->string('address');
            $table->string('city');
            $table->string('region')->nullable();
            $table->string('postalcode');
            $table->string('country');
            $table->string('phone');
            $table->string('fax')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier');
    }
};
