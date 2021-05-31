<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chess_Club extends Model
{

    protected $table = 'chess_clubs';
    protected $primaryKey = 'club_id';

    public function player(){
        return $this->hasMany('App\Player');
    }
}
