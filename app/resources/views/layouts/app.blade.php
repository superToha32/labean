<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}"></script>

    <title>Laravel</title>
</head>
<body>
<div id="app">
    <div class="w-10/12 mx-auto text-gray-800 min-h-screen">
        <header class="flex w-full mb-4">
            <a class="font-bold text-red-500 text-3xl hover:text-red-600" href="{{URL::to('/')}}">Лабеан</a>
            <nav class="ml-20 mt-2 flex-auto">
                <ul class="flex">
                    <li class="mr-3"><a class="hover:text-red-600" href="{{URL::to('/sell')}}">Поставщику</a></li>
                    <li><a class="hover:text-red-600" href="{{URL::to('/buy')}}">Закупщику</a></li>
                </ul>
            </nav>
            <div class="mt-2 text-gray-600">
                <a class="hover:text-red-600" href="{{URL::to('/login')}}">Войти</a>
                <span class="mx-1.5">|</span>
                <a class="hover:text-red-600" href="{{URL::to('/register')}}" class="">Регистрация</a>
            </div>
        </header>
        @yield('content')
    </div>
    <footer class="flex py-5 justify-between w-full px-10 text-gray-600 bg-gray-50">
        <div class="">@ Labean 2022. Все права защищены.</div>
        <div class="">
            <nav class="">
                <ul class="flex justify-between">
                    <li class="mr-5"><a class="hover:text-red-600" href="{{URL::to('/sell')}}">Поставщику</a></li>
                    <li class="mr-5"><a class="hover:text-red-600" href="{{URL::to('/buy')}}">Закупщику</a></li>
                    <li><a class="hover:text-red-600" href="{{URL::to('/support')}}">Поддержка</a></li>
                </ul>
            </nav>
        </div>
    </footer>
</div>
</body>
</html>
