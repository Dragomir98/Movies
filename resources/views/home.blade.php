@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <hr>
                    <a href="/movies/create" class="btn btn-primary">Create a movie</a>
                    <hr>
                    @if(count($movies) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{$movie->name}}</td>
                                    <td><a href="/movies/{{$movie->id}}/edit" class="btn btn-outline-primary">Edit</a></td>
                                    <td>
                                        {!! Form::open(['action' => ['MoviesController@destroy', $movie->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>There are no movies created by this user yet.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
