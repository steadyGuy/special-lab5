@extends('layouts/main-layout')

@section('title', 'Тур' . $tourType->title)
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/why.css") }}">
@endsection
@section('content')
    <main>
        <h1 style="text-align: center;">
            {{$tourType->title}}
        </h1>
        <p style="text-align: center;">
            {{$tourType->description}}
        </p>
        <div style="display: flex; justify-content: center; margin-top: 22px;">
            <img width="500" height="400" src="{{$tourType->image}}" alt="{{$tourType->title}}" />
        </div>
    </main>
@endsection
