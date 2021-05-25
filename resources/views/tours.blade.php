@extends('layouts/main-layout')

@section('title', 'Список туров')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/tour.css") }}">
@endsection
@section('content')
    <main>
        <h2>Поиск туров</h2>
        <div class="tour-info">
            <div class="tour-info-card">
                <img src="img/planet.png" alt="planet">
                <p>Страна, курорт, отель <br> <select><option>Египет</option><option>Турция</option><option>Мальдивы</option><option>Кипр</option></select> <span>все курорты</span></p>
            </div>
            <div class="tour-info-card">
                <img src="img/plane.png" alt="plane">
                <p>Вылет из <br> <select><option>Киев</option><option>Львов</option><option>Одесса</option><option>Харьков</option><option>Днепр</option></select> </p>
            </div>
            <div class="tour-info-card">
                <img src="img/calendar.png" alt="calendar">
                <p>Дата, длительность <br> <select><option>11.03-21.03 (10 ночей)</option><option>11.03-18.03 (7 ночей)</option><option>11.03-16.03 (5 ночей)</option><option>11.03-14.03 (3 ночи)</option></select></p>
            </div>
            <div class="tour-info-card">
                <img src="img/person.png" alt="people">
                <p>Кто едет <br> <select> <option>2 взрослых</option> <option>3 взрослых</option> <option>4 взрослых</option><option>5+ взрослых</option></select> </p>
            </div>
        </div>
        <div class="search-block">
            <a href="#" class="btn-search">Искать</a>
        </div>
        <div class="hot-tour">
            <h2>Горячие туры</h2>
            <div class="hot-tour-block">
            @foreach ($tours as $tour)
                <div class="first-block active" style="background: url({{$tour->image}}) no-repeat center; background-size: cover;">
                    <div class="hot-tour-block__items">
                        <div class="stars-block">
                            @for ($i = 0; $i < $tour->stars; $i++)
                                <img src="img/star.png" alt="star">
                            @endfor
                        </div>
                        <p>{{$tour->price}} грн. <br> за {{$tour->peopleCount}} человека</p>
                        <a href="/tours/{{$tour->slug}}">Подробнее</a>
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
