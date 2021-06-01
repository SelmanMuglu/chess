<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Match;
use App\PlayerMatch;
use App\Tournament;
use App\Player;
use Illuminate\Http\Request;

class MatchesController extends Controller
{

    public function index()
    {
        $toernooi = DB::table('tournaments')->join('matches', 'matches.tournament_id', '=', 'tournaments.tournament_id')
            ->select('tournaments.tournament')->get();
        $wedstrijden = Match::all();
//        dd($toernooi);
        return view('matches.index', compact('wedstrijden', 'toernooi'));
    }


    public function create()
    {
        $tournaments = Tournament::all('tournament', 'tournament_id');
        $players = Player::all('first_name', 'player_id');

        return view('matches.create', compact('players', 'tournaments'));
    }


    public function store(Request $request)
    {
        $wedstrijd = new Match();

        $wedstrijd->tournament_id = $request->tournament_id;
        $wedstrijd->round = $request->round;
        $wedstrijd->save();
        $this->linkPLayerToMatch($wedstrijd, $request->speler1);
        $this->linkPLayerToMatch($wedstrijd, $request->speler2);
        return redirect()->route('matches.index');
    }

    private function linkPLayerToMatch(Match $match, $playerId){
        $playerMatch = new PlayerMatch();
        $playerMatch->match_id = $match->match_id;
        $playerMatch->player_id = $playerId;
        $playerMatch->save();
    }


    public function edit(Match $match)
    {
        $tournaments = Tournament::all('tournament', 'tournament_id');
        $players = Player::all('first_name', 'player_id');
        return view('matches.edit', compact('match', 'tournaments', 'players'));
    }


    public function update($id)
    {
        $wedstrijd = Match::find($id);
        $wedstrijd->tournament_id = request('tournament_id');
        $this->updateLinkPLayerToMatch($wedstrijd, [request('speler2'), request('speler1')]);
        $wedstrijd->round = request('round');
        $wedstrijd->points1 = request('points1');
        $wedstrijd->points2 = request('points2');
        $wedstrijd->save();
        return redirect()->route('matches.index');
    }
    private function updateLinkPLayerToMatch(Match $match, $playerIds){
        $playerMatches = PlayerMatch::where('match_id', $match->match_id)->get();
        foreach($playerMatches as $key =>$playerMatch) {
            $playerMatch->match_id = $match->match_id;
            $playerMatch->player_id = $playerIds[$key];
            $playerMatch->save();
        }
    }


    public function destroy($matchId)
    {
        Match::destroy($matchId);
        return redirect('matches');
    }
}
