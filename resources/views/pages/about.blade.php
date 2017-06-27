
@extends('layouts.app')

@section('content')

    <h1> {{$title}}</h1>

    @if(count($frameworks) > 0)
        @foreach($frameworks as $fw)
            <li> {{$fw}}</li>
        @endforeach
    @endif

@endsection