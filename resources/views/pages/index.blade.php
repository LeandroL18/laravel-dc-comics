@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
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
