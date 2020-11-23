<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loja de Informática</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">

        <style>
            body {
                font-family:  'Nunito';
            }
        </style>
    </head>
    <body>
        <header>
            <a href="/">HOME</a>
        </header>

        <div id="contentArea">
            @yield('content')
        </div>

    </body>
    <footer>

    </footer>
</html>
