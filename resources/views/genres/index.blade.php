@extends('layouts.app')

@section('content')
    <a href="/genres/create" class="btn btn-primary">Add a genre</a>
    <h1 class="bighead">Genres</h1>
    @if(isset($genres))
        @foreach($genres as $genre)
            <div>
                <div class="row">
                    <table class="indextable">
                        <thead>
                        <tr class="row">
                            <th class="col-sm-8">Name</th>
                            <th class="col-sm-4"></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="row">
                            <td class="col-sm-8"> {{$genre->name}} </td>
                            <td class="col-sm-4"> <a class="btn btn-info" href="/genres/{{$genre->id}}">Details</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    @else
        <p>No genres found</p>
    @endif
@endsection
