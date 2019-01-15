<?php
?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <br>
        <div class="idx">
            <h3>Entered genres:</h3>
            @if(is_array($movies) || is_object($movies))
                <table class="table table-hover">
                    <tr>
                        <th>Genre</th>

                    </tr>
                    @foreach($movies as $movie)
                        <tr>
                            <td>{{$movie->genre}}</td>
                        </tr>
                    @endforeach
                </table>
            @else
                <p style="color: red; text-decoration: underline;">No genres not found!</p>
            @endif
        </div>
    </div>
@endsection
