@extends('layouts/main-layout')

@section('title', 'Выбранный тур для путешествия')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/why.css") }}">
@endsection
@section('content')
    <main>
        <div class="main-block" style="background: url({{URL::asset('/img/main-bg.png')}}) no-repeat center center;">
            <h2>ПОЧЕМУ ПУТЕШЕСТВОВАТЬ С НАМИ? <br> <span>ВОПЛОЩАЯ ВАШИ САМЫЕ СМЕЛЫЕ МЕЧТЫ</span></h2>
        </div>
        <section class="info">
            <div class="flex-wrapper">
                <div class="left">
                    <img src="{{URL::asset('/img/photo.png')}}" alt="photo">
                </div>
                <div class="right">
                    <p><span>Это может показаться странным.</span> <br> Кажется, что, когда вы путешествуете, вы открываете новые красивые места и страны, и вы никогда не захотите вернуться домой. Но в гостях хорошо, а дома лучше, и вы осознаете это еще больше, когда путешествуете.</p>
                </div>
            </div>
            <div class="flex-wrapper">
                <div class="right">
                    <p><span>Путешествуйте, чтобы лучше узнать себя.</span> <br> Чем больше вы путешествуете, тем больше у вас возможностей  для самоанализа и взгляда в прошлое. Путешествие – это действительно отличный учитель, который не только учит вас миру, он также учит вас о себе и вашем месте в мире.</p>
                </div>
                <div class="left">
                    <img src="{{URL::asset('/img/snow.png')}}" alt="snow">
                </div>
            </div>
            <div class="flex-wrapper">
                <div class="right">
                   <img src="{{URL::asset('/img/car.png')}}" alt="car">
                </div>
                <div class="left">
                    <img src="{{URL::asset('/img/boat.png')}}" alt="boat">
                </div>
            </div>
        </section>
        <section class="text">
            <p><span>Вы должны путешествовать, чтобы увидеть всю невероятную красоту</span> на этой земле, которой мы одарены. Существует столько различных форм красоты в пустынях, горах, океанах и фьордах. Видение всех этих экосистем может дать нам более конкретное понимание того, что мы можем потерять, если мы не будем заботиться о природе.</p>
        </section>
    </main>
@endsection
