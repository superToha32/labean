@extends('layouts.app')

@section('content')
    @php
        $items = null;
    @endphp

    <x-listing :items="$items" />
@endsection
