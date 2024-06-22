<!-- Inclure Bootstrap CSS dans le <head> de votre document -->

    {{-- <x-layout> --}}
        <style>
            #contact-form {
              position: fixed;
              top: 50%;
              left: 55%;
              transform: translate(-50%, -50%);
              width: 50%;
              max-width:50% ;
              max-height: 100%;
              z-index: 1000;
              background-color: rgba(255, 255, 255, 0.883);
              padding: 20px; 
              border-radius: 15px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              overflow: hidden;
           }

    
            #contact-form h2 {
                color: #333;
            }
    
         
    
            .btn-submit {
                background-color: #ce0033;
                color: white;
                padding: 10px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                font-size: 16px;
                margin-top: 20px;
            }
    
            .btn-submit:hover {
                background-color: #ce0033;
            }
    
            .form-control, .form-control-file, .form-control select {
                border-radius: 10px;
            }
        </style>
                    
                
        <div id="contact-form">
            <button id="ok-btn"
                        class="px-4 py-2 text-red-500 text-base font-medium rounded-md  shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        x
                    </button>
           <br>
           <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="form-group">
                    <label for="titre" class="block font-medium text-gray-700">Titre</label>
                    <input type="text" class=" appearance-none  p-3 placeholder:text-gray-500   placeholder-py-4 placeholder:placeholder  mt-1 block w-full py-4 rounded-2xl border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="titre" name="libelle" placeholder="Titre">
                </div>
                <div class="form-group">
                    <label for="nombre_place" class="block font-medium text-gray-700">Nombre de places</label>
                    <input type="number" class="mt-1 block w-full rounded-2xl py-4 p-3 border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="nombre_place" name="nombre_place" placeholder="Nombre de places">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div class="form-group">
                    <label for="date_debut" class="block font-medium text-gray-700">Date de début</label>
                    <input type="date" class="mt-1 block w-full rounded-2xl py-4 p-3  border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="date_debut" name="date_debut">
                </div>
                <div class="form-group">
                    <label for="date_fin" class="block font-medium text-gray-700">Date de fin</label>
                    <input type="date" class="mt-1 block w-full rounded-2xl py-4 p-3  border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="date_fin" name="date_fin">
                </div>
            </div>
            <div class="form-group mt-4">
                <label for="description" class="block font-medium text-gray-700">Description</label>
                <textarea class="mt-1 block w-full rounded-2xl py-10  border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="description" name="description" placeholder="Description"></textarea>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div class="form-group">
                    <label for="date_debut_appel" class="block  font-medium text-gray-700">Date ouverture</label>
                    <input type="date" class="mt-1 block w-full rounded-2xl py-4 p-3 pl-4  border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="date_debut_appel" name="date_debut_appel">
                </div>
                <div class="form-group">
                    <label for="date_fin_appel" class="block font-medium text-gray-700">Date fermeture</label>
                    <input type="date" class="mt-1 block w-full py-4 p-3 rounded-2xl border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="date_fin_appel" name="date_fin_appel">
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-4">
                <div class="form-group">
                    <label for="image" class="block font-medium text-gray-700">Image</label>
                    <input type="file" class="mt-1 block w-full rounded-2xl py-4 p-3  border-white shadow-sm focus:border-indigo-300 focus:ring focus:ring-red   -200 focus:ring-opacity-50" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="etat" class="block font-medium text-gray-700">Statut</label>
                    <select class="mt-1 block w-full rounded-2xl py-4 p-3  border-white shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="etat" name="etat">
                        <option value="ouvert">Ouvert</option>
                        <option value="fermer">Fermer</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="bg-red-500 text-white py-3 px-4 rounded-xl w-full hover:bg-red-600">Ajouter</button>
            </div>
        </form>
        
        </div>
    
       
    
     
        
    {{-- </x-layout> --}}
    