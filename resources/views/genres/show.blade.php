@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a href="/genres" class="btn btn-outline-info">Go back</a>
        <h1 class="bighead">{{$genre->name}}</h1>
        <div align="center">
                @if(!Auth::guest())
                    <table>
                        <td class="showtd"><a href="/genres/{{$genre->id}}/edit" class="btn btn-primary">Edit</a></td>
                        <td class="showtd">
                            {!! Form::open(['action' => ['GenresController@destroy', $genre->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!! Form::close() !!}</td>
                    </table>
                @endif
        </div>
    </div>
@endsection
