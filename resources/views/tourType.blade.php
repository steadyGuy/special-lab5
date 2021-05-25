@extends('layouts/main-layout')

@section('title', 'Тур' . $tourType->title)
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/why.css") }}">
    <link rel="stylesheet" href="{{ asset("css/tour.css") }}">
@endsection
@section('content')
    <main>
        <h1 style="text-align: center;">
            {{$tourType->title}}
            {{-- Используем свять 1 ко многим и метод count --}}
            <span style="color: #9E9E9E;">({{$tourType->tours->count()}})</span>
        </h1>
        <p style="text-align: center;">
            {{$tourType->description}}
        </p>
        <div style="display: flex; justify-content: center; margin-top: 22px;">
            <img width="500" height="400" src="{{$tourType->image}}" alt="{{$tourType->title}}" />
        </div>
        <div class="hot-tour">
            <div class="hot-tour-block">
            @foreach ($tourType->tours as $tour)
                <div class="first-block active" style="background: url({{$tour->image}}) no-repeat center; background-size: cover;">
                    <div class="hot-tour-block__items">
                        <div class="stars-block">
                            @for ($i = 0; $i < $tour->stars; $i++)
                                <img src="{{URL::asset('/img/star.png')}}" alt="star">
                            @endfor
                        </div>
                        <p>{{$tour->price}} грн. <br> за {{$tour->peopleCount}} человека</p>
                        <a href="/tours/{{$tour->slug}}">Подробнее</a>
                        @include('card', $tour)
                        <div class="footer-card">
                            {{$tour->title}}
                        </div>
                    </div>
                </div>
        @endforeach
            </div>
        </div>
    </main>
@endsection
