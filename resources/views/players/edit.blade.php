@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Speler toevoegen</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('players.update', $player)}}">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Voornaam</label>
                                <input type="text" class="form-control" name="first_name" value="{{$player->first_name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tussenvoegsel</label>
                                <input type="text" class="form-control" name="prefix" value="{{$player->prefix}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Achternaam</label>
                                <input type="text" class="form-control" name="last_name" value="{{$player->last_name}}">
                            </div>
                            <div class="form-group">
                                <label for="club">Kies de club</label>
                                <select name="club" class="custom-select" id="inputGroupSelect01">
                                    @foreach($clubs as $club)
                                        <option value="{{$club->club_id}}">{{$club->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="club">Neemt deel</label><br>
                                <input type="checkbox" name="participate" value="1">
                            </div>
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
