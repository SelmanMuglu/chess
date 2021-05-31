@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Toernooien wijzigen</div>
                    <div class="card-body">
                        <form method="POST" action="{{route('tournaments.update', $tournament)}}">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Toernooi</label>
                                <input type="text" class="form-control" name="tournament" value="{{$tournament->tournament}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
