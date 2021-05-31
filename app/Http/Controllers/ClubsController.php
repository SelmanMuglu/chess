<?php

namespace App\Http\Controllers;

use App\Chess_Club;

use Illuminate\Http\Request;

class ClubsController extends Controller
{

    public function index()
    {
        $clubs = Chess_Club::all();
        return view('clubs.index', compact('clubs'));
    }


    public function create()
    {
        return view('clubs.create');
    }


    public function store(Request $request)
    {
       $clubs = new Chess_Club();
       $clubs->name = $request->name;
       $clubs->phone_number = $request->phone_number;
       $clubs->save();
       return redirect()->route('clubs.index');
    }




    public function edit(Chess_Club $club)
    {
        return view('clubs.edit', compact('club'));
    }


    public function update($id)
    {
        $club = Chess_Club::find($id);
        $club->name = request('name');
        $club->phone_number = request('phone_number');
        $club->save();
        return redirect()->route('clubs.index');

    }


    public function destroy($clubId)
    {
        Chess_Club::destroy($clubId);
        return redirect('clubs');
    }
}
