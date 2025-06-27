@extends('layouts.base')

@section('content')
    <div class="">
        <div class="-mt-8 columns-1 overflow-hidden h-[350px]">
            <img src="{{ asset('images/games-extras/er-banner.webp') }}" alt="" class="w-full h-full object-cover">
        </div>
        <div class="-mt-[150px] p-5 pb-0">
            <img src="{{ asset('images/games-extras/er-logo-text.png') }}" alt="" class="h-[100px]">
            <div class="flex justify-between items-center w-sm">
                <span class="flex items-center justify-start">
                    <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-5">
                    <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-5 mx-3">
                    <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-5">
                </span>
                <span class="flex items-center justify-end">
                    <p class="font-thin text-sm">42 Conquistas</p>
                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="" class="size-5 ms-2">
                </span>
            </div>
        </div>
    </div>

    <div class="flex mt-10">
        <nav class="w-1/4 mx-5">
            <div class="bg-gray-800 p-5 mb-5">
                <h3 class="text-2xl font-bold">Índice</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <ul class="list-disc ps-5 pb-5 items-stretch">
                    <li class="my-4">Visão geral</li>
                    <li class="my-4">Conquistas</li>
                    <li class="my-4">Guias de platinas</li>
                    <li class="my-4">Outros guias</li>
                    <li>Comentários</li>
                </ul>
            </div>

            <div class="bg-gray-800 p-5">
                <h3 class="text-2xl font-bold">Estatísticas</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <ul class="list-none px-5 pb-5 items-stretch">
                    <li class="my-4">
                        <span class="flex justify-between items-center">
                            <p>% de platina</p>
                            <p class="text-blue-700 font-semibold text-xl">2.3%</p>
                        </span>
                    </li>
                    <li class="my-4">
                        <span class="flex justify-between items-center">
                            <p>Tempo médio da platina</p>
                            <p class="text-blue-700 font-semibold text-xl">100 h</p>
                        </span>
                    </li>
                    <li class="my-4">
                        <span class="flex justify-between items-center">
                            <p>Número de Conquistas</p>
                            <p class="text-blue-700 font-semibold text-xl">42</p>
                        </span>
                    </li>
                    <li class="my-4">
                        <span class="flex justify-between items-center">
                            <p>Dificuldade</p>
                            <p class="text-blue-700 font-semibold text-xl">2.3%</p>
                        </span>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="w-3/4 bg-gray-800 me-5 p-5">
            <div>
                <h1 class="font-bold text-4xl mb-5">Visão geral</h1>
                <p class="mb-2">Elden Ring é um jogo de RPG de ação desenvolvido pela FromSoftware e publicado pela Bandai Namco Entertainment. O jogo é dirigido por Hidetaka Miyazaki e conta com a colaboração do escritor George R. R. Martin.</p>
                <p class="mb-5">Elden Ring possui múltiplos finais, o que significa que você precisará de várias partidas ou usar salvamentos estratégicos para obter todos os troféus relacionados aos finais sem ter que completar o jogo várias vezes do zero.</p>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>
        </div>
    </div>
@endsection