<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{

    protected $primaryKey = 'match_id';

    public function player(){
        return $this->belongsToMany('App\Player', 'players_matches', 'match_id', 'player_id');
    }
}
