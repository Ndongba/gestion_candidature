<!-- resources/views/candidature/show.blade.php -->

<x-layout>
    <!-- Afficher les détails de la candidature -->
    <div class="my-10 text-left">
        <h2 class="text-2xl font-bold">{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</h2>
    </div>
    @if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline">{{ session('success') }}</span>
    </div>
@endif
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <p><strong>Email:</strong> {{ $candidature->user->email }}</p>
                <p><strong>Téléphone:</strong> {{ $candidature->user->telephone }}</p>
                <p><strong>Biographie:</strong> {{ $candidature->biographie }}</p>
                <p><strong>Motivation:</strong> {{ $candidature->motivation }}</p>
                <p><strong>État:</strong> {{ $candidature->etat }}</p>
            </div>
        </div>
    </div>

    <!-- Formulaire de mise à jour de l'état -->
    <form action="{{ route('candidature.updateStatus', ['formation' => $formation->id, 'candidature' => $candidature->id]) }}" method="POST" class="mt-4">
        @csrf
        @method('PATCH')

        <div class="mb-4">
            <label for="etat" class="block text-gray-700">Changer l'état :</label>
            <select name="etat" id="etat" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm">
               @foreach (['en_evaluation' => 'En évaluation', 'en_attente' => 'En attente', 'accepter' => 'Accepté', 'refuser' => 'Refusé'] as $value => $label)
            <option value="{{ $value }}" {{ $candidature->etat == $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach
            </select>
        </div>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Mettre à jour</button>
    </form>
</x-layout>
