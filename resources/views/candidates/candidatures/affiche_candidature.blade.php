<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<x-candidat>
  <div class="container mx-auto px-4 py-8">
      <h1 class="text-3xl font-bold text-center mb-8">Liste des Candidatures</h1>

      <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          @foreach ($candidatures as $candidature)
              <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200">

                  <h2 class="text-xl font-semibold mb-2">Formation ID: {{ $candidature->formation->libelle }}</h2>
                  <p class="text-gray-700 mb-4"><strong>Début Formation:</strong> {{ $candidature->formation->date_debut}}</p>
                  <p class="text-gray-700 mb-4"><strong>Date Fin Appel:</strong> {{ $candidature->formation->date_fin_appel }}</p>

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
                  <a href="detail_affiche_candidature" class="btn btn-danger">Details</a>
              </div>
          @endforeach
      </div>
      
  </div>
</x-candidat> 

</body>
</html>
