<!-- Inclure Bootstrap CSS dans le <head> de votre document -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <x-layout>
        <style>
            #contact-form {
              display: none;
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
    
            #close-btn {
                position: absolute;
                top: 10px;
                right: 10px;
                background: none;
                border: none;
                font-size: 20px;
                cursor: pointer;
                color: #333;
            }
    
            #open-popup-btn {
                position: fixed;
                bottom: 20px;
                right: 20px;
                background-color: #3498db;
                color: #fff;
                border: none;
                border-radius: 50%;
                padding: 20px;
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
    
            #open-popup-btn i {
                font-size: 24px;
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
            <button id="close-btn" onclick="closeForm()">X</button>
           <br>
            <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="titre">Titre</label>
                        <input type="text" class="form-control" id="titre" name="titre" placeholder="Titre">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nombre_place">Nombre place</label>
                        <input type="number" class="form-control" id="nombre_place" name="nombre_place" placeholder="Nombre de places">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_debut">Date de début</label>
                        <input type="date" class="form-control" id="date_debut" name="date_debut">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_fin">Date de fin</label>
                        <input type="date" class="form-control" id="date_fin" name="date_fin">
                    </div>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date_fin_appel">Date fermeture</label>
                        <input type="date" class="form-control" id="date_fin_appel" name="date_fin_appel">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date_debut_appel">Date ouverture</label>
                        <input type="date" class="form-control" id="date_debut_appel" name="date_debut_appel">
                    </div>
                </div>
               <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="image">Image</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="etat">Statut</label>
                    <select class="form-control" id="etat" name="etat">
                        <option value="ouvert">Ouvert</option>
                        <option value="fermer">Fermer</option>
                    </select>
                </div>
               </div>
                <button type="submit" class="btn btn-submit ">Ajouter</button>
            </form>
        </div>
    
        <button id="open-popup-btn">
            <i id="popup-icon" class="fas fa-comment"> ajout</i>
        </button>
    
        <script>
            const openPopupBtn = document.getElementById('open-popup-btn');
            const contactForm = document.getElementById('contact-form');
            const popupIcon = document.getElementById('popup-icon');
    
            openPopupBtn.addEventListener('click', function () {
                contactForm.style.display = contactForm.style.display === 'block' ? 'none' : 'block';
                popupIcon.classList.toggle('fa-comment-alt');
                popupIcon.classList.toggle('fa-comment');
            });
    
            function closeForm() {
                contactForm.style.display = 'none';
                popupIcon.classList.remove('fa-comment');
                popupIcon.classList.add('fa-comment-alt');
            }
    
            contactForm.addEventListener('click', function (e) {
                if (e.target === this) {
                    closeForm();
                }
            });
        </script>
    </x-layout>
    