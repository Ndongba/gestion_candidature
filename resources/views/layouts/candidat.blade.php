<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <style>
        .hover-scale {
            transition: transform 0.3s;
        }

        .hover-scale:hover {
            transform: scale(1.05);
        }

        .sidebar {
            transition: width 0.3s;
        }

        .sidebar:hover {
            width: 250px;
        }

        .active {
            background-color: #DB1313;
            /* Couleur de fond pour l'élément actif */
            color: #ffffff;
            margin: 8px
                /* Couleur de texte pour l'élément actif */
        }

        .active>span {
            /* Couleur de fond pour l'élément actif */
            color: #ffffff;
            /* Couleur de texte pour l'élément actif */
        }
    </style>
    <script>
        function confirmAction(message, event) {
            if (!confirm(message)) {
                event.preventDefault();
            }
        }
    </script>
</head>

<body class="bg-gray-100">

    <!-- Sidebar -->
    <div class="flex">
        <!-- ACTVE MENU -->
       

        <!-- Main content -->
        <div class=" flex-1">
            <!-- Navbar -->
            <div
                class="bg-red-700 shadow-md py-8 right-0 w-100 mix-w-screen-xl rounded-lg mr-8 container px-12 fixed top-0 flex items-center justify-between z-10">
                <div class="flex items-center">
                </div>

                <div class="flex items-center">
                    @auth
                    <span class="text-gray-800 mr-4">{{ Auth::user()->prenom }}</span>

                        
                    @endauth
                    <img src="https://bdesign-julinho97.vercel.app/assets/img/BMB.png" alt="Admin Photo"
                        class="w-10 h-10 rounded-full">
                </div>
            </div>



            <!-- Content -->
            <div class="pt-24 ml-64  mt- px-8">
                <div class=" p-6 ">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="bg-white p-6 rounded-lg shadow-md">
        {{ $slot }}
    </div> --}}

        <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
</body>

</html>
