@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="well">
                <h3><a href="/movies/{{$movie->id}}">{{$movie->name}}</a></h3>
                <small>Written on {{$movie->created_at}} by {{$movie->user->name}}</small>
            </div>
        @endforeach
        {{$movies->links()}}
    @else
        <p>No movies found</p>
    @endif
@endsection
