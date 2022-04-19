<div class="w-1/3 p-1">
    <div class="shadow p-3 rounded-xl">
        @php
            $name = $item->description;
            if(strlen($name) > 20) {
                $name = mb_substr($name, 0, 17) . '...';
            }
        @endphp
        <div class="flex justify-between">
            <b>{{$name}}</b>
            <div class="">{{\Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</div>
        </div>
        @if($item->end_time != null)
            <div class="text-gray-500">Активно до: {{\Carbon\Carbon::parse($item->end_time)->format('d-m-Y')}}</div>
        @endif
        <p>{{$item->description}}</p>
        <div class="text-gray-500">
            Сумма закупки:
            <span class="text-red-500">
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
            <span class="text-red-500">
            {{$item->amount}} шт.
        </span>
        </div>
        <div class="mb-3 text-gray-500">
            Город:
            <span class="text-red-500">
            {{$item->city}}
        </span>
        </div>
        <a href="{{url()->current()}}/{{$item->id}}"
           class="rounded-xl bg-red-500 hover:bg-red-600 text-gray-50 flex justify-around py-1.5">
            Ответить
        </a>
    </div>
</div>
