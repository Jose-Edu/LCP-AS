@extends('layouts.base')

@section('content')
    <h1 class="flex justify-center items-center text-3xl font-bold">
        Resultados da pesquisa "Elden Ring"
    </h1>
    <div class="flex mt-10">
        <nav class="w-1/4 mx-5">
            <div class="bg-gray-800 p-5 mb-5">
                <h3 class="text-2xl font-bold">Ordernar por</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <div>
                    <button id="dropdownRadioBgHoverButton" data-dropdown-toggle="dropdownRadioBgHover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Ordenar por<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownRadioBgHover" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioBgHoverButton">
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Mais recente</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked id="default-radio-5" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Mais antigo</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="default-radio-6" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-6" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Melhor avaliado</label>
                            </div>
                        </li>
                        </ul>
                    </div>
                </div>

                <h3 class="text-2xl font-bold mt-10">Plataformas</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <div class="ms-3">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Playstation</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Steam</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Xbox</label>
                    </div>
                </div>

                <h3 class="text-2xl font-bold mt-10">Tipo</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <div class="ms-3">
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jogos</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Guias de platina</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Outros guias</label>
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Usuários</label>
                    </div>
                </div>

            </div>
        </nav>

        <div class="w-3/4 bg-gray-800 me-5 p-5">

            <div>
                <h1 id="visao-geral" class="font-bold text-4xl mb-5">Jogos</h1>
                <div class="p-5 flex items-center">
                    <a href="{{ url('/games/1') }}"><img src="{{ asset('images/games-extras/er-logo-text.png') }}" alt="" class="h-32"></a>
                </div>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div> 

            <div>
                <h1 id="platina" class="font-bold text-4xl mb-5">Guias da platina</h1>
                
                <div class="flex justify-around">
                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Elden Ring 100% Walkthrough</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Guia completo passo a passo para zerar e conseguir todas as conquistas de Elden Ring</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por PedroGames23</p>
                            <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4 ms-2">
                        </span>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">10k</p>
                            <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                        </span>
                        <a href="{{ url('/articles/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guia Speed Run 100% Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Guia completo da Speed Run de Elden Ring para a categoria "All Achievements"</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por JulioSpeedRuns</p>
                            <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4 ms-2">
                        </span>
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

                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dicas platina raiz - Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Conjuntos de dicas para facilitar a platina de Elden Ring, mas sem te dar tudo de mão beijada</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por CarlosHardcore</p>
                            <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4 ms-2">
                        </span>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">1.3k</p>
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

                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>

            <div>
                <h1 id="guias" class="font-bold text-4xl mb-5">Outros guias</h1>
                <div class="flex justify-around">
                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Dicas Bosses Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Conjutos de dicas para ajudar no combate de todos os Bosses do Elden Ring</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por BossRusher</p>
                            <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-4 ms-2">
                        </span>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">5k</p>
                            <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                        </span>
                        <a href="{{ url('/articles/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guia Speed Run Any% Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Guia completo da Speed Run de Elden Ring para a categoria "Any%"</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por JulioSpeedRuns</p>
                            <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4 ms-2">
                        </span>
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

                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="{{ url('/articles/1') }}">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Guia de Builds Elden Ring</h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Conjuntos de diversas Builds prontas para Elden Ring</p>
                        <span class="flex justify-start items-center mb-3">
                            <p class="font-normal text-gray-700 dark:text-gray-400">Por AnaRPG555</p>
                            <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-4 ms-2">
                        </span>
                        <span class="flex justify-start items-center mb-3">
                            <p class="me-1">2.7k</p>
                            <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                        </span>
                        <a href="{{ url('/articles/1') }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection