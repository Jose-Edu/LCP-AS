@extends('layouts.base')

@section('content')

    <div class="p-10">
        <h1 class="flex items-center text-4xl font-extrabold dark:text-white pb-10">
            Destaques da semana
        </h1>
        <div class="columns-4">
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mais buscado</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guias novos</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mais platinado</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
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
        <div class="columns-4">
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elden Ring</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hogwarts Legacy</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dark Souls III</h5>
                        </a>
                    </div>
                </div>
            </div>
            <div>
                <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="bg-white rounded-t-lg" src="{{ asset('images/logo.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">God of War Ragnarök</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <button class="relative mt-5 inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
            <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-transparent group-hover:dark:bg-transparent">
            Mais Jogos
            </span>
        </button>
        </div>
    </div>

@endsection