<?php
?>
@extends('layouts.app')

@section('content')
        <div class="container">
            <br>
            <div class="idx">
                <h3>Entered producers:</h3>
                @if(is_array($movies) || is_object($movies))
                <table class="table table-hover">
                    <tr>
                        <th>Producers</th>
                        <th>Date of insertion</th>
                    </tr>
                    @foreach($movies as $movie)
                    <tr>
                        <td>{{$movie->producer}}</td>
                        <td>{{$movie->created_at}}</td>
                    </tr>
                    @endforeach
                </table>
                @else
                <p style="color: red; text-decoration: underline;">Producers not found!</p>
                @endif
            </div>
        </div>
@endsection
