@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Toernooien toevoegen</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('matches.update', $match)}}">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="tournament_id">Kies de toernooi</label>
                                <select name="tournament_id" class="custom-select" id="inputGroupSelect01">
                                    @foreach($tournaments as $tournament)
                                        <option value="{{$tournament->tournament_id}}">{{$tournament->tournament}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="club">Kies speler 1</label>
                                <select name="speler1" class="custom-select" id="inputGroupSelect01">
                                    @foreach($players as $player)
                                        <option value="{{$player->player_id}}">{{$player->first_name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="club">kies speler 2</label>
                                <select name="speler2" class="custom-select" id="inputGroupSelect01">
                                    @foreach($players as $player)
                                        <option value="{{$player->player_id}}">{{$player->first_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Ronde</label>
                                <input type="text" class="form-control" name="round" value="{{$match->round}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Punten speler1</label>
                                <input type="text" class="form-control" name="points1" value="{{$match->points1}}">
                            </div>
                            <div class="form-group col-md-2">
                                <label for="exampleInputEmail1">Punten speler2</label>
                                <input type="text" class="form-control" name="points2" value="{{$match->points2}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
