<x-layout>
    <!-- Statistiques des candidats -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5 px-4 sm:px-8 mt-0">
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats retenus</h3>
                <p class="text-3xl py-2 text-slate-300"><span class="bold text-slate-400">15</span>/25</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats en attente</h3>
                <p class="text-3xl bold py-2">10</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats non évalués</h3>
                <p class="text-3xl bold py-2">275</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats non retenus</h3>
                <p class="text-3xl bold py-2">1500</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats postulés</h3>
                <p class="text-3xl bold py-2">1800</p>
            </div>
        </div>
    </div>
    
    <!-- Titre -->
    <div class="my-10 text-left">
        <span>Appel à candidature Formation Développement web et web mobile</span>
    </div>

    <!-- Liste des candidatures -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-start  items-center mb-6">
            <h2 class="text-2xl pr-4 font-bold">Liste des Candidatures</h2>
            <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.6364 6.01508C15.1455 6.01508 16.3545 4.73212 16.3545 3.14279C16.3545 1.55346 15.1455 0.270508 13.6364 0.270508C12.1273 0.270508 10.9091 1.55346 10.9091 3.14279C10.9091 4.73212 12.1273 6.01508 13.6364 6.01508ZM6.36364 6.01508C7.87273 6.01508 9.08182 4.73212 9.08182 3.14279C9.08182 1.55346 7.87273 0.270508 6.36364 0.270508C4.85455 0.270508 3.63636 1.55346 3.63636 3.14279C3.63636 4.73212 4.85455 6.01508 6.36364 6.01508ZM6.36364 7.92994C4.24545 7.92994 0 9.05013 0 11.2809V13.6745H12.7273V11.2809C12.7273 9.05013 8.48182 7.92994 6.36364 7.92994ZM13.6364 7.92994C13.3727 7.92994 13.0727 7.94909 12.7545 7.97781C13.8091 8.78205 14.5455 9.86394 14.5455 11.2809V13.6745H20V11.2809C20 9.05013 15.7545 7.92994 13.6364 7.92994Z" fill="#CE0033"/>
            </svg>



            <div class="w-1/4    mx-auto">
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-3xl" placeholder="Recherche...">
                </div>
        </div>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg">
                <thead class="text-black">
                    <tr>
                        <th class="px-4 py-2 text-left">Candidat</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Téléphone</th>
                        <th class="px-4 py-2 text-left">Biographie</th>
                        <th class="px-4 py-2 text-left">Motivation</th>
                        <th class="px-4 py-2 text-left">État</th>
                        <th class="px-4 py-2 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidatures as $candidature)
                        <tr class="hover:bg-gray-100 p transition-colors duration-200">
                            <td class="border-t px-4 py-2 flex items-center">
                                <img src="https://w7.pngwing.com/pngs/866/254/png-transparent-naruto-uzumaki-sasuke-uchiha-naruto-head-sasuke-uchiha-cartoon-thumbnail.png"
                                    alt="Avatar de" class="w-10 h-10 rounded-full mr-3">
                                <span>{{ $candidature->user->prenom }} {{ $candidature->user->nom }}</span>
                            </td>
                            <td class="border-t px-4 py-5">{{ $candidature->user->email }}</td>
                            <td class="border-t px-4 py-5">{{ $candidature->user->telephone }}</td>
                            <td class="border-t px-4 py-5">{{ $candidature->biographie }}</td>
                            <td class="border-t px-4 py-5">{{ $candidature->motivation }}</td>
                            <td class="border-t px-4 py-5">{{ $candidature->etat }}</td>
                            <td class="border-t px-4 py-5">
                                {{-- <a href="{{ route('admin.candidatures.commandes', $candidature) }}" class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-eye text-red-600"></i>
                                </a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
