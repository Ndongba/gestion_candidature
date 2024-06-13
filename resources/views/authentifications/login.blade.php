<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen w-full flex flex-col">
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white text-xl font-bold">MonSite</a>
            <div>
                <a href="{{ route('register') }}" class="text-gray-300 hover:text-white mx-2">Inscription</a>
                <a href="{{ route('login') }}" class="text-gray-300 hover:text-white mx-2">Connexion</a>
            </div>
        </div>
    </nav>

 <!-- https://play.tailwindcss.com/MIwj5Sp9pw -->
 <div class="">
    <div class=" bg-white rounded-lg shadow-lg overflow-hidden mx-auto h-screen grid grid-cols-2 gap-4   w-full">
        <div class="hidden lg:block lg:w-3/3  ml-16 bg-cover"
            style="background-image:url('{{ asset('./images/Rectangle.jpg') }}')">
        </div>
        <div class="center my-32 items-center justify-center p-8 mx-16 lg:w-2/3">
            
            <a href="#" class="flex mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
                <div class="px-4 py-3">
                    <svg class="h-6 w-6" viewBox="0 0 40 40">
                        <path
                            d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                            fill="#FFC107" />
                        <path
                            d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z"
                            fill="#FF3D00" />
                        <path
                            d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z"
                            fill="#4CAF50" />
                        <path
                            d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z"
                            fill="#1976D2" />
                    </svg>
                </div>
                <h1 class="px-4 py-3 w-5/6 text-center text-gray-600  bg-gray-600 font-bold">Se Connecter avec Google</h1>
            </a>
            <div class="mt-4 flex items-center justify-between">
                {{-- <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">or login with email</a>
                <span class="border-b w-1/5 lg:w-1/4"></span> --}}
            </div>
            <form  action="{{ route('login.save') }}" method="post">
                @csrf
            <div class="py-6">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="email" placeholder="email" name="email" id="email"  />
            </div>
            <div class="py-6">
                <div class="flex justify-between">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Mot de passe</label>
                </div>
                <input class="bg-gray-100 text-gray-700 focus:outline-none shadow-outline placeholder:bg-slate-300 focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="password" placeholder="password" name="password" id="password"/>
            </div>
            <div class="py-8">
                <button type="submit" class="bg-red-700 text-white ro font-bold py-5 px-4 w-full rounded-lg hover:bg-red-600">Se Connecter</button>
            </div>
            <div class="mt-4 flex items-center justify-between">
                <span class="border-b w-1/5 md:w-1/4"></span>
                <a href="#" class="text-xs text-gray-500 ">Pas de compte ? S’inscrire</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </form>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#connexionForm").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 6
                    }
                },
                messages: {
                    email: {
                        required: "Veuillez entrer votre email",
                        email: "Veuillez entrer un email valide"
                    },
                    password: {
                        required: "Veuillez entrer votre mot de passe",
                        minlength: "Le mot de passe doit contenir au moins 6 caractères"
                    }
                }
            });
        });
    </script>
</body>
</html>
