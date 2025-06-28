@extends('layouts.clean-base')

@section('content')

    <div>
        <div class="min-h-screen flex fle-col items-center justify-center">
            <div class="py-6 px-4">
                <div class="grid lg:grid-cols-2 items-center gap-6 max-w-6xl w-full">
                <div class="border border-gray-700 p-6 max-w-md shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] max-lg:mx-auto">
                    <div class="flex justify-center items-center">
                        <img src="{{ asset("images/logo.png") }}" alt="" class="w-32">
                    </div>    
                <form class="space-y-6" action="{{ url('/profile') }}" method="get">
                    <div class="mb-12">
                        <h1 class="text-white text-3xl font-semibold">Login</h1>
                        <p class="text-gray-400 text-[15px] mt-6 leading-relaxed">Logue em sua conta e explore o mundo do Papa Platinas!</p>
                    </div>

                    <div>
                        <label class="text-white text-sm font-medium mb-2 block">Usuário</label>
                        <div class="relative flex items-center">
                        <input name="username" type="text" required class="w-full text-sm text-slate-900 border border-slate-300 pl-4 pr-10 py-3 outline-blue-600" placeholder="Digite seu nome de usuário" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                            <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                            <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                        </svg>
                        </div>
                    </div>
                    <div>
                        <label class="text-white text-sm font-medium mb-2 block">Senha</label>
                        <div class="relative flex items-center">
                        <input name="password" type="password" required class="w-full text-sm text-slate-900 border border-slate-300 pl-4 pr-10 py-3 outline-blue-600" placeholder="Digite sua senha" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4 cursor-pointer" viewBox="0 0 128 128">
                            <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                        </svg>
                        </div>
                    </div>
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center">
                        <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-slate-300" />
                        <label for="remember-me" class="ml-3 block text-sm text-white">
                            Manter conectado
                        </label>
                        </div>
                        <div class="text-sm">
                        <a href="jajvascript:void(0);" class="text-blue-600 hover:underline font-medium">
                            Esqueceu sua senha?
                        </a>
                        </div>
                    </div>

                    <div class="!mt-12">
                        <button type="submit" class="w-full shadow-xl py-2.5 px-4 text-[15px] font-medium tracking-wide text-white bg-blue-600 hover:bg-blue-700 focus:outline-none cursor-pointer">
                        Entrar
                        </button>
                        <p class="text-sm !mt-6 text-center text-slate-600">Não tem uma conta? <a href="{{ url("/register") }}" class="text-blue-600 font-medium hover:underline ml-1 whitespace-nowrap">Registre-se agora</a></p>
                    </div>
                </form>
                </div>

                <div class="w-full max-w-sm p-4 bg-white border border-gray-200 shadow-sm sm:p-6 dark:bg-gray-900 dark:border-gray-700">
                <h5 class="mb-3 text-base font-semibold text-gray-900 md:text-xl dark:text-white">
                Conectar com conta externa
                </h5>
                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Facilite seu login entrando com uma conta externa já existente!</p>
                <ul class="my-4 space-y-3">
                    <li>
                        <a href="{{ url("/profile") }}" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-700 dark:hover:bg-gray-500 dark:text-white">
                            <img src="{{ asset('images/icos/ico-ps.png') }}" alt="" class="size-5">
                            <span class="flex-1 ms-3 whitespace-nowrap">Playstation</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("/profile") }}" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-700 dark:hover:bg-gray-500 dark:text-white">
                            <img src="{{ asset('images/icos/ico-xbox.png') }}" alt="" class="size-5">
                            <span class="flex-1 ms-3 whitespace-nowrap">Xbox</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url("/profile") }}" class="flex items-center p-3 text-base font-bold text-gray-900 bg-gray-50 hover:bg-gray-100 group hover:shadow dark:bg-gray-700 dark:hover:bg-gray-500 dark:text-white">
                            <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-5">
                            <span class="flex-1 ms-3 whitespace-nowrap">Steam</span>
                        </a>
                    </li>
                </ul>
                </div>

                </div>
            </div>
            </div>

    </div>

@endsection