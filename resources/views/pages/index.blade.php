@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <br><a href="{{ route('create') }}">CREATE</a><br><br>
    <ol>
        @foreach ($comics as $comic)
            <li> 
                <a href="{{ route('show', $comic -> id) }}">
                    {{ $comic -> title }}
                </a>   
            </li>
        @endforeach
    </ol>
@endsection
