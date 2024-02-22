@extends('layouts.main-layout')
@section('head')
    <title>Update</title>
@endsection
@section('content')
    <h1>Update Comic</h1>
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
        <form action="{{route('update', $comics -> id)}}" method="POST">

            @csrf
            @method('PUT')

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ $comics->title }}"><br><br>

            <label for="description">Descrizione</label>
            <input type="text" name="description" id="description" value="{{ $comics->description }}"><br><br>

            <label for="price">Prezzo</label>
            <input type="number" name="price" id="price" value="{{ $comics->price }}"><br><br>

            <input type="submit" value="AGGIORNA">
        </form>
    </div>
@endsection