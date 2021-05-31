@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('players.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Voornaam</th>
                                <th scope="col">tussenvoegsel</th>
                                <th scope="col">Achternaam</th>
                                <th scope="col">Vereniging</th>
                                <th scope="col">Neemt deel</th>
                                <th>Wijzig</th>
                                <th>Verwijder</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($players as $player)
                                <tr>
                                    <td>{{$player->player_id}}</td>
                                    <td>{{$player->first_name}}</td>
                                    <td>{{$player->prefix}}</td>
                                    <td>{{$player->last_name}}</td>
                                    <td>{{$player->club->name}}</td>
                                    @if ($player->participate > 0)
                                        <td>ja</td>
                                    @else
                                        <td>nee</td>
                                    @endif
                                    <td>
                                        <a href="{{route('players.edit', $player->player_id)}}">
                                            <button type="button" class="btn btn-primary float-left">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('players.destroy', $player->player_id)}}"
                                              method="POST"
                                              class="float-left">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-warning">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
