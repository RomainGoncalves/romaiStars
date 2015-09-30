@extends('layouts/master')

@section('content')
    <div class="row">
        <h2>All Places ({{ count($places) }})</h2>

        <a href="/places/create" class="btn btn-primary">Add an entry</a>

        @if(isset($places))

            <ul>
                @foreach($places as $place)

                    <li>{{ $place->name }}</li>

                @endforeach
            </ul>

        @endif
    </div>
@stop
