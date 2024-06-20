<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="{{ asset('css/formation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">
                    <img src="#" alt="Logo">
                </a>
            </div>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">À propos</a></li>
                <li><a href="#">Formations</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="formations">
            <h1>Trouvez votre formation</h1>
            <p>Vous recherchez une formation aux métiers du numérique ? Vous êtes au bon <br>
                endroit ! Découvrez toutes les sessions de formation ouvertes à la <br>
                candidature grâce au moteur de recherche ci-dessous.</p>
                <br>

                <div class="recherche">
                    <input type="text" placeholder="Formation">
                    <input type="date" placeholder="Date">
                    <select>
                        <option value="">Région</option>
                        <!-- Ajouter les options de région ici -->
                    </select>
                    <button onclick="searchFormations()">Trouvez votre formation</button>
                </div>
            
            <br><br>
            
           <div class="formation-list">
                @foreach ($formations as $formation)
                <div class="formation">
                    <img src="{{ asset('storage/',$formation->image) }}" alt="{{ $formation->libelle }} Image">
                    <h2>{{ $formation->libelle }}</h2>
                    <p>Date de début de la formation: {{ \Carbon\Carbon::parse($formation->date_debut)->format('d/m/Y') }}</p>
                    <p>Date limite de candidature: {{ \Carbon\Carbon::parse($formation->date_fin_appel)->format('d/m/Y') }}</p>
                   <a href="{{ url('detail/'.$formation->id)}}"> <button>Voir plus</button></a>
                               
                </div>
                @endforeach
            </div>
        </section>
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
