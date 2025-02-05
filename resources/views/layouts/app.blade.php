<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Inma González Aguilar">

        <link rel="shortcut icon" href="{{asset('img/icon.png')}}" type="image/x-icon">

        <title>Toll Stations</title>

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <div id="app">
            <x-header/>

            <main>
                @yield('content')
            </main>

            <x-footer/>
        </div>

        <script src="https://kit.fontawesome.com/d9cbd3c891.js" crossorigin="anonymous"></script>
    </body>
</html>