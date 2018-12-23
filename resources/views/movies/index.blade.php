<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 23.12.2018 г.
 * Time: 18:39 ч.
 */
?>

@extends ('layouts.app')

@section('content')
    <h1>Movies</h1>
    @if(count($movies) > 1)
        @foreach($movies as $movie)
            <div class="well">
                <h3>{{$movies->genre}}</h3>
            </div>
        @endforeach
    @else
        <p>No movies are found</p>
    @endif
@endsection
