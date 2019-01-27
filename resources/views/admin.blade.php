@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h5 style="text-align: center;">You are logged as admin successfully!</h5>
                    </div>
                    <div class="panel-body">
                        <h3>Your Movies:</h3>
                        @if(count($movies) > 0)
                            <table class="indextable">
                                <tr>
                                    <th class="col-sm-4">Movie name</th>
                                    <th class="col-sm-4"></th>
                                    <th class="col-sm-4"></th>
                                </tr>
                                @foreach($movies as $movie)
                                    <tr>
                                        <td class="col-sm-4">{{$movie->name}}</td>
                                        <td class="col-sm-4"><a href="/movies/{{$movie->id}}/edit" class="btn btn-info">Edit</a></td>
                                        <td class="col-sm-4">
                                            {!!Form::open(['action' => ['MoviesController@destroy', $movie->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p style="color: red; text-decoration: underline;">Movies not found!</p>
                        @endif
                    </div>
                    <div class="panel-body">
                        <h3>Users:</h3>
                        <table class="indextable">
                            <tr>
                                <th class="col-sm-4">Username</th>
                                <th class="col-sm-4"></th>
                                <th class="col-sm-4"></th>
                            </tr>
                            @foreach($users as $user)
                                <tr>
                                    <td class="col-sm-4">{{$user->name}}</td>
                                    <td class="col-sm-4"><a href="/movies/{{$user->id}}/edit" class="btn btn-info">Edit</a></td>
                                    <td class="col-sm-4">
                                        {!!Form::open(['action' => ['MoviesController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection