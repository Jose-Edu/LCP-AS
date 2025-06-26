@extends('layouts.base')

@section('content')
    <div class="-mt-8 pt-20 p-5 bg-black columns-1">
        <img src="{{ asset('images/games-extras/er-logo-text.png') }}" alt="" class="h-20 mb-5">
        <span class="flex items-center justify-start">
            <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-5">
            <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-5 mx-3">
            <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-5">
        </span>
    </div>
@endsection