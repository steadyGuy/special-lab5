@extends('layouts/main-layout')

@section('title', 'Список всех видов туров')
@section('styles')
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/why.css") }}">
@endsection
@section('content')
    <main>
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
        @foreach ($tours as $key => $tourType)
        <div style="margin-top: 24px;">
            @include('tourTypeComponent', ['tourType' => $tourType])
        </div>
        @endforeach
    </div>
    </main>
@endsection
