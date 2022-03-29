@php
    $comics = config('comics');
@endphp

@extends('layouts.base')

@section('pageTitle', 'Home page')

@section('content')

    <div class="jumbotron"></div>
    
        <section>
            <div class="title-main container">
                <h2>current series</h2>
            </div>

            <div class="container">
                {{-- Creazione dinamica Card --}}
                @foreach ($comics as $index => $comic)
                    <div class="card">
                        <a href="{{ route('comic', ['id' => $index]) }}">
                            <img class="card-thumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            <span>{{$comic['series']}}</span>
                        </a>
                    </div>
                @endforeach
        
                <div id="load-more">load more</div>

            </div>

        </section>

    @include('navMainMenu')

@endsection




