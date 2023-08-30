<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="PHPのportfolioサイト">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>TatsuyaNamikawa</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,700;1,400&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1><a href="" class="logo" src="{{ asset('images/icon.svg') }}" alt="portfolio"></a></h1>
            <nav>
                <ul class="main-nav">
                    <li><a href="{({url'/')}}">Home</li>
                    <li><a href="">Bio</li>
                    <li><a href="">Skill</li>
                    <li><a href="">Hobby</li>
                </ul>
            </nav>
        </header>

        {{-- <img src="{{ asset('images/inu.png.webp') }}" alt="dog"> --}}


        <p><a href="{({url'/welcome')}}">History</a></p>
        <p><a href="{{url('/like')}}">Hobby</a></p>
        <p><a href="{{url('/dislike')}}">Skills</a></p>
        <p><a href="{{url('/birthday')}}">Contact</a></p>
    </body>

</html>
