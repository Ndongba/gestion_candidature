
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="{{ asset('css/formation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
       <title>Tableau de Bord</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
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
                    <li><a href="{{route('formations.index')}}">Formations</a></li>
                    <li><a href="#">Contact</a></li>

                    @else
                    <li><a href="{{route('formations.index')}}">Formations</a></li>
                    <li><a href="{{route('candidature.afficher')}}">Mes candidatures</a></li>

                    @endif

                </ul>
            </div>

            <div class="flex items-center">
                @auth
                <span class="text-gray-800 mr-4">{{ Auth::user()->prenom }}</span>
                <img src="https://bdesign-julinho97.vercel.app/assets/img/BMB.png" alt="Admin Photo"
                class="w-10 h-10 rounded-full">
                <form action="{{ route('logout') }}" method="post" >
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
        {{$slot}}
    </main>

    <br><br><br>
    
    
        <footer>
            <div class="log">
                <a href="#">
                    <img src="#" alt="Logo">
                </a>
    
    
                <nav class="foot">
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Formations</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
           
    
    
            <br><br><br>
    
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copy">Copyright &copy; (DN) 2024</p>
    
        </footer>
    
        <script>
            function searchFormations() {
                // Functionality to search formations
            }
        </script>
    </body>
    </html>
    
