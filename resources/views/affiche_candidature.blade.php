<x-candidat>
  <div class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-center mb-8">Liste des Candidatures</h1>

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          @foreach ($candidatures as $candidature)
              <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200">
                  <h2 class="text-xl font-semibold mb-2">Formation : {{ $candidature->formation->libelle }}</h2>
                  <p class="text-gray-700 mb-4"><strong>Biographie:</strong> {{ $candidature->biographie }}</p>
                  <p class="text-gray-700 mb-4"><strong>Motivation:</strong> {{ $candidature->motivation }}</p>
                  <p class="text-gray-700 mb-4"><strong>État:</strong> {{ ucfirst($candidature->etat) }}</p>
                  @if($candidature->cv)
                      <p class="text-blue-500 mb-4">
                          <a href="{{ asset('storage/cv/' . $candidature->cv) }}" target="_blank" class="hover:underline">Télécharger CV</a>
                      </p>
                  @else
                      <p class="text-red-500 mb-4">CV: Non disponible</p>
                  @endif
              </div>
          @endforeach
      </div>
  </div>
</x-candidat> 