<x-layout>

    {{-- COntenue --}}
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cartes avec Appel à Candidature et Barre de Recherche</title>
        <style>
            .container {
                display: flex;
                justify-content: space-between;
                align-items: flex-start; /* Alignement en haut */
                padding: 20px;
                flex-wrap: wrap; /* Permettre le retour à la ligne des cartes si nécessaire */
            }
            .card {
                width: 200px;
                padding: 20px;
                text-align: center;
                background-color: #fff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px; /* Espace entre les cartes */
            }
            .card h3 {
                margin-top: 0;
            }
            .card .number {
                font-size: 24px;
                color: #333;
            }
            .search-bar {
                width: 200px;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 14px;
            }
            .row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 20px;
               
                }
                .row p {
                    margin: 0;
                    flex: 1; /* Permet au paragraphe de prendre tout l'espace disponible */
                }
                .row .button {
                    height: 50px;
                    width: 180px;
                    background-color: #ce0033;
                    color: #fff;
                    border: none;
                    border-radius: 15px;
                    cursor: pointer;
                    text-align: center;
                    line-height: 40px;
                }

                .card {
                    border: 1px solid #ddd;
                    border-radius: 8px;
                    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                    padding: 20px;
                    margin-bottom: 20px;
                }
                .phase {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin-bottom: 10px;
                }
                .phase-icon {
                    font-size: 20px;
                }
                .phase-text {
                    flex: 1;
                    margin-right: 10px;
                }
                .date {
                    margin-top: 10px;
                }
        </style>
    </head>
    <body>
    
    <div class="container">
        <div class="card">
            <h3>Appel à Candidature</h3>
            <div class="number">15</div>
        </div>
    
        <div class="card">
            <h3>Appel à Candidature</h3>
            <div class="number">10</div>
        </div>

        <div class="card">
            <h3>Appel à Candidature</h3>
            <div class="number">10</div>
        </div>
    
        <input type="text" class="search-bar" placeholder="Recherche...">
    </div>
    <div class="row">
        <p>Liste des formations</p>
        <a href="{{ route('ajouter') }}"><button class="button"><strong>Ajouter</strong></button></a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    @foreach ($formations as $formation)

                    <div class="phase">
                        <div class="phase-text"> {{$formation->libelle}} </div>
                        <div class="phase-icon"><a href="{{ route('candidats.liste.admin', $formation) }}">Voir les candidats</a></div> <!-- Icone de détail -->
                    </div>
                    <div class="phase">
                        <div class="phase-text"> {{$formation->nombre_place}} Apprenants </div>
                        <div class="phase-icon">➡️</div> <!-- Icone de next -->
                    </div>
                    <div class="date">
                        <div>Date de début : {{$formation->date_debut}} </div>
                        <div>Date de fin : {{$formation->date_fin}} </div>
                    </div>
                    <form action="{{ url('formations/' . $formation->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="icon-btn  text-red-600" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')"><i class="fas fa-trash-alt"></i></button>
                    </form>   
                                            
                    @endforeach
                </div>
            </div>
        </div> 
    </div>
        
    </body>
    </html>
    

</x-layout>