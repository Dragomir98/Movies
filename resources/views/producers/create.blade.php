@extends('layouts.app')

@section('content')
    <div class="jumbotron">
    <a href="/producers" class="btn btn-info">Go back</a>
    <h1 class="bighead">Create a Producer</h1>
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