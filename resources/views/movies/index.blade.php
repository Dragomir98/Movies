@extends('layouts.app')

@section('content')
    <a href="/movies/create" class="btn btn-primary">Add a movie</a>
    <h1 class="bighead">Movies</h1>
    <div class="flex-center position-ref full-height">
        <div class="Search-form">
            <form class="" action="{{ URL::to('/search') }}" method="get">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="query" class="form-control" placeholder="Search by year of production, producer, movie name and genre">
                    <span class="input-group-btn">
                        <button type="submit" name="button" class="btn btn-primary">
                            <span class="fa fa-search">Submit</span>
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <br>
    @if(isset($movies))
        @foreach($movies as $movie)
            <div>
                <div class="row">
                    <table class="indextable">
                        <thead>
                        <tr>
                            <th class="col-sm-2">Image</th>
                            <th class="col-sm-2">Production year</th>
                            <th class="col-sm-3">Movie</th>
                            <th class="col-sm-2">Producer</th>
                            <th class="col-sm-1">Genre</th>
                            <th class="col-sm-1">User</th>
                            <th class="col-sm-1"></th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="col-sm-2"> <img class="resp" src="/storage/uploaded_images/{{$movie->uploaded_image}}"></td>
                                <td class="col-sm-2"> {{$movie->yearOfProduction}}</td>
                                <td class="col-sm-3"> {{$movie->name}} </td>
                                <td class="col-sm-2"> {{$movie->producer}} </td>
                                <td class="col-sm-1"> {{$movie->genre}}</td>
                                <td class="col-sm-1"> {{$movie->user->name}} </td>
                                <td class="col-sm-1"> <a class="btn btn-info" href="/movies/{{$movie->id}}">Details</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    @else
        <p>No movies found</p>
    @endif
@endsection
