
@extends('layouts.app')

@section('content')


    @if(count($students) > 0)
        @foreach($students as $sttudent)
            <div class="well">
                   {{$student}}
             </div>
        @endforeach
    @else

    @endif

@endsection