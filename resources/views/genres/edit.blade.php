@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a href="/genres" class="btn btn-outline-info">Go back</a>
        <h1 class="bighead">Edit genre</h1>
        {!! Form::open(['action' => ['GenresController@update', $genre->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $genre->name, ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection