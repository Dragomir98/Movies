@extends('layouts.app')

@section('content')
<h1>Create a movie</h1>
    {!! Form::open(['action' => 'MoviesController@store', 'method' => 'POST']) !!}
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
        {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
    {!! Form::close() !!}
@endsection