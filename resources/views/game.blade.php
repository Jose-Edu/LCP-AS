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
                    <li class="my-4"><a href="#visao-geral">Visão geral</a></li>
                    <li class="my-4"><a href="#conquistas">Conquistas</a></li>
                    <li class="my-4"><a href="#platina">Guias da platina</a></li>
                    <li><a href="#guias">Outros guias</a></li>
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
                            <p class="text-blue-700 font-semibold text-xl">8.7/10</p>
                        </span>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="w-3/4 bg-gray-800 me-5 p-5">
            <div>
                <h1 id="visao-geral" class="font-bold text-4xl mb-5">Visão geral</h1>
                <p class="mb-2 ms-3">Elden Ring é um jogo de RPG de ação desenvolvido pela FromSoftware e publicado pela Bandai Namco Entertainment. O jogo é dirigido por Hidetaka Miyazaki e conta com a colaboração do escritor George R. R. Martin.</p>
                <p class="mb-5 ms-3">Elden Ring possui múltiplos finais, o que significa que você precisará de várias partidas ou usar salvamentos estratégicos para obter todos os troféus relacionados aos finais sem ter que completar o jogo várias vezes do zero.</p>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>          
            
            <div>
                <h1 id="conquistas" class="font-bold text-4xl mb-5">Conquistas</h1>
                <div class="bg-gray-700 m-5 p-5">

                    <div class="flex justify-around">
                        
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2">Elden Lord</p>
                            <div class="flex justify-center">
                                <div class="bg-yellow-500 rounded-full p-3 w-16 h-16 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2">Age of the Stars</p>
                            <div class="flex justify-center">
                                <div class="bg-yellow-500 rounded-full p-3 w-16 h-16 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2">Lord of Frenzied Flame</p>
                            <div class="flex justify-center">
                                <div class="bg-yellow-500 rounded-full p-3 w-16 h-16 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>

                    <div class="flex justify-around columns-5 mb-8">
                        
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Godrick</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Radahn</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Morgott</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Rykard</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Malenia</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex justify-around columns-5 mb-8">
                        
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Shardbearer Mohg</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Maliketh the Black Blade</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Hoarah Loux the Warrior</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Dragonlord Placidusax</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">God-Slaying Armament</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="flex justify-around columns-5">
                        
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Legendary Armaments</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Legendary Ashen Remains</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Legendary Sorceries and Incantations</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Legendary Talismans</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">God-Slaying Armament</p>
                            <div class=" flex justify-center">
                                <div class="bg-gray-400 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>

                    <div class="flex justify-around columns-6 mb-8">
    
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Rennala, Queen of the Full Moon</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Lichdragon Fortissax</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Godskin Duo</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Fire Giant</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Dragonkin Soldier of Nokstella</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Regal Ancestor Spirit</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="flex justify-around columns-6 mb-8">
    
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Valiant Gargoyles</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Margit, the Fell Omen</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Red Wolf of Radagon</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Godskin Noble</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Magma Wyrm Makar</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Godfrey the First Lord</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="flex justify-around columns-6 mb-8">
    
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Mohg, the Omen</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Mimic Tear</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Loretta, Knight of the Haligtree</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Astel, Naturalborn of the Void</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Leonine Misbegotten</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Royal Knight Loretta</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                    </div>

                    <div class="flex justify-around columns-6 mb-8">
    
                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Elemer of the Briar</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Ancestor Spirit</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Commander Niall</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Roundtable Hold</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Great Rune</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                        <a href="{{ url('/articles/1') }}">
                            <p class="mb-2 text-xs">Erdtree Aflame</p>
                            <div class=" flex justify-center">
                                <div class="bg-orange-700 rounded-full p-1 w-8 h-8 flex items-center justify-center">
                                    <img src="{{ asset('images/icos/ico-trophy.png') }}" alt="">
                                </div>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>

            <div>
                <h1 id="platina" class="font-bold text-4xl mb-5">Guias da platina</h1>
                
                <div class="flex justify-around">
                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 mx-4 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Ler artigo
                            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                    <div class="flex flex-col justify-around items-start w-96 p-6 bg-white border border-gray-200 shadow-sm dark:bg-gray-800 dark:border-gray-700">
                        <a href="#">
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
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
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