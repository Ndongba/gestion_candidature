<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Tableau de Bord</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">

    {{-- Css --}}
    <link rel="stylesheet" href="{{ asset('css/candidature.css') }}">

    <link rel="stylesheet" href="{{ asset('css/formation.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</head>

<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">
                    <img src="#" alt="Logo">
                </a>
            </div>
            <div class="flex items-center">
                <ul>
                    @if (!Auth::user())
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="{{ route('formations.index') }}">Formations</a></li>
                        <li><a href="#">Contact</a></li>
                    @else
                        <li><a href="{{ route('formations.index') }}">Formations</a></li>
                        <li><a href="{{ route('candidature.afficher') }}">Mes candidatures</a></li>
                    @endif

                </ul>
            </div>

            <div class="flex items-center">
                @auth

                    {{-- closs notification --}}    <!-- Badge de notification -->

                    {{-- Badge de notification --}}
                    <button
                        class="bg-rose-500 text-white rounded-md px-4 flex justify-end items-center py-2 hover:bg-rose-700 transition"
                        onclick="openModal('modelConfirm')">
                        <div class="relative">
                            <svg class="w-8 h-8 text-red-600 animate-wiggle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 21">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.585 15.5H5.415A1.65 1.65 0 0 1 4 13a10.526 10.526 0 0 0 1.5-5.415V6.5a4 4 0 0 1 4-4h2a4 4 0 0 1 4 4v1.085c0 1.907.518 3.78 1.5 5.415a1.65 1.65 0 0 1-1.415 2.5zm1.915-11c-.267-.934-.6-1.6-1-2s-1.066-.733-2-1m-10.912 3c.209-.934.512-1.6.912-2s1.096-.733 2.088-1M13 17c-.667 1-1.5 1.5-2.5 1.5S8.667 18 8 17" />
                            </svg>
                            <div class="px-1 bg-red-500 rounded-full text-center text-white text-sm absolute -top-3 -end-2">
                                {{ Auth::user()->unreadNotifications->count() }}
                                <div class="absolute top-0 start-0 rounded-full -z-10 animate-ping bg-teal-200 w-full h-full"></div>
                            </div>
                        </div>
                    </button>
                
                    {{-- Include Notifications --}}
                

                        {{-- Fin²closs notification --}}

                    </button>
                    <span class="text-gray-800 mr-4">{{ Auth::user()->prenom }}</span>
                    <img src="https://bdesign-julinho97.vercel.app/assets/img/BMB.png" alt="Admin Photo"
                        class="w-10 h-10 rounded-full">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="w-full flex items-center p-4 text-red-600 hover:bg-red-100 hover:scale-105 transition-all rounded">
                            <span class="material-icons-sharp">logout</span>
                            <span class="ml-4">Déconnexion</span>
                        </button>
                    </form>
                @endauth

            </div>

        </nav>
    </header>

    <main>
        {{ $slot }}
    </main>

  
    
    
</body>

</html>
