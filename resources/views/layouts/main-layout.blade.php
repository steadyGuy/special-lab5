<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('styles')
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header style="background: url({{URL::asset('/img/background.svg')}}) no-repeat center;">
        <div class="header">
            <img src="{{URL::asset('/img/logo.svg')}}" alt="logo">
            <nav>
                <ul class="nav-list">
                    <li><a href="{{route("tours-types")}}" class="nav-list__item">Виды туризма</a></li>
                    <li><a href="{{route("tours")}}" class="nav-list__item">Доступные туры</a></li>
                    <li><a href="{{route("about")}}" class="nav-list__item">О нас</a></li>
                </ul>
            </nav>
            <div class="burger-btn">
                <span></span>
            </div>
        </div>
        <h1>Открой для себя <br> Новую Ирландию</h1>
        <h2>Авторские туры по экзотическим <br> местам от Ивана Иванова</h2>
        <div class="feedback-btn">
            <a class="btn-feedback" href="#feedback-form">Оставить заявку</a>
            <a target='_blank' href="https://www.youtube.com/user/ptuxermann"><img src="{{URL::asset('/img/play.svg')}}" alt="play"></a>
            <p>Посмотрите <br> видео-отчет <br> 2018-2019</p>
        </div>
        <div class="gallery">
            <div class="social">
                <p>Подписывайтесь в соц.сетях</p>
                <img src="{{URL::asset('/img/youTube.svg')}}" alt="youtube">
                <img src="{{URL::asset('/img/fb.svg')}}" alt="facebook">
                <img src="{{URL::asset('/img/twitter.svg')}}" alt="twitter">
                <img src="{{URL::asset('/img/vk.svg')}}" alt="vk">
            </div>
            <div class="gallery-items">
                @foreach ($tourTypes as $key => $tourType)
                 @include('tourTypeComponent', ['tourType' => $tourType])
                @endforeach
            </div>
        </div>
    </header>

@yield('content')

<footer>
    <div class="footer-info">
        <img src="{{URL::asset('/img/iconLogoDark 1.svg')}}" alt="logo">
        <a href="#"><p>Политика <br> конфиденциальности</p></a>
        <a href="#"><p>Соглашения на обработку <br> персональных данных</p></a>
    </div>
    <div class="footer-social">
        <img src="{{URL::asset('/img/iconVK.svg')}}"  alt="vk">
        <img src="{{URL::asset('/img/iconFB.svg')}}" alt="fb">
        <img src="{{URL::asset('/img/iconTwitter.svg')}}"  alt="twitter">
        <img src="{{URL::asset('/img/iconYouTube.svg')}}"  alt="yotube">
    </div>
</footer>
</body>
</html>
