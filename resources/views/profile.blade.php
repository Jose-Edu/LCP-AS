@extends('layouts.base')

@section('content')

    <div class="mx-10 flex justify-center">

        <div class="bg-gray-800 w-3/4 p-5">
            <div class="flex flex-col justify-center items-center">
                <div class="border border-gray-400 bg-gray-400 p-5 rounded-full">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="size-32">
                </div>
                <span class="flex justify-start items-center">
                    <p class="mt-5 text-2xl font-semibold">JulioSpeedRuns</p>
                    <div class="pt-6 ps-2">
                        <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4">
                    </div>
                </span>
                <p class="text-gray-500 mx-48 mt-5">
                    Olá! Me chamo Julio e gosto de Elden Ring e Speedruns! Essa é a minha descrição!
                </p>
            </div>
            <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            <div>
                <h1 class="font-bold text-4xl mb-5">Platinas e conquistas</h1>
                <div>
                    <span class="flex justify-start items-center mb-5">
                        <div class="border border-blue-600 rounded-full bg-blue-600 p-3">
                            <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="" class="size-12">
                        </div>
                        <p class="ms-2">1 Platina(s)</p>
                    </span>
                    <span class="flex justify-start items-center">
                        <div class="border border-yellow-500 rounded-full bg-yellow-500 p-3">
                            <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="" class="size-12">
                        </div>
                        <p class="ms-2">42 Conquista(s)</p>
                    </span>
                </div>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>

                <h1 class="font-bold text-4xl mb-5">Guias de platinas</h1>
                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guia Speed Run 100% Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Guia completo da Speed Run de Elden Ring para a categoria "All Achievements"</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">2k</p>
                            <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                        </span>
                        <a href="{{ url('/articles/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>

                <h1 class="font-bold text-4xl mb-5">Outros guias</h1>
                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guia Speed Run Any% Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Guia completo da Speed Run de Elden Ring para a categoria "Any%"</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">4k</p>
                            <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                        </span>
                        <a href="{{ url('/articles/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
            </div>
        </div>

        <nav class="bg-gray-800 w-1/4 mx-5 p-5 h-min">
            <h3 class="text-2xl font-bold">JulioSpeedRuns</h3>
            <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            <ul class="list-none px-5 pb-5 items-stretch">
                <li class="my-4">
                    <span class="flex justify-between items-center">
                        <p>Seguidores</p>
                        <p class="text-blue-700 font-semibold text-xl">1.5k</p>
                    </span>
                </li>
                <li class="my-4">
                    <span class="flex justify-between items-center">
                        <p>Publicações</p>
                        <p class="text-blue-700 font-semibold text-xl">2</p>
                    </span>
                </li>
                <li class="my-4">
                    <span class="flex justify-between items-center">
                        <p>Jogo favorito</p>
                        <a href="{{ url('/games/1') }}" class="text-blue-700 font-semibold text-xl">Elden Ring</a>
                    </span>
                </li>
            </ul>
        </nav>

    </div>

@endsection