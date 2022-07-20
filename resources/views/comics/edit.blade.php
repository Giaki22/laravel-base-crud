@extends('layouts.base')

@section('page-title')
    Modifica Fumetto ({{$comic->title}})
@endsection

@section('content')
    <h1>Modifica Fumetto</h1>
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT', $comic->id)

            <div class="Titolo">
                <label for="titolo">Titolo</label>
                <input type="text" value="{{$comic->title}}" name="title" id="titolo">
            </div>
            <div class="Descrizione">
                <label for="description">Descrizione</label>
                <input type="text" value="{{$comic->description}}" name="description" id="desc">
            </div>
            <div class="Immagine">
                <label for="pic">URL Immagine</label>
                <input type="text" value="{{$comic->thumb}}" name="thumb" id="pic">
            </div>
            <div class="Prezzo">
                <label for="price">Prezzo</label>
                <input type="text" value="{{$comic->price}}" name="price" id="price">
            </div>
            <div class="Serie">
                <label for="series">Serie</label>
                <input type="text" value="{{$comic->series}}" name="series" id="series">
            </div>
            <div class="Data uscita">
                <label for="sale_date">Data uscita</label>
                <input type="text" value="{{$comic->sale_date}}" name="sale_date" id="sale_date">
            </div>
            <div class="Tipo">
                <label for="type">Tipo</label>
                <input type="text" value="{{$comic->type}}" name="type" id="type">
            </div>
        <button type="submit">Modifica</button>
    </form>
@endsection