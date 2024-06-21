<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Formations</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 50px;
        }
        .card {
            width: 18rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Liste des Formations</h1>
        <div class="card-container" id="card-container">
            <!-- Les cartes seront injectées ici par JavaScript -->
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const formations = [
            { title: "Développement Web", ouverture: "20 Janvier 2024", fermeture: "30 Février 2024", apprenants: 25, statut: "Ouvert" },
            { title: "Développement Web", ouverture: "20 Janvier 2024", fermeture: "30 Février 2024", apprenants: 25, statut: "Ouvert" },
            // Ajoutez plus de formations ici
        ];

        const container = document.getElementById('card-container');

        formations.forEach(formation => {
            const card = document.createElement('div');
            card.className = 'card';
            card.innerHTML = `
                <div class="card-body">
                    <h5 class="card-title">${formation.title}</h5>
                    <p class="card-text"><strong>Date d'Ouverture:</strong> ${formation.ouverture}</p>
                    <p class="card-text"><strong>Date de Fermeture:</strong> ${formation.fermeture}</p>
                    <p class="card-text"><strong>Nombre d'Apprenants:</strong> ${formation.apprenants}</p>
                    <p class="card-text"><strong>Statut:</strong> ${formation.statut}</p>
                </div>
            `;
            container.appendChild(card);
        });
    </script>
</body>
</html>