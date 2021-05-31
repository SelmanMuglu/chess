<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $primaryKey = 'player_id';

    public function club(){
        return $this->belongsTo('App\Chess_Club', 'club_id');
    }

    public function match(){
        return $this->belongsToMany('App\Match', 'players_matches', 'player_id', 'match_id');
    }
}
