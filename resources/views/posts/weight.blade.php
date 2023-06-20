<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>weights</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <x-app-layout>
        <x-slot name="header">
            MuscleMemory
        </x-slot>
    <body class="front">
        <p>{{ Auth::user()->name }}</p>
        <h2 class="train">
            <a href="/result_train">トレーニング</a>
        </h2>
        <h1 class="bosy_weigt">
            <a href="/weight">体重</a>
        </h1>
        
    </body>
    </x-app-layout>
</html>
