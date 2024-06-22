<x-candidat>
    <main class="px-32">
    <div class=" bg-red-200  px-48 py-14 rounded-xl">

        
        <h3 id="" class="text-4xl font-bold mb-4">Formulaire de Candidature Formation <span  class="mb-4 text-red-700"> {{ $formation->libelle }}</span></h3>

        

        {{-- Message d'erreur --}}
        @if (session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('candidature.traitement') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf

            <input type="hidden" name="formation_id" value="{{ $formation->id }}">
            <input type="hidden" name="etat">
            <input type="hidden" name="user_id">

            <div class="mb-4">
                <label for="biographie" class="block text-sm font-medium text-gray-700">Biographie</label>
                <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-300 focus:ring focus:ring-red    -200 focus:ring-opacity-50" id="biographie" rows="5" name="biographie" required></textarea>
            </div>

            <div class="mb-4">
                <label for="motivation" class="block text-sm font-medium text-gray-700">Motivation</label>
                <textarea class="form-textarea mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-red-300 focus:ring focus:ring-red    -200 focus:ring-opacity-50" id="motivation" rows="5" name="motivation" required></textarea>
            </div>

            <div class="mb-4">
                <label for="cv" class="block text-sm font-medium text-gray-700">CV</label>
                <input type="file" class="form-input mt-1 block w-full py-2 px-3 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-red  -500 focus:border-red -500 sm:text-sm" id="cv" name="cv" required>
            </div>

            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Envoyer</button>
        </form>
    </div>
</main>


</x-candidat>
