<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTableNew extends Migration
{
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player1_id')->constrained('users');
            $table->foreignId('winner_id')->nullable()->constrained('users');
            $table->boolean('player2_win')->default(false);
            $table->string('board');
            $table->timestamps();
        });
        
    }
    

    public function down()
    {
        Schema::dropIfExists('games');
    }
}

