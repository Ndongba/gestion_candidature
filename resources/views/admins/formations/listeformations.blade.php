<x-layout>




    <!-- Content -->
    <div class="">


        <!-- Statistiques des candidats -->

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-3 px-4 sm:px-8 mt-0">
            <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Nombre de formation en cours</h3>
                    <p class="text-3xl bold py-2">{{ $formations->where('etat', 'ouvert')->count() }}</p>
                </div>
            </div>
            <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Nombre de formation terminée </h3>
                    <p class="text-3xl bold py-2">{{ $formations->where('etat', 'fermer')->count() }}</p>
                </div>
            </div>
            <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
                <div class="px-4 text-gray-700">
                    <h3 class="text-sm tracking-wider">Nombre de formation lancée</h3>
                    <p class="text-3xl bold py-2">{{ $formations->count() }}
                    </p>
                </div>
            </div>
            {{-- <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats non retenus</h3>
                <p class="text-3xl bold py-2">{{ $formations->where('etat', 'ouvert')->count() }}</p>
            </div>
        </div>
        <div class="flex items-center py-4 bg-white border rounded-2xl shadow overflow-hidden">
            <div class="px-4 text-gray-700">
                <h3 class="text-sm tracking-wider">Candidats postulés</h3>
                <p class="text-3xl bold py-2">{{ $formations->count() }}</p>
            </div>
        </div> --}}

        </div>



        <!-- Titre -->
        {{-- <div class="my-10 text-left">
        <span>{{ $formation->libelle }}</span>
    </div> --}}
        <br>
        <!-- Liste des formations -->

        {{-- <a href="{{ route('formations.ajouter') }}"><button class="button"><strong>Ajouter</strong></button></a> --}}

        <div class="bg-white mt-12 p-6 rounded-lg shadow-md">
            <div class="flex justify-between  items-center mb-6">
                <h2 class="text-2xl pr-4 font-bold">Liste des formations</h2>
                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M13.6364 6.01508C15.1455 6.01508 16.3545 4.73212 16.3545 3.14279C16.3545 1.55346 15.1455 0.270508 13.6364 0.270508C12.1273 0.270508 10.9091 1.55346 10.9091 3.14279C10.9091 4.73212 12.1273 6.01508 13.6364 6.01508ZM6.36364 6.01508C7.87273 6.01508 9.08182 4.73212 9.08182 3.14279C9.08182 1.55346 7.87273 0.270508 6.36364 0.270508C4.85455 0.270508 3.63636 1.55346 3.63636 3.14279C3.63636 4.73212 4.85455 6.01508 6.36364 6.01508ZM6.36364 7.92994C4.24545 7.92994 0 9.05013 0 11.2809V13.6745H12.7273V11.2809C12.7273 9.05013 8.48182 7.92994 6.36364 7.92994ZM13.6364 7.92994C13.3727 7.92994 13.0727 7.94909 12.7545 7.97781C13.8091 8.78205 14.5455 9.86394 14.5455 11.2809V13.6745H20V11.2809C20 9.05013 15.7545 7.92994 13.6364 7.92994Z"
                        fill="#CE0033" />
                </svg>



                <div class="w-1/4     mx-auto">
                    <input type="text" class="w-full p-2 border border-gray-300 rounded-3xl"
                        placeholder="Recherche...">
                </div>
                <div class=" justify-end items-end">
                    <a href="#">
                        <button class="bg-red-500 text-white py-2 p-8 rounded-xl hover:bg-red-600"
                            onclick="openModal('modelConfirm')">
                            <strong>Ajouter</strong>
                        </button>
                    </a>

                </div>
            </div>


            <div class="overflow-x-auto">
                <table class="min-w-full bg-white rounded-lg">
                    <thead class="text-black">
                        <tr>
                            <th class="px-4 py-2 text-left">Libelle</th>
                            <th class="px-4 py-2 text-left">Date debut</th>
                            <th class="px-4 py-2 text-left">Date Fin </th>
                            <th class="px-4 py-2 text-left">Nombre de places</th>
                            <th class="px-4 py-2 text-left">Nombre de candidats
                            <th class="px-4 py-2 text-left">Status</th>
                            <th class="px-4 py-2 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($formations as $formation)
                            <tr class="hover:bg-gray-100 p transition-colors duration-200">
                                <td class="border-t px-4 py-2 flex items-center">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 15H11V11H15V9H11V5H9V9H5V11H9V15ZM10 20C8.61667 20 7.31667 19.7375 6.1 19.2125C4.88333 18.6875 3.825 17.975 2.925 17.075C2.025 16.175 1.3125 15.1167 0.7875 13.9C0.2625 12.6833 0 11.3833 0 10C0 8.61667 0.2625 7.31667 0.7875 6.1C1.3125 4.88333 2.025 3.825 2.925 2.925C3.825 2.025 4.88333 1.3125 6.1 0.7875C7.31667 0.2625 8.61667 0 10 0C11.3833 0 12.6833 0.2625 13.9 0.7875C15.1167 1.3125 16.175 2.025 17.075 2.925C17.975 3.825 18.6875 4.88333 19.2125 6.1C19.7375 7.31667 20 8.61667 20 10C20 11.3833 19.7375 12.6833 19.2125 13.9C18.6875 15.1167 17.975 16.175 17.075 17.075C16.175 17.975 15.1167 18.6875 13.9 19.2125C12.6833 19.7375 11.3833 20 10 20ZM10 18C12.2333 18 14.125 17.225 15.675 15.675C17.225 14.125 18 12.2333 18 10C18 7.76667 17.225 5.875 15.675 4.325C14.125 2.775 12.2333 2 10 2C7.76667 2 5.875 2.775 4.325 4.325C2.775 5.875 2 7.76667 2 10C2 12.2333 2.775 14.125 4.325 15.675C5.875 17.225 7.76667 18 10 18Z"
                                            fill="#CE0033" />
                                    </svg>

                                    <span>{{ $formation->libelle }} </span>
                                </td>
                                <td class="border-t px-4 py-5">{{ $formation->date_debut }}</td>
                                <td class="border-t px-4 py-5">{{ $formation->date_fin }}</td>
                                <td class="border-t px-4 py-5">{{ $formation->nombre_place }}</td>
                                <td class="border-t px-4 py-5">{{ $formation->candidatures->count() }}</td>
                                <td class="border-t px-4 py-5">{{ $formation->etat }}</td>
                             
                                
                                <td class="border-t  pl-8 py-1">
                                    <div class="flex gap-4 ">

                                        {{-- Icon detail --}}
                                        <a href="{{ route('candidats.liste.admin', $formation) }}"
                                            class="text-red-500 hover:text-red-700">
                                            <svg class="" width="22" height="18" viewBox="0 0 22 15"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11 12C12.25 12 13.3125 11.5625 14.1875 10.6875C15.0625 9.8125 15.5 8.75 15.5 7.5C15.5 6.25 15.0625 5.1875 14.1875 4.3125C13.3125 3.4375 12.25 3 11 3C9.75 3 8.6875 3.4375 7.8125 4.3125C6.9375 5.1875 6.5 6.25 6.5 7.5C6.5 8.75 6.9375 9.8125 7.8125 10.6875C8.6875 11.5625 9.75 12 11 12ZM11 10.2C10.25 10.2 9.6125 9.9375 9.0875 9.4125C8.5625 8.8875 8.3 8.25 8.3 7.5C8.3 6.75 8.5625 6.1125 9.0875 5.5875C9.6125 5.0625 10.25 4.8 11 4.8C11.75 4.8 12.3875 5.0625 12.9125 5.5875C13.4375 6.1125 13.7 6.75 13.7 7.5C13.7 8.25 13.4375 8.8875 12.9125 9.4125C12.3875 9.9375 11.75 10.2 11 10.2ZM11 15C8.56667 15 6.35 14.3208 4.35 12.9625C2.35 11.6042 0.9 9.78333 0 7.5C0.9 5.21667 2.35 3.39583 4.35 2.0375C6.35 0.679167 8.56667 0 11 0C13.4333 0 15.65 0.679167 17.65 2.0375C19.65 3.39583 21.1 5.21667 22 7.5C21.1 9.78333 19.65 11.6042 17.65 12.9625C15.65 14.3208 13.4333 15 11 15ZM11 13C12.8833 13 14.6125 12.5042 16.1875 11.5125C17.7625 10.5208 18.9667 9.18333 19.8 7.5C18.9667 5.81667 17.7625 4.47917 16.1875 3.4875C14.6125 2.49583 12.8833 2 11 2C9.11667 2 7.3875 2.49583 5.8125 3.4875C4.2375 4.47917 3.03333 5.81667 2.2 7.5C3.03333 9.18333 4.2375 10.5208 5.8125 11.5125C7.3875 12.5042 9.11667 13 11 13Z"
                                                    fill="#DB1313" />
                                            </svg>

                                        </a>
                                        <a href="{{ route('formations.modifier', $formation) }}"
                                            class="text-red-500 hover:text-red-700">
                                            <svg class="" width="18" height="18" viewBox="0 0 18 18"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.304 2.84436L15.156 5.69636M5 5.00036H2C1.73478 5.00036 1.48043 5.10572 1.29289 5.29325C1.10536 5.48079 1 5.73514 1 6.00036V16.0004C1 16.2656 1.10536 16.5199 1.29289 16.7075C1.48043 16.895 1.73478 17.0004 2 17.0004H13C13.2652 17.0004 13.5196 16.895 13.7071 16.7075C13.8946 16.5199 14 16.2656 14 16.0004V11.5004M16.409 1.59036C16.5964 1.77767 16.745 2.00005 16.8464 2.24481C16.9478 2.48958 17 2.75192 17 3.01686C17 3.2818 16.9478 3.54414 16.8464 3.78891C16.745 4.03367 16.5964 4.25605 16.409 4.44336L9.565 11.2874L6 12.0004L6.713 8.43536L13.557 1.59136C13.7442 1.4039 13.9664 1.25517 14.2111 1.1537C14.4558 1.05223 14.7181 1 14.983 1C15.2479 1 15.5102 1.05223 15.7549 1.1537C15.9996 1.25517 16.2218 1.4039 16.409 1.59136V1.59036Z"
                                                    stroke="#CE0033" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </svg>

                                        </a>

                                        <form action="{{ url('formations/' . $formation->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="icon-btn  text-red-600" title="Supprimer"
                                                onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>



                                        {{-- Fin Icon detail --}}



                                    </div>
                                    {{-- <a href="{{ route('admin.formations.', $formation) }}" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-eye text-red-600"></i>
                            </a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        {{-- include ajout formation --}}

        <div id="modelConfirm" class="fixed  inset-0 bg-gray-500 bg-opacity-70 overflow-y-auto h-full w-full hidden">
            @include('admins.formations.ajoutformation')
        </div>

        <script>
            function openModal(id) {
                document.getElementById(id).classList.remove('hidden');
            }

            document.getElementById('ok-btn').addEventListener('click', function() {
                document.getElementById('modelConfirm').classList.add('hidden');
            });
        </script>
</x-layout>
