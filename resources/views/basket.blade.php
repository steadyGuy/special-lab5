@extends('layouts/main-layout')

@section('title', 'Корзина купленных туров')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
@endsection
@section('content')
<div class="container" style="width: 800px; margin: 72px auto;">
    <table border="1"width="800">
        <tr>
            <th>Название: </th>
            <th>Цена: </th>
        </tr>
        @foreach ($order->tours as $tour)
            <tr>
                <td><a href="tours/{{ $tour->slug }}">{{$tour->title}}</a></td>
                <td>{{$tour->price}}</td>
            </tr>
        @endforeach
    </table>
    <a href="/basket-place"><button>Оформить заказ</button></a>
</div>
@endsection
