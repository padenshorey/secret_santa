@extends('layout')

@section('content')
    <h1>ADMIN</h1>
    <ul>
    @foreach($participants as $participant)
        <li>{{$participant->firstName}} {{$participant->lastName}}</li>
    @endforeach
    </ul>

@endsection