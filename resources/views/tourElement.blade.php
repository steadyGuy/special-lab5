@extends('layouts/main-layout')

@section('title', 'Выбранный тур для путешествия')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/why.css") }}">
@endsection
@section('content')
    <main>
        <h1 style="text-align: center;">
            {{$tour->title}} (@if($tour->isSpecial)<span style="color: red;">новинка<span>@endif)
        </h1>
        <h3 style="text-align: center;">
            {{-- Вместо tourType() (йгукн-игшдвук) используем свойство (belongsTo) --}}
            {{$tour->tourType->title}}
        </h3>
        <p style="text-align: center;">
            {{$tour->description}}
        </p>
        <div style="display: flex; justify-content: center; margin-top: 22px;">
            <img width="500" height="400" src="{{$tour->image}}" alt="{{$tour->title}}" />
        </div>
        <p style="text-align: center;">
            Цена тура: {{$tour->price}} грн, для <strong>{{$tour->peopleCount}}
            {{$tour->peopleCount === 1 ? 'человека' : 'человек'}}</strong>
        </p>
    </main>
@endsection
