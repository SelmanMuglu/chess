<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players_matches', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('match_id');
            $table->foreign('match_id')
                ->references('match_id')
                ->on('matches')
                ->onDelete('cascade');

            $table->unsignedBigInteger('player_id');
            $table->foreign('player_id')
                ->references('player_id')
                ->on('players')
                ->onDelete('cascade');

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
        Schema::dropIfExists('players_matches');
    }
}
