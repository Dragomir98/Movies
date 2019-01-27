@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a href="/movies" class="btn btn-outline-info">Go back</a>

        <h1 class="bighead">{{$movie->name}}</h1>
        <img style="width:100%" src="/storage/uploaded_images/{{$movie->uploaded_image}}">
        <br><br>
        <div>
            <ul>
                <li>{!! $movie->yearOfProduction !!}</li>
                <li>{!! $movie->producer !!}</li>
                <li>{!! $movie->genre !!}</li>
                <li>{!! $movie->language !!}</li>
            </ul>
        </div>
        <hr>
        <small>Written on {{$movie->created_at}} by {{$movie->user->name}}</small>
    </div>
    @if(!Auth::guest())
        @if(Auth::user()->id == $movie->user_id)
            <table>
            <td class="showtd"><a href="/movies/{{$movie->id}}/edit" class="btn btn-primary">Edit</a></td>
            <td class="showtd">
            {!! Form::open(['action' => ['MoviesController@destroy', $movie->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}</td>
            </table>
        @endif
    @endif
@endsection
