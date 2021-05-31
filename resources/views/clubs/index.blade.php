@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{route('clubs.create')}}">
                            <button type="button" class="btn btn-primary float-left">toevoegen</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Vereniging</th>
                                <th scope="col">Telefoonnummer</th>
                                <th>Wijzig</th>
                                <th>Verwijder</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clubs as $club)
                                <tr>
                                    <td>{{$club->club_id}}</td>
                                    <td>{{$club->name}}</td>
                                    <td>{{$club->phone_number}}</td>
                                    <td>
                                        <a href="{{route('clubs.edit', $club->club_id)}}">
                                            <button type="button" class="btn btn-primary float-left">Edit</button>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{route('clubs.destroy', $club->club_id)}}"
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
