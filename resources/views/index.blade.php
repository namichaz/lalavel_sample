<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>我が家の愛犬ポチの日記</title>
    </head>

    <body>
        <h1>我が家の愛犬ポチの日記</h1>

        <img src="{{ asset('images/inu.png.webp') }}" alt="dog">

        <h2>うちの可愛い愛犬ポチを紹介するホームページです。</h2>

        <p><a href="{{url('/welcome')}}">可愛いわんちゃんがうちに来てくれました</a></p>
        <p><a href="{{url('/like')}}">ポチの好きな食べ物</a></p>
        <p><a href="{{url('/dislike')}}">ポチの嫌いな食べ物</a></p>
        <p><a href="{{url('/birthday')}}">ポチが１才になりました</a></p>
    </body>

</html>
