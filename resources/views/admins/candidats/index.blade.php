<x-layout>




    <!-- Statistiques des candidats -->

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-5 px-4 sm:px-8 mt-0">
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats retenus</h3>
                <p class="text-3xl bold py-2">{{ $formation->candidatures->where('etat', 'accepter')->count() }}</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats en attente</h3>
                <p class="text-3xl bold py-2">{{ $formation->candidatures->where('etat', 'en_attente')->count() }}</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats non évalués</h3>
                <p class="text-3xl bold py-2">{{ $formation->candidatures->where('etat', 'en_evaluation')->count() }}
                </p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats non retenus</h3>
                <p class="text-3xl bold py-2">{{ $formation->candidatures->where('etat', 'refuser')->count() }}</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats postulés</h3>
                <p class="text-3xl bold py-2">{{ $formation->candidatures->count() }}</p>
            </div>
        </div>
    </div>


    <!-- Titre -->
    <div class="my-10 text-left">
        <span>{{ $formation->libelle }}</span>
    </div>

    <!-- Liste des candidatures -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="flex justify-start  items-center mb-6">
            <h2 class="text-2xl pr-4 font-bold">Liste des Candidatures</h2>
            <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M13.6364 6.01508C15.1455 6.01508 16.3545 4.73212 16.3545 3.14279C16.3545 1.55346 15.1455 0.270508 13.6364 0.270508C12.1273 0.270508 10.9091 1.55346 10.9091 3.14279C10.9091 4.73212 12.1273 6.01508 13.6364 6.01508ZM6.36364 6.01508C7.87273 6.01508 9.08182 4.73212 9.08182 3.14279C9.08182 1.55346 7.87273 0.270508 6.36364 0.270508C4.85455 0.270508 3.63636 1.55346 3.63636 3.14279C3.63636 4.73212 4.85455 6.01508 6.36364 6.01508ZM6.36364 7.92994C4.24545 7.92994 0 9.05013 0 11.2809V13.6745H12.7273V11.2809C12.7273 9.05013 8.48182 7.92994 6.36364 7.92994ZM13.6364 7.92994C13.3727 7.92994 13.0727 7.94909 12.7545 7.97781C13.8091 8.78205 14.5455 9.86394 14.5455 11.2809V13.6745H20V11.2809C20 9.05013 15.7545 7.92994 13.6364 7.92994Z"
                    fill="#CE0033" />
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
                            <td class="border-t  px-5 py-1">
                                <div class="flex">

                                    {{-- Icon detail --}}
                                    <a href=""><svg class="mr-3" width="20" height="15"
                                            viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13 6.7002H20V8.7002H13V6.7002ZM14 10.7002H20V12.7002H14V10.7002ZM12 2.7002H20V4.7002H12V2.7002ZM2 14.7002H12V13.7002C12 10.9432 9.757 8.7002 7 8.7002H5C2.243 8.7002 0 10.9432 0 13.7002V14.7002H2ZM6 7.7002C7.995 7.7002 9.5 6.1952 9.5 4.2002C9.5 2.2052 7.995 0.700195 6 0.700195C4.005 0.700195 2.5 2.2052 2.5 4.2002C2.5 6.1952 4.005 7.7002 6 7.7002Z"
                                                fill="#CE0033" />
                                        </svg></a>
                                    {{-- Fin Icon detail --}}

                                    {{-- Icon Telecharger  --}}

                                    <a href=""><svg width="13" height="15" viewBox="0 0 13 15"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.8333 12.9572C11.1313 12.9572 11.375 12.7561 11.375 12.5104V4.468H8.66667C8.06745 4.468 7.58333 4.06867 7.58333 3.5744V1.3404H2.16667C1.86875 1.3404 1.625 1.54146 1.625 1.7872V12.5104C1.625 12.7561 1.86875 12.9572 2.16667 12.9572H10.8333ZM0 1.7872C0 0.801448 0.971615 0 2.16667 0H7.76953C8.34505 0 8.89688 0.187098 9.30313 0.522197L12.3669 3.04941C12.7732 3.38451 13 3.83969 13 4.31441V12.5104C13 13.4962 12.0284 14.2976 10.8333 14.2976H2.16667C0.971615 14.2976 0 13.4962 0 12.5104V1.7872Z"
                                                fill="#CE0033" />
                                        </svg></a>
                                     {{-- Fin Icon Telecharger  --}}


                                </div>
                                {{-- <a href="{{ route('admin.candidatures.', $candidature) }}" class="text-blue-500 hover:text-blue-700">
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
