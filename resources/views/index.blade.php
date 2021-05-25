@extends('layouts/main-layout')

@section('title', 'Главная страница')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content')
    <main>
        <section class="all-toure">
            <div class="img-block" style='background: url("{{URL::asset('/img/imgHawaii 1.svg')}}") no-repeat center;'>
                <h3>10-24 <br> <span>апреля</span></h3>
                <div class="bott">
                    <p>Большое ущелие <br> на острове Гавайи</p>
                    <img src="img/Arrow.svg" alt="arrow">
                </div>
            </div>
            <div class="toure-info">
                <h2>Посмотрите все <br> направления туров</h2>
                <p>Берега океанов и дикие пляжи с редкими <br> породами деревьев. Местная архитектура и <br> первозданный вид дикой природы</p>
                <a target="_blank" href="/tours">Смотреть все</a>
            </div>
        </section>
        <section id="feedback-form" class="feedback-form" style="background: url({{URL::asset('/img/bgForm.svg')}}) no-repeat center;">
            <div class="info">
                <h2>Оставьте заявку на <br> бесплатную <br> консультацию</h2>
                <p>Мы перезвоним Вам <br> в ближайшее время</p>
            </div>
            <form action="/send-order" method="post">
                @csrf
                <input type="text" placeholder="Ваше имя" name="name">
                <input type="tel" placeholder="+38(___)___-___-_" name="mobile">

                <input type="submit" value="Отправить заявку">
                <p>Нажимая кнопку, Вы даете согласие на <br> <span>обработку персональных данных</span></p>
                <div class="results">
                    @if(Session::get('success'))
                            {{ Session::get('success') }}
                    @endif
                    @if(Session::get('fail'))
                        {{ Session::get('fail') }}
                @endif
                </div>
            </form>
        </section>
        <section class="all-toure">
            <div class="toure-info hide">
                <h2>Что пишут участники <br> наших путешествий</h2>
                <p>87% участников приходят по личной рекомендации <br> от друзей. А каждый 4-ый путешествует с нами <br> больше двух раз!</p>
                <a target="_blank" href="/why">Читать отзывы</a>
            </div>
            <div class="img-block about-us" style='background: url("{{URL::asset('/img/imgHawaii 1.svg')}}") no-repeat center;'>
                <h3>Отзыв<br> <span>Елена Иванова</span></h3>
                <div class="bott">
                    <p>Пожалуй, это был самый <br> лучший отпуск в моей жизни...</p>
                    <img src="{{URL::asset('/img/Arrow.svg')}}" alt="arrow">
                </div>
            </div>
        </section>
    </main>
    <div class="media-hide">
        <h2>ПОЧЕМУ ПУТЕШЕСТВОВАТЬ С НАМИ? <br> <span>ВОПЛОЩАЯ ВАШИ САМЫЕ СМЕЛЫЕ МЕЧТЫ</span></h2>
        <div class="wrapper">
            <div class="flex-item">
                <h3>Подбор в группу</h3>
                <p>
                    Мы понимаем, что непревзойденность путешествия зависит от участников поездки. Поэтому каждая наша программа имеет критерии подбора в группу, что лишает вас рисков оказаться “не в своей тарелке” и привносит ценность в путешествие.
                </p>
            </div>
            <div class="flex-item">
                <div class="watch-video">
                    <img src="{{URL::asset('/img/Group.png')}}" alt="play">
                    <p>Посмотрите <br> видео-отчет <br> 2018-2019</p>
                </div>
            </div>
            <div class="flex-item">
                <div class="media-img">
                    <h3>Воспоминания</h3>
                    <img src="{{URL::asset('/img/Arrow 1.png')}}" alt="arrow" class="media-arrow">
                </div>
            </div>
            <div class="flex-item">
                <h3>Новые друзья</h3>
                <p>
                    Красота путешествия – это не только новые места и ни с чем не сравнимый опыт, но и попутчики и их порой невероятные истории. Именно так завязывается настоящая дружба, когда мы собираем разных людей, при этом объединенных уникальной атмосферой общего приключения.
                </p>
                <p>
                    Мы делимся друг с другом эмоциями, улыбками, энергией, вдохновением. Эти яркие краски, дружба, воспоминания остаются с нами навсегда.
                </p>
            </div>
        </div>
    </div>
@endsection
