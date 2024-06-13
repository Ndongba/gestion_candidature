<form action="{{ route('modifierFormationTraitement') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $formations->id }}">
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Titre</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="text" placeholder="libelle" name="libelle" value="{{ $formations->libelle}}" id="libelle" />
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Date ouverture</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="date" placeholder="date_debut_appel" name="date_debut_appel" value="{{ $formations->date_debut_appel }}" id="date_debut_appel" />
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Date fermeture</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="date" placeholder="date_fin_appel" name="date_fin_appel"  value="{{ $formations->date_fin_appel }}" id="date_fin_appel" />
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Date de dÃ©but</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="date" placeholder="date_debut" name="date_debut"  value="{{ $formations->date_debut }}" id="date_debut" />
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Date de fin</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="date" placeholder="date_fin" name="date_fin"  value="{{ $formations->date_fin }}" id="date_fin" />
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Description</label>
        <textarea class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" placeholder="description" name="description" id="description">{{ $formations->image }}</textarea>
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Nombre place</label>
        <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="nombre" placeholder="nombre_place" name="nombre_place" value="{{ $formations->nombre_place }}"  id="nombre_place" />
    </div>
    <div class="py-1">
        <div class="flex justify-between">
            <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
        </div>
        <input class="bg-gray-100 text-gray-700 focus:outline-none shadow-outline placeholder:bg-slate-300 focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="text" name="image"  value="{{ $formations->image }}" id="image"/>
    </div>
    <div class="py-1">
        <label class="block text-gray-700 text-sm font-bold mb-2">Statut</label>
        <select class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" name="etat" id="etat">
            <option value="ouvert">Ouvert</option>
            <option value="fermer">Fermer</option>
        </select>
    </div>
    <div class="py-8">
        <button type="submit" class="bg-red-700 text-white font-bold py-5 px-4 w-full rounded-lg hover:bg-red-600">Ajouter</button>
    </div>
</form>
