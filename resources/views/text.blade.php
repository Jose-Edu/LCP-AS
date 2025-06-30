@extends('layouts.base')

@section('content')

    <h1 class="flex justify-center items-center text-5xl font-bold">
        Elden Ring 100% Walkthough
    </h1>
    <h4 class="flex justify-center items-center text-sm  text-gray-500 mt-2">
        Por: PedroGames23 
    </h4>

    <div class="flex mt-10">
        <nav class="w-1/4 mx-5">
            <div class="bg-gray-800 p-5 mb-5">
                <h3 class="text-2xl font-bold">Índice</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <ul class="list-disc ps-5 pb-5 items-stretch">
                    <li class="my-4"><a href="#intro">Introdução</a></li>
                    <li class="my-4"><a href="#cap1">Capítulo 1</a></li>
                    <li class="my-4"><a href="#cap2">Capítulo 2</a></li>
                    <li class="my-4"><a href="#coments">Comentários</a></li>
                </ul>
            </div>

            <div class="bg-gray-800 p-5 mb-5">
                <h3 class="text-2xl font-bold">Sobre</h3>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                <ul class="list-none ps-5 pb-5 items-stretch">
                    <li class="my-4"><span class="flex justify-between items-center">
                        <p class="font-semibold text-lg">Autor</p>
                        <p>PedroGames23</p>
                    </span></li>
                    <li class="my-4"><span class="flex justify-between items-center">
                        <p class="font-semibold text-lg">Likes</p>
                        <p>10k</p>
                    </span></li>
                    <li class="my-4"><span class="flex justify-between items-center">
                        <p class="font-semibold text-lg">Comentários</p>
                        <p>1</p>
                    </span></li>
                </ul>
            </div>
        </nav>
        <div class="w-3/4 mx-5 bg-gray-800 me-5 p-5">
            <div>
                <h1 id="intro" class="font-bold text-4xl mb-5">Introdução</h1>
                <p class="mb-2 ms-3">Elden Ring é um jogo de RPG de ação desenvolvido pela FromSoftware e publicado pela Bandai Namco Entertainment. O jogo é dirigido por Hidetaka Miyazaki e conta com a colaboração do escritor George R. R. Martin.</p>
                <p class="mb-5 ms-3">Elden Ring possui múltiplos finais, o que significa que você precisará de várias partidas ou usar salvamentos estratégicos para obter todos os troféus relacionados aos finais sem ter que completar o jogo várias vezes do zero.</p>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>
            <div class="m3">
                <h1 id="cap1" class="font-bold text-4xl mb-5">Capítulo 1</h1>
                <p class="mb-2">Após a cena inicial, você cria seu personagem. Todas as classes podem platinar o jogo, então escolha o que mais combinar com seu estilo (Recomendado: Samurai ou Confessor para iniciantes). Escolha uma Memória como item inicial (melhor para builds mágicas) ou a Semente Dourada (ótimo para mais frascos).</p>

                <h3 class="font-bold text-xl mb-3 mt-5">Local: Cemitério dos Exilados e Capela da Esperança</h3>
                <ol class="list-decimal ms-8">
                    <li class="">Derrote (ou ignore) o chefe inicial "Grafted Scion". Morrer aqui é esperado. Se você derrotá-lo, receberá:
                    <ul class="list-disc ms-5">
                        <li>Espada Reta Ornamentada</li>
                        <li>Escudo da Besta Dourada</li>
                    </ul>
                    </li>

                    <li class="my-5">Prossiga até encontrar Varre, o Sem-Nome, o primeiro NPC. Ele sugere seguir até Portão de Stormveil.</li>

                    <li class="mb-5">Antes de tudo, explore ao redor:
                    <ul class="list-disc ms-5">
                        <li>Ative o primeiro Local de Graça</li>
                        <li>Derrote inimigos fracos para ganhar Runa e treinar</li>
                    </ul>
                    </li>
                </ol>

                <h3 class="font-bold text-xl mb-3 mt-5">Troféus que podem ser obtidos neste capítulo:</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-700">
                        <tr>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Troféu</th>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Tipo</th>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Como obter</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-700">
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">A Ascensão do Lorde da Praga</td>
                            <td class="px-6 text-left py-3 tracking-wider">Bronze</td>
                            <td class="px-6 text-left py-3 tracking-wider">Pode ser obtido mais tarde se iniciar a quest do Varre</td>
                        </tr>
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">Primeiro Encontro com o Dedo Virgem</td>
                            <td class="px-6 text-left py-3 tracking-wider">Bronze</td>
                            <td class="px-6 text-left py-3 tracking-wider">Fale com Melina e aceite o pacto para ganhar o Torrent</td>
                        </tr>
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">Primeira invocação espiritual</td>
                            <td class="px-6 text-left py-3 tracking-wider">Bronze</td>
                            <td class="px-6 text-left py-3 tracking-wider">Fale com Renna à noite na Igreja de Elleh</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="font-bold text-xl mb-3 mt-5">Dicas:</h3>
                <ul class="ms-8 list-disc">
                    <li>Pegue a Espada de Uchigatana nas Catacumbas da Morte</li>
                    <li>Vá à Igreja de Elleh à noite para falar com Renna</li>
                    <li>Use o Torrent para explorar e evitar combates difíceis</li>
                </ul>

                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>
            <div>
                <h1 id="cap2" class="font-bold text-4xl mb-5">Capítulo 2</h1>

                <h3 class="font-bold text-xl mb-3 mt-5">Objetivo principal: derrotar Margit, o Agouro Caído</h3>

                <h3 class="font-bold text-xl mb-3 mt-5">Local: Necrolimbo + Castelo de Stormveil</h3>
                <ol class="list-decimal ms-8 mb-8">
                    <li>Explore as áreas ao sul:
                        <ul class="list-disc ms-5">
                            <li>Forte Haight: Pegue parte do Medalhão de Dectus</li>
                            <li>Lago Agheel: Enfrente (ou evite) o Dragão Voador Agheel</li>
                        </ul>
                    </li>

                    <li>Acesse o Castelo de Stormveil:
                        <ul class="list-disc ms-5">
                            <li>Esteja pelo menos no nível 20-25</li>
                            <li>Equipe armas +2 ou superior</li>
                            <li>Use invocações espirituais para ajudar</li>
                        </ul>
                    </li>
                </ol>

                <h3 class="font-bold text-xl mb-3 mt-5">Chefe Principal: Margit, o Agouro Caído</h3>
                <p>Margit é o primeiro chefe obrigatório. Use invocações, principalmente a Lágrima das Cinzas Lupinas, para distraí-lo.</p>
                <p>Compre o Talismã de Margit com Patches (caso tenha iniciado sua quest).</p>

                <h3 class="font-bold text-xl mb-3 mt-5">Troféus que podem ser obtidos neste capítulo:</h3>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-blue-700">
                        <tr>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Troféu</th>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Tipo</th>
                            <th scope="col" class="px-6 text-left py-3 tracking-wider">Como obter</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-700">
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">Margit, o Agouro Caído</td>
                            <td class="px-6 text-left py-3 tracking-wider">Bronze</td>
                            <td class="px-6 text-left py-3 tracking-wider">Derrote Margit</td>
                        </tr>
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">Primeira Grande Runa</td>
                            <td class="px-6 text-left py-3 tracking-wider">Prata</td>
                            <td class="px-6 text-left py-3 tracking-wider">Derrote Godrick no próximo capítulo</td>
                        </tr>
                        <tr>
                            <td class="px-6 text-left py-3 tracking-wider">Primeira Melhoria Máxima de Frascos</td>
                            <td class="px-6 text-left py-3 tracking-wider">Bronze</td>
                            <td class="px-6 text-left py-3 tracking-wider">Use 1 Semente Dourada + 1 Lágrima Sagrada</td>
                        </tr>
                    </tbody>
                </table>

                <h3 class="font-bold text-xl mb-3 mt-5">Opcionais Importantes:</h3>
                <ul class="list-disc ms-8 mb-8">
                    <li>Encontre e derrote Patches: ele vira vendedor</li>
                    <li>Explore Catacumbas, Ruínas e Cavernas</li>
                    <li>Fale com Kenneth Haight para iniciar uma quest secundária</li>
                </ul>
                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>
            <div>
                <h1 id="coments" class="font-bold text-4xl mb-5">Comentários</h1>

                <div class="mx-10">
                    <div class="bg-gray-700 flex itens-center py-5">
                        <div class="w-1/4 mx-10 flex justify-start items-center">
                                <div class="border rounded-full bg-gray-400 border-gray-400 p-1">
                                    <img src="{{ asset('images/logo.png') }}" alt="" class="size-16">
                                </div>
                                <span class="ms-2 flex items-center">
                                    <p class="me-1">
                                        JulioSpeedRuns
                                    </p>
                                    <img src="{{ asset('images/icos/ico-steam.png') }}" alt="" class="size-4">
                                </span>
                        </div>
                        <div class="w-3/4">
                            <div>
                                <p class="mt-5">
                                    Exelente guia como sempre!
                                </p>
                                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
                                <div class="flex justify-start items-center">
                                    <span class="flex justify-start items-center bg-gray-800 p-1 rounded-sm">
                                        <img src="{{ asset('images/icos/ico-like.png') }}" alt="" class="size-5">
                                        <p class="ms-1">10</p>
                                    </span>
                                    <span class="flex justify-start items-center bg-gray-800 p-1 rounded-sm ms-2 px-2">
                                        Responder
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="mt-10 border border-gray-600">
                        <div class="p-5">
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Digite seu comentário..."></textarea>

                            <button type="button" class="text-white mt-5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Enviar</button>
                        </div>
                    </div>
                </div>


                <div class="bg-gray-600 px-5 mb-8 h-px mt-2 ms-1"></div>
            </div>    
        </div>
    </div>
@endsection