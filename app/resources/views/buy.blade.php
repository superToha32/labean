@extends('layouts.basic-layout')

@section('content')
    <div class="my-5">
        В этом разделе предприниматели, заинтересованные в продаже определенного товара, могут создать объявление по
        его продаже в нужных им количествах и по фиксированной оптовой цене.
        <div class="mt-5">
            <a class="cursor-hover py-2 px-4 rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-50 w-fit"
               href="{{\Illuminate\Support\Facades\URL::to('/buy/new')}}">Стать поставщиком</a>
        </div>
    </div>
    <x-listing :items="$items"/>
@endsection
