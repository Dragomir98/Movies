@extends('layouts.app')

@section('content')
    <h1 class="bighead">Create a movie</h1>
        <div class="jumbotron">
        {!! Form::open(['action' => 'MoviesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        <div class="form-group">
            {{Form::label('yearOfProduction', 'Year of production')}}
            {{Form::text('yearOfProduction', '', ['class' => 'form-control', 'placeholder' => 'Year...'])}}
        </div>
        <div class="form-group">
            {{Form::label('producer', 'Producer')}}
            {{Form::text('producer', '', ['class' => 'form-control', 'placeholder' => 'Name of the producer...'])}}
        </div>
        <div class="form-group">
            {{Form::label('genre', 'Genre')}}
            {{Form::text('genre', '', ['class' => 'form-control', 'placeholder' => 'Genre...'])}}
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