@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('content')
    <h1>{{$comic->title}}</h1>    
    <img src="{{$comic->thumb}}" alt="">
    <h3>{{$comic->description}}</h3>
    <h4>{{$comic->series}} $</h4>
    <h4>{{$comic->sale_date}} $</h4>
    <h4>{{$comic->price}} $</h4>
@endsection