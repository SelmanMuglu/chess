<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements('match_id');

            $table->unsignedBigInteger('tournament_id');
            $table->foreign('tournament_id')
                ->references('tournament_id')
                ->on('tournaments')
                ->onDelete('cascade');

            $table->string('round');
            $table->string('points1')->nullable();
            $table->string('points2')->nullable();

            $table->unsignedBigInteger('winner_id')->nullable();
            $table->foreign('winner_id')
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
        Schema::dropIfExists('matches');
    }
}
