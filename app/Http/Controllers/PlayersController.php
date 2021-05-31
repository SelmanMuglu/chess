<?php

namespace App\Http\Controllers;

use App\Player;
use App\Chess_Club;


use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', ['players' => $players]);

    }

    public function create()
    {
        $clubs = Chess_Club::all('name', 'club_id');

        return view('players.create', compact('clubs'));
    }

    public function store(Request $request)
    {
        $player = new Player();

        $player->first_name = $request->first_name;
        $player->prefix = $request->prefix;
        $player->last_name = $request->last_name;
        $player->club_id = $request->club;
        $player->participate = $request->has('participate');
        $player->save();
        return redirect()->route('players.index');
    }

    public function edit(Player $player)
    {
        $clubs = Chess_Club::all('name', 'club_id');
        return view('players.edit', compact('clubs', 'player'));
    }
    public function update(Player $player)
    {
        $player->first_name = request('first_name');
        $player->prefix = request('prefix');
        $player->last_name = request('last_name');
        $player->club_id = request('club');
        $player->participate = request('participate');

        $player->save();
        return redirect()->route('players.index');

    }

    public function destroy($playerId)
    {
        Player::destroy($playerId);
        return redirect('players');

    }

}
