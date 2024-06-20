<x-layout>
    <head>
       
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
    </head>
    
    @if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
    @endif
<div class="flex items-center">
    <div class="flex items-center">
        <div class="flex-none">
            <div class="relative flex items-center">
                <img class="h-32 w-32 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/87.jpg" alt="Avatar">
                <div class="absolute inset-0 rounded-full shadow-inner"></div>
            </div>
        </div>
        <div class="ml-4">
            <h2 class="font-bold text-gray-800 text-lg">{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</h2>
            <p class="text-gray-600">Genre : M</p>
        </div>
    </div>
    
    <div class="ml-8 flex-1">
       
        <div class="card p-4 rounded-lg shadow-md mt-4">
            <div class="flex justify-between">
                <div class="flex-1 pr-4">
                    <p><strong>Email:</strong> {{ $candidature->user->email }}</p>
                    <p><strong>Téléphone:</strong> {{ $candidature->user->telephone }}</p>
                </div>
                <div class="flex-1">
                    <p><strong>Email:</strong> {{ $candidature->user->email }}</p>
                    <p><strong>Téléphone:</strong> {{ $candidature->user->telephone }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<div class="flex items-center mt-2">
    <div class="mr-4 mt-3">
        <p><strong>Statut :</strong> {{ $candidature->etat }}</p>
    </div>
    <div>
        <a href="{{ asset('storage/cv/' . $candidature->cv) }}" class="flex items-center">
            <svg width="80" height="70" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.8333 12.9572C11.1313 12.9572 11.375 12.7561 11.375 12.5104V4.468H8.66667C8.06745 4.468 7.58333 4.06867 7.58333 3.5744V1.3404H2.16667C1.86875 1.3404 1.625 1.54146 1.625 1.7872V12.5104C1.625 12.7561 1.86875 12.9572 2.16667 12.9572H10.8333ZM0 1.7872C0 0.801448 0.971615 0 2.16667 0H7.76953C8.34505 0 8.89688 0.187098 9.30313 0.522197L12.3669 3.04941C12.7732 3.38451 13 3.83969 13 4.31441V12.5104C13 13.4962 12.0284 14.2976 10.8333 14.2976H2.16667C0.971615 14.2976 0 13.4962 0 12.5104V1.7872Z"
                    fill="#CE0033" />
            </svg>
            <span class="ml-2 text-base text-gray-600">Télécharger CV</span>
        </a>
    </div>
</div>



<div>
    <p class="text-gray-700 mb-4">
        <strong>Biographie:</strong>
        <span id="biography">{{ substr($candidature->biographie, 0, 200) }}</span>
        <span id="biography-toggle" style="display: none;">{{ substr($candidature->biographie, 200) }}</span> 
        <a href="#" id="biography-link">Voir plus</a></p>
</div>

<div>
    <p class="text-gray-700 mb-4">
        <strong>Motivation:</strong> 
        <span id="motivation">{{ substr($candidature->motivation, 0, 200) }}</span>
        <span id="motivation-toggle" style="display: none;">{{ substr($candidature->motivation, 200) }}</span> 
        <a href="#" id="motivation-link">Voir plus</a></p>
</div>


<style>
    #biography-toggle,
#motivation-toggle {
    display: none;
}

#biography-link,
#motivation-link {
    color: blue;
    cursor: pointer;
}

</style>





    <!-- Formulaire de mise à jour de l'état -->
    <form action="{{ route('candidature.updateStatus', ['formation' => $formation->id, 'candidature' => $candidature->id]) }}" method="POST" class="mt-4">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="etat" class="form-label">Changer l'état :</label>
            <select name="etat" id="etat" class="form-select">
                @foreach (['en_evaluation' => 'En évaluation', 'en_attente' => 'En attente', 'accepter' => 'Accepté', 'refuser' => 'Refusé'] as $value => $label)
                <option value="{{ $value }}" {{ $candidature->etat == $value ? 'selected' : '' }}>
                    {{ $label }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Biographie
            var biographyLink = document.getElementById("biography-link");
            var biographyToggle = document.getElementById("biography-toggle");
    
            biographyLink.addEventListener("click", function(event) {
                event.preventDefault();
                if (biographyToggle.style.display === "none") {
                    biographyToggle.style.display = "inline";
                    biographyLink.textContent = "Voir moins";
                } else {
                    biographyToggle.style.display = "none";
                    biographyLink.textContent = "Voir plus";
                }
            });
    
            // Motivation
            var motivationLink = document.getElementById("motivation-link");
            var motivationToggle = document.getElementById("motivation-toggle");
    
            motivationLink.addEventListener("click", function(event) {
                event.preventDefault();
                if (motivationToggle.style.display === "none") {
                    motivationToggle.style.display = "inline";
                    motivationLink.textContent = "Voir moins";
                } else {
                    motivationToggle.style.display = "none";
                    motivationLink.textContent = "Voir plus";
                }
            });
        });
    </script>
    
    

</x-layout>
