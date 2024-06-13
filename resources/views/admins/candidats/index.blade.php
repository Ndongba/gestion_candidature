<x-layout>



    <!-- Content -->

    <div class="">
        <h2 class="text-2xl mt-10 font-bold mb-6">Liste des Candidatures</h2>
        <table class="min-w-full bg-white rounded-lg">
            <thead class=" text-black">
                <tr>
                    <th class="px-4 py-2 text-left">Nom</th>
                    <th class="px-4 py-2 text-left">Prénom</th>
                    <th class="px-4 py-2 text-left">Email</th>
                    <th class="px-4 py-2 text-left">Téléphone</th>
                    <th class="px-4 py-2 text-left">Biographie</th>
                    <th class="px-4 py-2 text-left">Etat</th>
                    <th class="px-4 py-2 text-left">Motivation</th>
                    <th class="px-4 py-2 text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($candidatures as $candidature)
                    <tr class="hover:bg-gray-100 transition-colors duration-200">
                        <td class="border-t px-4 py-2">{{ $candidature->user->nom }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->user->prenom }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->user->email }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->user->telephone }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->biographie }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->motivation }}</td>
                        <td class="border-t px-4 py-2">{{ $candidature->etat }}</td>
                        {{-- <td class="border-t px-4 py-2">
                                            <i class="fas fa-shopping-cart text-green-500"></i> : {{ $candidature->commandes->count() }}<br>
                                            <i class="fas fa-money-bill-wave text-green-500"></i> : {{ number_format($candidature->commandes->where('etat_commande', 'valide')->sum('montant_total'), 0, ',', '') }} XOF
                                        </td>
                                        <td class="border-t px-4 py-2">{{ $candidature->created_at->format('H:i - d/m/Y') }}</td>
                                        <td class="border-t text-center px-4 py-2">
                                            <a href="{{ route('admin.candidatures.commandes', $candidature) }}" class="text-blue-500 hover:text-blue-700">
                                                <i class="fas fa-eye text-red-600"></i>
                                            </a>
                                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-layout>
