@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('matches.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Toernooi</th>
                                <th scope="col">Speler1</th>
                                <th scope="col">speler2</th>
                                <th>Punten speler1</th>
                                <th>Punten speler2</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($wedstrijden as $wedstrijd)
                                <tr>
                                    @foreach($toernooi as $row)
                                        <td>{{$row->tournament}}</td><
                                    @endforeach
                                    @foreach($wedstrijd->player()->get() as $player)
                                        <td>{{$player->first_name}}</td>
                                    @endforeach
                                    <td>
                                        <a href="{{route('matches.edit', $wedstrijd->match_id)}}">
                                            <button type="button" class="btn btn-primary float-left">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('matches.destroy', $wedstrijd->match_id)}}"
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
