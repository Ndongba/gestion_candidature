<x-layout>
    <style>
        /* Style pour le formulaire de popup */
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
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: vertical;
        }

        .form-group button {
            width: 100%;
            padding: 10px;
            background-color: #e74c3c;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group button:hover {
            background-color: #c0392b;
        }
    </style>

    <div id="contact-form" class="fixed h-100 top-1/2 left-1/2 transform w-2/4 z-50 -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded shadow-lg">
        <button id="close-btn" class="text-gray-700 hover:text-red-600 font-bold text-xl" onclick="closeForm()">X</button>
        <h2 class="form-title">Ajouter une formation</h2>
        <form action="{{ route('formations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" placeholder="Titre" required>
            </div>
            <div class="form-group">
                <label for="date_debut_appel">Date ouverture</label>
                <input type="date" name="date_debut_appel" id="date_debut_appel" required>
            </div>
            <div class="form-group">
                <label for="date_fin_appel">Date fermeture</label>
                <input type="date" name="date_fin_appel" id="date_fin_appel" required>
            </div>
            <div class="form-group">
                <label for="date_debut">Date de début</label>
                <input type="date" name="date_debut" id="date_debut" required>
            </div>
            <div class="form-group">
                <label for="date_fin">Date de fin</label>
                <input type="date" name="date_fin" id="date_fin" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="description" placeholder="Description" required></textarea>
            </div>
            <div class="form-group">
                <label for="nombre_place">Nombre de places</label>
                <input type="number" name="nombre_place" id="nombre_place" placeholder="Nombre de places" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" required>
            </div>
            <div class="form-group">
                <label for="etat">Statut</label>
                <select name="etat" id="etat" required>
                    <option value="ouvert">Ouvert</option>
                    <option value="fermer">Fermer</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Ajouter</button>
            </div>
        </form>
    </div>

    <button id="open-popup-btn">
        <i id="popup-icon" class="fas fa-plus"></i>
    </button>

    <script>
        const openPopupBtn = document.getElementById('open-popup-btn');
        const contactForm = document.getElementById('contact-form');
      const popupIcon = document.getElementById('popup-icon');
  
      openPopupBtn.addEventListener('click', function () {
          if (contactForm.style.display === 'block') {
              contactForm.style.display = 'none';
              popupIcon.classList.remove('fa-comment');
              popupIcon.classList.add('fa-comment-alt');
          } else {
              contactForm.style.display = 'block';
              popupIcon.classList.remove('fa-comment-alt');
              popupIcon.classList.add('fa-comment');
          }
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
  
  