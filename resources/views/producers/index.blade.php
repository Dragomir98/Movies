@extends('layouts.app')

@section('content')
    <a href="/producers/create" class="btn btn-primary">Add a producer</a>
    <h1 class="bighead">Producers</h1>
    @if(isset($producers))
        @foreach($producers as $producer)
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
                            <td class="col-sm-8"> {{$producer->name}} </td>
                            <td class="col-sm-4"> <a class="btn btn-info" href="/producers/{{$producer->id}}">Details</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    @else
        <p>No producers found</p>
    @endif
@endsection
