@extends('layouts.basic-layout')

@section('content')
    <div class="my-5">
        В этом разделе предприниматели, заинтересованные в покупке определенного товара, могут оставить свою заявку на его закупку в нужном им количестве по фиксированной цене закупки.
        <div class="mt-5">
            <a class="cursor-hover py-2 px-4 rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-50 w-fit" href="{{\Illuminate\Support\Facades\URL::to('/sell/new')}}">Стать закупщиком</a>
        </div>
    </div>
    <x-listing :items="$items"/>
@endsection
