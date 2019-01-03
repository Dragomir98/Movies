@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    @if(count($movies) > 0)
        @foreach($movies as $movie)
            <div class="idx">
                <div class="row">
                    <div class="col-xs-6 col-md-3">
                        <img class="resp" src="/storage/uploaded_images/{{$movie->uploaded_image}}">
                    </div>
                    <div class="col-xs-6 col-md-3">
                        <h3><a class="lead" href="/movies/{{$movie->id}}">{{$movie->name}}</a></h3>
                        <small class="lead">Written on {{$movie->created_at}} by {{$movie->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$movies->links()}}
    @else
        <p>No movies found</p>
    @endif
@endsection
