@extends('layouts/main-layout')

@section('title', 'Страница заказа')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content')
  <div class="container" style="width: 800px; margin: 72px auto;">
    <h1></h1>
    <p>Общая стоимость заказа - {{ $order->getFullPrice() }}</p>
    <form action="/basket-confirm" method="post">
        @csrf
        <input type="text" placeholder="Ваше имя" name="name">
        <input type="tel" placeholder="+38(___)___-___-_" name="phone">

        <input type="submit" value="Подтвердить заказ">
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
</div>
@endsection
