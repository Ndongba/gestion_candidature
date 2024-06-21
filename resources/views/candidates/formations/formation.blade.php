
        
        <x-candidat>

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
                    <img src="{{ asset('storage/'.$formation->image) }}" alt="{{ $formation->libelle }} Image">
                    <h2>{{ $formation->libelle }}</h2>
                    <p>Date de début de la formation: {{ \Carbon\Carbon::parse($formation->date_debut)->format('d/m/Y') }}</p>
                    <p>Date limite de candidature: {{ \Carbon\Carbon::parse($formation->date_fin_appel)->format('d/m/Y') }}</p>
                   <a href="{{ url('formations/detail/'.$formation->id)}}"> <button>Voir plus</button></a>
                               
                </div>
                @endforeach
            </div>
        </section>
    </x-candidat>

