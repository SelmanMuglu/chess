<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->bigIncrements('player_id');
            $table->string('first_name');
            $table->string('prefix')->nullable();
            $table->string('last_name');

            $table->unsignedBigInteger('club_id');
            $table->foreign('club_id')
                ->references('club_id')
                ->on('chess_clubs')
                ->onDelete('cascade');

            $table->boolean('participate')->nullable();

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
        Schema::dropIfExists('players');
    }
}
