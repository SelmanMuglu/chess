@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('tournaments.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Toernooi</th>
                                <th>Wijzig</th>
                                <th>Verwijder</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($toernooien as $toernooi)
                                <tr>
                                    <td>{{$toernooi->tournament_id}}</td>
                                    <td>{{$toernooi->tournament}}</td>
                                    <td>
                                        <a href="{{route('tournaments.edit', $toernooi->tournament_id)}}">
                                            <button type="button" class="btn btn-primary float-left">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('tournaments.destroy', $toernooi->tournament_id)}}"
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

