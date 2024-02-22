@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')
    <br><h2>Title: {{ $comic -> title }}</h2>
    <p>Description: {{ $comic -> description }}</p>
    <h2>Price: ${{ $comic -> price }}</h2><br><br>

    <a href="{{ route('index') }}">TORNA ALLA HOME</a><br><br>
@endsection