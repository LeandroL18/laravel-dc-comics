@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
    <h1>New Comic</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <form action="{{route('store')}}" method="POST">

            @csrf
            @method('POST')

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title"><br><br>

            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description"><br><br>

            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price"><br><br>

            <input type="submit" value="CREA">
        </form>
    </div>
@endsection