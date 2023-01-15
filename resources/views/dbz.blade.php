<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body> 
        @if ($energy > 8000)
            <h1>Mais de 8000!</h1>
        @else
            <h1>Inseto!</h1>
        @endif
    </body>
</html>
