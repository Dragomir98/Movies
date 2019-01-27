@extends('layouts.app')

@section('content')
    <div class="jumbotron">
    <a href="/movies" class="btn btn-info">Go back</a>
    <h1 class="bighead">Create a movie</h1>
        {!! Form::open(['action' => 'MoviesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
            {{csrf_field()}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        <div class="form-group">
            {{Form::label('yearOfProduction', 'Year of production')}}
            {{Form::text('yearOfProduction', '', ['class' => 'form-control', 'placeholder' => 'Year...'])}}
        </div>
        <div class="form-group">
            {{Form::label('producer', 'Producers')}}
            {!! Form::select('producer', $producerList, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{Form::label('genre', 'Genres')}}
            {!! Form::select('genre', $genreList, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {{Form::label('language', 'Language')}}
            {{Form::text('language', '', ['class' => 'form-control', 'placeholder' => 'Language...'])}}
        </div>
        <div class="form-group">
            {{Form::file('uploaded_image')}}
        </div>
        {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection