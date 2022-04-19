@extends('layouts.basic-layout')

@section('content')
    <div class="mt-10 flex justify-between">
        <div class="w-1/2">
            <div class="">Дата публикации: {{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</div>
            @if($item->end_time != null)
                <div class="text-gray-500">Активно до: {{\Carbon\Carbon::parse($item->end_time)->format('d-m-Y')}}</div>
            @endif
            <div class="">Категория: {{$item->category->name}}</div>
            <p class="my-2">{{$item->description}}</p>
            <div class="text-gray-500">
                Цена закупки:
                <span class="text-blue-500">
            {{$item->price}}
                    @switch($item->currency)
                        @case("RUB")
                        {{'₽'}}
                        @break
                        @case("USD")
                        {{'$'}}
                        @break
                        @case("CNY")
                        {{'¥'}}
                    @endswitch
        </span>
            </div>
            <div class="text-gray-500">
                Количество:
                <span class="text-blue-500">
            {{$item->amount}} шт.
        </span>
            </div>
            <div class="my-5 text-gray-500">
                <div class="">Закупщик</div>
                <div class="">ФИО: {{$item->user->name}}</div>
                <div class="">Номер телефона: {{$item->user->number}}</div>
            </div>
            <a href="{{url()->current()}}/{{$item->id}}"
               class="rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-50 px-5 py-1.5">
                Написать закупщику
            </a>
        </div>
        <div class="w-1/2">
            <label>
                <textarea placeholder="Сообщение/вопрос закупщику..." class="shadow rounded-md bg-gray-100 w-full h-5/6 p-3 resize-none text-gray-600"></textarea>
                <button type="submit" class="mt-5 rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-50 px-5 py-1.5">Отправить запрос</button>
            </label>
        </div>
    </div>
@endsection
