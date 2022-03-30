@extends('layouts.base')

@section('pageTitle', 'comic')

@section('content')

    <div class="jumbotron"></div>

    <div class="figurina">
        <div class="container">
            <img class="cover_fumetto" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
        </div>
    </div>
    <div class="container">
        
        <div class="descrizione">
            <h3>{{$comic['title']}}</h3>

            <div class="sold">
                <div class="price_status">
                    <span>U.S. Price: <span class="price">{{$comic['price']}}</span></span>
                    <span>AVAILABLE</span>
                </div>
                <div class="status_check">
                    <span class="price">Check Availability</span>
                </div>
            </div>

            <p>{{$comic['description']}}</p>

        </div>
        
    </div>

    <div class="section">
        <div class="container-group container">
            
            {{-- Talent --}}
            <div class="talent">
                <h3>Talent</h3>
                <div class="details_art">
                    <span>Art by:</span>
                    <p>
                        @foreach ($comic['artists'] as $artist)
                            <a href="#">{{$artist}}</a>
                        @endforeach
                    </p>
                </div>
                <div class="details_art">
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
                <div class="details_series">
                    <span>Series:</span>
                    <div class="details_item">
                        <a href="#">{{$comic['series']}}</a>
                    </div>
                </div>
                <div class="details_series">
                    <span>U.S. Price:</span>
                    <a href="#">{{$comic['price']}}</a>
                </div>
                <div class="details_series">
                    <span>On Sale Date:</span>
                    <div class="details_item">
                        <a href="#">{{$comic['sale_date']}}</a>
                    </div>
                </div>
            </div>

        </div>


@endsection