@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <a href="/producers" class="btn btn-outline-info">Go back</a>
        <h1 class="bighead">Edit producer</h1>
        {!! Form::open(['action' => ['ProducersController@update', $producer->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $producer->name, ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection