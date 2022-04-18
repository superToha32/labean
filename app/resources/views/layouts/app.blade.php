<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Laravel</title>
</head>
<body>
<div id="app">
    <div class="w-10/12 mx-auto text-gray-800 min-h-screen">
        <header class="flex w-full justify-between mb-4">
            <a class="font-bold text-red-500 text-3xl" href="{{URL::to('/')}}">Лабеан</a>
            <nav class="mt-2">
                <ul class="flex">
                    <li class="mr-3"><a href="{{URL::to('/sell')}}">Поставщику</a></li>
                    <li><a href="{{URL::to('/buy')}}">Закупщику</a></li>
                </ul>
            </nav>
            <div class="mt-2 text-gray-600">
                <a href="{{URL::to('/login')}}">Войти</a>
                <span class="mx-1.5">|</span>
                <a href="{{URL::to('/register')}}" class="">Регистрация</a>
            </div>
        </header>
        @yield('content')
    </div>
    <footer class="flex py-5 justify-between w-full px-10 text-gray-600 bg-gray-50">
        <div class="">@ Labean 2022. Все права защищены.</div>
        <div class="">
            <nav class="">
                <ul class="flex justify-between">
                    <li class="mr-5"><a href="{{URL::to('/sell')}}">Поставщику</a></li>
                    <li class="mr-5"><a href="{{URL::to('/buy')}}">Закупщику</a></li>
                    <li><a href="{{URL::to('/support')}}">Поддержка</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</div>
</body>
</html>
