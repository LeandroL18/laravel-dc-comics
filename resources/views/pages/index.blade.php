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

                <a class="button" href="{{ route('edit', $comic -> id) }}">Modifica</a>

                <form class="inline" action="{{ route('destroy', $comic -> id) }}" method="POST" onsubmit="return confirm('Confermare')">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Rimuovi">
                </form>
            </li>
        @endforeach
    </ol>
@endsection
