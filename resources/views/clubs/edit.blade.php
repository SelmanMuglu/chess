@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Verenigingen Wijzigen</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('clubs.update', $club)}}">
                            @csrf
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vereniging</label>
                                <input type="text" class="form-control" name="name" value="{{$club->name}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefoonnummer</label>
                                <input type="text" class="form-control" name="phone_number" value="{{$club->phone_number}}">
                            </div>
                            <button type="submit" class="btn btn-primary">Toevoegen</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
