<?php

namespace App\Http\Controllers;

use App\Tournament;

use Illuminate\Http\Request;

class TournamentsController extends Controller
{

    public function index()
    {
        $toernooien = Tournament::all();
        return view('tournaments.index', compact('toernooien'));
    }


    public function create()
    {
        return view('tournaments.create');
    }


    public function store(Request $request)
    {
        $toernooi = new Tournament();

        $toernooi->tournament = $request->tournament;
        $toernooi->save();
        return redirect()->route('tournaments.index');
    }

    public function edit(Tournament $tournament)
    {
        return view('tournaments.edit', compact('tournament'));
    }


    public function update($id)
    {
        $tournaments = Tournament::find($id);
        $tournaments->tournament = request('tournament');
        $tournaments->save();
        return redirect()->route('tournaments.index');
    }


    public function destroy($toernooiId)
    {
        Tournament::destroy($toernooiId);
        return redirect('tournaments');
    }
}
