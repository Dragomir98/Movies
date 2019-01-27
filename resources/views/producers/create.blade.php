@extends('layouts.app')

@section('content')
    <a href="/producers" class="btn btn-outline-info">Go back</a>
    <h1 class="bighead">Create a Producer</h1>
    <div class="jumbotron">
        {!! Form::open(['action' => 'ProducersController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        {{csrf_field()}}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name...'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'brn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection