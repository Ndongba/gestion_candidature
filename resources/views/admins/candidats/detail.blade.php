<x-layout>

 

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <!-- Titre -->
    <div class="my-3  px-11 text-left">Appel a candidature Formation
        <span class=" bold">{{ $formation->libelle }}</span>
    </div>
    <div class="flex justify-between row-cols-2 px-11 items-center">
        <div class="flex items-center col-4">

            <div class="flex-none">
                <div class="relative flex items-center">
                    <img class="h-32 w-32 rounded-full object-cover"
                        src="data:image/jpeg;base64,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"
                        alt="Avatar">
                    <div class="absolute inset-0 rounded-full shadow-inner"></div>
                </div>
            </div>
            <div class="ml-4">
                <h2 class="font-bold text-gray-800 text-lg">{{ $candidature->user->prenom }}
                    {{ $candidature->user->nom }}</h2>
                <p class="text-gray-600">Genre : M</p>
            </div>
        </div>

        <div class="ml-8  pl-36 flex-1">

            <div class="card p-1 px-6 rounded-lg shadow-md mt-4">
                <div class="flex justify-between">
                    <div class="flex-1 px-6">
                        <span class="bold ">Détaille</span>
                        <p class=""><strong>Age : </strong> 27 ans</p>
                        <p class=""><strong>Address : </strong> Parcelle unité 13 </p>
                        <p class=""><strong>niveau etude : </strong> licence 2</p>
                    </div>
                    <div class="flex-1">
                        <span class="bold mb-4">Contact</span>
                        <p><strong>Email:</strong> {{ $candidature->user->email }}</p>
                        <p><strong>Téléphone:</strong> {{ $candidature->user->telephone }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center  border-b-2 px-11  row-cols-3  justify-between ">
        <div class="mr-4 mt-3">
            <p class="text-green-600 bold"><strong class="text-black">Statut :</strong> {{ $candidature->etat }}</p>
        </div>
        <div>
            <a href="{{ asset('storage/cv/' . $candidature->cv) }}" class="flex items-center">
                <svg width="80" height="70" viewBox="0 0 13 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10.8333 12.9572C11.1313 12.9572 11.375 12.7561 11.375 12.5104V4.468H8.66667C8.06745 4.468 7.58333 4.06867 7.58333 3.5744V1.3404H2.16667C1.86875 1.3404 1.625 1.54146 1.625 1.7872V12.5104C1.625 12.7561 1.86875 12.9572 2.16667 12.9572H10.8333ZM0 1.7872C0 0.801448 0.971615 0 2.16667 0H7.76953C8.34505 0 8.89688 0.187098 9.30313 0.522197L12.3669 3.04941C12.7732 3.38451 13 3.83969 13 4.31441V12.5104C13 13.4962 12.0284 14.2976 10.8333 14.2976H2.16667C0.971615 14.2976 0 13.4962 0 12.5104V1.7872Z"
                        fill="#CE0033" />
                </svg>
                <span class="ml-2 text-base text-gray-600">Télécharger CV</span>
            </a>
        </div>
        <div class="col-3"><button
                class="bg-red-700 bold text-white rounded-md px-6 flex justify-end items-center py-2 hover:bg-rose-700 transition"
                onclick="openModal('modelConfirm')">

                Evaluer

            </button></div>
    </div>



    <div class="px-11 ">
        <p class="text-gray-700 mb-4">
            <strong class=" p-4">Biographie:</strong>
            <br><br>
            <span id="biography">{{ substr($candidature->biographie, 0, 200) }}</span>
            <span id="biography-toggle" style="display: none;">{{ substr($candidature->biographie, 200) }}</span>
            <a href="#" id="biography-link">Voir plus</a>
        </p>
    </div>

    <div class="px-11  ">
        <p class="text-gray-700 mb-4">
            <strong>Motivation:</strong>
            <br><br>

            <span id="motivation">{{ substr($candidature->motivation, 0, 200) }}</span>
            <span id="motivation-toggle" style="display: none;">{{ substr($candidature->motivation, 200) }}</span>
            <a href="#" id="motivation-link">Voir plus</a>
        </p>
    </div>

    <div id="modelConfirm" class="fixed  inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border  shadow-lg rounded-md form-container w-full bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Mettre à jour l'état de la candidature
                </h3>
                <div class="mt-2 px-7 py-3">

                    <form
                        action="{{ route('candidature.updateStatus', ['formation' => $formation->id, 'candidature' => $candidature->id]) }}"
                        method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="mb-4">
                            <label for="etat" class="block text-sm font-medium text-gray-700">Changer l'état
                                :</label>
                            <div class="flex justify-center space-x-4 mt-1">
                                @if ($candidature->etat == 'en_attente' or $candidature->etat == 'en_evaluation')
                                    <button type="submit" name="etat" value="accepter"
                                        onclick="confirmAndUpdate('accepter')"
                                        class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-green-500">
                                        Accepter
                                    </button>
                                    <button type="submit" name="etat" value="refuser"
                                        onclick="confirmAndUpdate('refuser')"
                                        class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                                        Refuser
                                    </button>
                                    <button type="submit" name="etat" value="en_attente"
                                        onclick="confirmAndUpdate('en_attente')"
                                        class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                                        En attente
                                    </button>
                            </div>
                        @else
                        <span>                            Vous ne pouvez pas modifier l'état car il est déjà {{ $candidature->etat }}
                        </span>
                            
                            @endif

                        </div>
                    </form>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="ok-btn"
                        class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Retour
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        document.getElementById('ok-btn').addEventListener('click', function() {
            document.getElementById('modelConfirm').classList.add('hidden');
        });
    </script>
    <script>
        function confirmAndUpdate(etat) {
            // Récupérer l'état actuel de la candidature
            var currentEtat = "{{ $candidature->etat }}";

            // Vérifier si l'état actuel est 'accepter' ou 'refuser'
            if (currentEtat === 'accepter' || currentEtat === 'refuser') {
                alert("Vous ne pouvez pas modifier l'état car il est déjà 'accepté' ou 'refusé'.");
                return; // Arrêter la fonction sans soumettre le formulaire
            }

            if (confirm("Êtes-vous sûr de vouloir changer l'état de la candidature ?")) {
                // Mettre à jour la valeur du champ "etat"
                document.querySelector('#updateStatusForm [name="etat"]').value = etat;
                // Soumettre le formulaire
                document.getElementById('updateStatusForm').submit();
            }
        }
    </script>
    {{-- <script>
    function confirmAndUpdate(etat) {
        if (confirm("Êtes-vous sûr de vouloir changer l'état de la candidature ?")) {
            // Mettre à jour la valeur du champ "etat"
            document.querySelector('#updateStatusForm [name="etat"]').value = etat;
            // Soumettre le formulaire
            document.getElementById('updateStatusForm').submit();
        }
    }
</script> --}}

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



    <style>
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .form-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .form-label {
            margin-right: 10px;
            flex: 0 0 auto;
        }

        .form-select {
            flex: 1 1 auto;
            margin-right: 10px;
        }

        .btn {
            flex: 0 0 auto;
        }
    </style>

</x-layout>
