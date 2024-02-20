@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics:</h1>
    <ol>
        @foreach ($comics as $comic)
            <li> 
                {{ $comic -> title }}
            </li>
        @endforeach
    </ol>
@endsection
