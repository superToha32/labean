@extends('layouts.app')

@section('content')
    @php
        $items = \App\Models\Item::all()->with('category', 'user')->get();
    @endphp

    <x-listing :items="$items" />
@endsection
