@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Toernooien toevoegen</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('tournaments.index')}}">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Toernooi</label>
                                <input type="text" class="form-control" name="tournament" placeholder="toernooi">
                            </div>
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

