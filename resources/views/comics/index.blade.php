@extends('layouts.base')

@section('page-title')
    Tutti i fumetti
@endsection

@section('content')
    <h1>Libreria</h1>
    <ul>
        @foreach ($library as $comic)
            <li>
                <img src="{{$comic->thumb}}" alt="">
                <h2><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></h2>
                <p>{{$comic->description}}</p>
                <h4>{{$comic->price}} $</h4>
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">CANCELLA</button>
                </form>
                <hr>
            </li>
        @endforeach
    </ul>
@endsection