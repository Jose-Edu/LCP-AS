@extends('layouts.base')

@section('content')

    <div class="p-10">
        <h1 class="flex items-center text-4xl font-extrabold dark:text-white pb-10">
            Destaques da semana
        </h1>
        <div class="columns-4">
            <div>
                <div class="max-w-sm bg-white border border-gray-200  shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/er.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mais buscado</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/hl.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guias novos</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/gowr.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mais platinado</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/ds3.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mais difícil</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-10">
        <h1 class="flex items-center text-4xl font-extrabold dark:text-white pb-10">
            Recomendados
        </h1>
        <div class="columns-4 mb-5">
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/er.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elden Ring</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/hl.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hogwarts Legacy</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/ds3.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dark Souls III</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="{{ url('/games/1') }}">
                        <img class="bg-white" src="{{ asset('images/games/gowr.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="{{ url('/games/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">God of War Ragnarök</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ url("/search") }}" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Mais jogos</a>
    </div>

@endsection