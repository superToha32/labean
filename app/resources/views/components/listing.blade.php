<div class="w-full my-10">
    <div class="flex">
        <select name="" id="" class="mr-5 cursor-pointer rounded-full bg-gray-200 px-3 py-1.5 text-xs text-grey-800">
            <option value="later" class="bg-white">Последние</option>
            <option value="earlier" class="bg-white">Ранние</option>
            <option value="costly" class="bg-white">Более дорогие</option>
            <option value="cheaper" class="bg-white">Менее дорогие</option>
        </select>
        <select name="" id="" class="cursor-pointer rounded-full bg-gray-200 px-3 py-1.5 text-xs text-grey-800">
            <option value="default" class="bg-white">Любая категория</option>
            @foreach(\App\Models\Category::all() as $category)
                <option value="{{$category->slug}}" class="bg-white">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
</div>
@foreach($items as $item)
    <x-item :item="$item"/>
@endforeach
