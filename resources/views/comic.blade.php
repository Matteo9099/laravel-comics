@extends('layouts.base')

@section('pageTitle', 'comic')

@section('content')

    <div class="jumbotron"></div>

    <div class="container">
        <img src="{{$comic['thumb']}}" alt="">
        
        <div class="descrizione">
            <h3>{{$comic['title']}}</h3>

            <div class="price_status">
                <span>U.S. Price: {{$comic['price']}}</span>
            </div>

            <p>{{$comic['description']}}</p>

        </div>
        
    </div>

@endsection