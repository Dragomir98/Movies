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
                        <div align="center">
                            <a href="/movies/create" class="btn btn-primary">Add a movie</a>
                            <a href="/genres/create" class="btn btn-primary">Add a genre</a>
                            <a href="/producers/create" class="btn btn-primary">Add a producer</a>
                        </div>
                    <hr>
                    @if(count($movies) > 0)
                        <table class="indextable">
                            <tr>
                                <th>Movie name</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($movies as $movie)
                                <tr>
                                    <td>{{$movie->name}}</td>
                                    <td><a href="/movies/{{$movie->id}}/edit" class="btn btn-primary">Edit</a></td>
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
