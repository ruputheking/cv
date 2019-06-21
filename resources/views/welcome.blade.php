<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DreamR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body style="color: #009688!important;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ route('index') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    DreamR
                </div>

                <div class="links">
                    <a href="{{ route('candidate') }}">Candidates</a>
                    <a href="https://laracasts.com">Jobs</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://laravel-news.com">About</a>
                    <a href="https://github.com/laravel/laravel">Contact</a>
                </div>
            </div>
        </div>
    </body>
</html>
