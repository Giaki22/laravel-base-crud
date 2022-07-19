@extends('layouts.base')

@section('page-title')
    Crea Fumetto
@endsection

@section('content')
    <h1>Crea Fumetto</h1>
    <form action="{{route('comics.store')}}" method="post">
        @csrf
            <div class="Titolo">
                <label for="titolo">Titolo</label>
                <input type="text" name="title" id="titolo">
            </div>
            <div class="Descrizione">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="desc">
            </div>
            <div class="Immagine">
                <label for="pic">URL Immagine</label>
                <input type="text" name="thumb" id="pic">
            </div>
            <div class="Prezzo">
                <label for="price">Prezzo</label>
                <input type="text" name="price" id="price">
            </div>
            <div class="Serie">
                <label for="series">Serie</label>
                <input type="text" name="series" id="series">
            </div>
            <div class="Data uscita">
                <label for="sale_date">Data uscita</label>
                <input type="text" name="sale_date" id="sale_date">
            </div>
            <div class="Tipo">
                <label for="type">Tipo</label>
                <input type="text" name="type" id="type">
            </div>
        <button type="submit">Crea</button>
    </form>
@endsection