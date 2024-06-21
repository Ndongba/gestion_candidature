<!-- Inclure Bootstrap CSS dans le <head> de votre document -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <x-layout>
        <style>
            #contact-form {
              position: fixed;
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
              width: 50%;
              max-width: 600px;
              z-index: 1000;
              background-color: white;
              padding: 20px; 
              border-radius: 15px;
              box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
              max-height: 90vh;
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
           <br>
            <form action="{{ route('formations.modifierTraitement') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $formations->id }}">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" name="libelle" value="{{ $formations->libelle}}" placeholder="Titre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nombre_place">Nombre place</label>
                        <input type="number" class="form-control" id="nombre_place" name="nombre_place" value="{{ $formations->nombre_place }}" placeholder="Nombre de places">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_debut">Date de début</label>
                        <input type="date" class="form-control" id="date_debut"  value="{{ $formations->date_debut }}"  name="date_debut">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_fin">Date de fin</label>
                        <input type="date" class="form-control" id="date_fin"  value="{{ $formations->date_fin }}"  name="date_fin">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description"  name="description" placeholder="Description">{{ $formations->description }}</textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_fin_appel">Date fermeture</label>
                        <input type="date" class="form-control" id="date_fin_appel"  value="{{ $formations->date_fin_appel }}" name="date_fin_appel">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_debut_appel">Date ouverture</label>
                        <input type="date" class="form-control" id="date_debut_appel" value="{{ $formations->date_debut_appel }}" name="date_debut_appel">
                    </div>
                </div>
               <div class="form-row">
                {{-- <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image" value="{{ $formations->image }}">
                </div> --}}
                <div class="form-group">
                    <label for="etat">Statut</label>
                    <select class="form-control" id="etat" name="etat">
                        <option value="ouvert">Ouvert</option>
                        <option value="fermer">Fermer</option>
                    </select>
                </div>
               </div>
                <button type="submit" class="btn btn-submit ">Modifier</button>
            </form>
        </div>
    
       
    
     
        
    </x-layout>
    