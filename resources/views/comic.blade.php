@extends('layouts.base')

@section('pageTitle', 'comic')

@section('content')

    <div class="jumbotron"></div>

    <div class="container">
        <div class="figurina container-fluid">
            <img class="cover_fumetto" src="{{$comic['thumb']}}" alt="">
        </div>
        
        <div class="descrizione">
            <h3>{{$comic['title']}}</h3>

            <div class="price_status">
                <span>U.S. Price: {{$comic['price']}}</span>
            </div>

            <p>{{$comic['description']}}</p>

        </div>
        
    </div>


    <div class="container">
        {{-- Talent --}}
        <div class="talent">
            <h3>Talent</h3>
            <div class="details">
                <span>Art by:</span>
                <p>
                    @foreach ($comic['artists'] as $artist)
                        <a href="#">{{$artist}}</a>
                    @endforeach
                </p>
                <span>Written by:</span>
                <p>
                    @foreach ($comic['writers'] as $writer)
                        <a href="#">{{$writer}}</a>
                    @endforeach
                </p>
            </div>
        </div>

        {{-- Specs --}}
        <div class="specs">
            <h3>Specs</h3>
            <div class="details">
                <span>Series:</span>
                <div class="details_item">
                    <a href="#">{{$comic['series']}}</a>
                </div>
                <span>U.S. Price</span>
                <div class="details_item">
                    <a href="#">{{$comic['price']}}</a>
                </div>
                <span>On Sale Date:</span>
                <div class="details_item">
                    <a href="#">{{$comic['sale_date']}}</a>
                </div>
            </div>
        </div>
    </div>


@endsection