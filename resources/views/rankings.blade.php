@extends('layouts.base')

@section('content')
    <h1 class="flex items-center justify-center text-4xl font-extrabold dark:text-white pb-10">
        Rankings
    </h1>
    <div class="flex justify-center">
        <nav class="w-1/4 mx-5">
            <div class="bg-gray-800 p-5 mb-5">
                <h3 class="text-2xl font-bold">Exibir</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <div>
                    <button id="dropdownRadioBgHoverButton" data-dropdown-toggle="dropdownRadioBgHover" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">Exibir<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownRadioBgHover" class="z-10 hidden w-48 bg-white divide-y divide-gray-100 shadow-sm dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="p-3 space-y-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownRadioBgHoverButton">
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-4" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Ranking global</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input checked id="default-radio-5" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-5" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Ranking nacional</label>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center p-2 rounded-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                <input id="default-radio-6" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="default-radio-6" class="w-full ms-2 text-sm font-medium text-gray-900 rounded-sm dark:text-gray-300">Ranking mensal</label>
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

            </div>
        </nav>
        <div class="w-3/4  bg-gray-800 me-5">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-blue-700">
                    <tr>
                        <th scope="col" class="px-2 text-left py-3 tracking-wider">Rank</th>
                        <th scope="col" class="px-6 text-left py-3 tracking-wider">Jogador</th>
                        <th scope="col" class="px-6 text-left py-3 tracking-wider">Platinas</th>
                        <th scope="col" class="px-6 text-left py-3 tracking-wider">Troféus</th>
                    </tr>
                </thead>
                <tbody class="bg-gray-800">
                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="bg-yellow-500 rounded-full size-10 flex items-center justify-center">1</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">ReiDasPlatinas28</p>
                                <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>100</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>450</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="bg-gray-400 rounded-full size-10 flex items-center justify-center">2</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">LucasGames33</p>
                                <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>93</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>419</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="bg-orange-700 rounded-full size-10 flex items-center justify-center">3</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">ShadowStriker92</p>
                                <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>89</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>401</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">4</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">PixelMage</p>
                                <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>80</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>360</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">5</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">GhostWalker</p>
                                <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>75</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>338</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">6</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">LagMaster</p>
                                <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>70</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>315</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">7</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">Sn1perZon3</p>
                                <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>68</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>306</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">8</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">BladeStormX</p>
                                <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>50</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>225</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">9</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">RektMachine</p>
                                <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>45</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>203</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 text-center py-3 tracking-wider">
                            <p class="size-10 flex items-center justify-center">10</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <span class="flex justify-start items-center">
                                <p class="me-1">KeySmasher</p>
                                <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4">
                            </span>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>40</p>
                        </td>
                        <td class="px-6 text-left py-3 tracking-wider">
                            <p>180</p>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="bg-gray-600 px-5 mb-8 h-px mt-2 mx-1"></div>
            <div class="flex justify-start mx-16 my-5 bg-gray-800">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">1</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">2</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">3</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">4</button>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">5</button>
                <p class="me-2">...</p>
                <button type="button" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">35</button>
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Próxima</button>
            </div>
        </div>
    </div>
@endsection