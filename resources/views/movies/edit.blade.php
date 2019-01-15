@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="bighead">Edit</h1>
        {!! Form::open(['action' => ['MoviesController@update', $movie->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $movie->name, ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        <div class="form-group">
            {{Form::label('yearOfProduction', 'Year of production')}}
            {{Form::text('yearOfProduction', $movie->yearOfProduction, ['class' => 'form-control', 'placeholder' => 'Year...'])}}
        </div>
        <div class="form-group">
            {{Form::label('producer', 'Producer')}}
            {{Form::text('producer', $movie->producer, ['class' => 'form-control', 'placeholder' => 'Name of the producer...'])}}
        </div>
        <div class="form-group">
            {{Form::label('genre', 'Genre')}}
            {{Form::text('genre', $movie->genre, ['class' => 'form-control', 'placeholder' => 'Genre...'])}}
        </div>
        <div class="form-group">
            {{Form::label('language', 'Language')}}
            {{Form::text('language', $movie->language, ['class' => 'form-control', 'placeholder' => 'Language...'])}}
        </div>
        <div class="form-group">
            {{Form::file('uploaded_image')}}
        </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection