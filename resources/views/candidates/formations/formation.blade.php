
        
        <x-candidat>

            <section id="formations" class="px-24 py-8">
                <h1 class="text-3xl font-bold mb-4">Trouvez votre formation</h1>
                <p class="mb-8">Vous recherchez une formation aux métiers du numérique ? Vous êtes au bon endroit ! Découvrez toutes les sessions de formation ouvertes à la candidature grâce au moteur de recherche ci-dessous.</p>
            
                <div class="recherche flex space-x-4 mb-8">
                    <input type="text" placeholder="Formation" class="w-1/3 p-2 border border-gray-300 rounded-lg">
                    <input type="date" placeholder="Date" class="w-1/3 p-2 border border-gray-300 rounded-lg">
                    <select class="w-1/3 p-2 border border-gray-300 rounded-lg">
                        <option value="">Région</option>
                        <!-- Ajouter les options de région ici -->
                    </select>
                    <button onclick="searchFormations()" class="bg-blue-500 text-white px-4 py-2 rounded-lg">Trouvez votre formation</button>
                </div>
            
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                    @foreach ($formations as $formation)
                    <div class="formation bg-white p-2 rounded-lg shadow-md">
                        <img src="{{ asset('storage/'.$formation->image) }}" alt="{{ $formation->libelle }} Image" class=" h-36 max-h-52 object-cover =-lg mb-4">
                        <h2 class="text-2xl font-bold mb-2">{{ $formation->libelle }}</h2>
                        <p class=" text-left px-7">Date de début de la formation: {{ \Carbon\Carbon::parse($formation->date_debut)->format('d/m/Y') }}</p>
                        <p class=" text-left px-7">Date limite de candidature: {{ \Carbon\Carbon::parse($formation->date_fin_appel)->format('d/m/Y') }}</p>
                        <a href="{{ url('formations/detail/'.$formation->id)}}" > <button  class="inline-block w-36 mt-4 bg-red-500 text-white px-8 py-4 rounded-lg hover:bg-red-600 transition duration-200">Voir plus</button></a>

                    </div>
                    @endforeach
                </div>
            </section>
            
        {{-- <div id="modelConfirm" class="fixed inset-0 bg-gray-600 bg-opacity-50 justify-end right-0 overflow-y-auto h-full w-full hidden">
            <div class=" absolute right-0 top-20 mx-auto p-5 border w-2/6 shadow-lg rounded-md bg-white">
                <div class="mt-3 text-center">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Notifications
                    </h3>
                    <div class="mt-2 px-7 py-3">
                        @include('candidates.notifications.index')
                    </div>
                    <div class="items-center px-4 py-3">
                        <button id="ok-btn" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div> --}}
        
        @include('layouts.footer');

    </x-candidat>

