@extends('layouts.app')

@section('content')
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
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name of movie</th>
                            <th>Date of creation</th>
                            <th>By user</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> <img class="resp" src="/storage/uploaded_images/{{$movie->uploaded_image}}"></td>
                                <td> <a class="lead" href="/movies/{{$movie->id}}">{{$movie->name}} (Click to view or edit)</a></td>
                                <td> {{$movie->created_at}} </td>
                                <td> {{$movie->user->name}} </td>
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
