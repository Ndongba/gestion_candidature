    <x-candidat>

    
    <div class=" bg-white rounded-lg shadow-lg overflow-hidden mx-auto h-screen grid grid-cols-2 gap-4   w-full">
        <div class="hidden lg:block lg:w-3/3  ml-16 bg-cover"
            style="background-image:url('{{ asset('./images/register.png') }}')">
        </div>
        <div class="center my-12 items-center justify-center p-8 mx-16 lg:w-2/3">
            
            <a href="#" class="flex mt-4 text-white rounded-lg shadow-md hover:bg-gray-100">
               
                <h4 class="px-4 py-3 w-5/6 text-center text-white  bg-gray-600 font-bold">Se Connecter avec Google</h4>
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
            </a>
            <div class="mt-4 flex items-center justify-between">
                {{-- <span class="border-b w-1/5 lg:w-1/4"></span>
                <a href="#" class="text-xs text-center text-gray-500 uppercase">or login with email</a>
                <span class="border-b w-1/5 lg:w-1/4"></span> --}}
            </div>
            <form  id="inscriptionForm" action="{{route('register.save')}}" method="post">
                @csrf
                <input type="hidden"id="role" name="role"  required>

              
            <div class="py-1">
                <label class="block text-gray-700 text-sm font-bold mb-2">Nom</label>
                <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="text" placeholder="nom" name="nom" id="nom"  />
            </div>
            <div class="py-1">
                <label class="block text-gray-700 text-sm font-bold mb-2">Prenom</label>
                <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="text" placeholder="prenom" name="prenom" id="prenom"  />
            </div>
            <div class="py-1">
                <label class="block text-gray-700 text-sm font-bold mb-2">Pelephone</label>
                <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="text" placeholder="telephone" name="telephone" id="telephone"  />
            </div>
            <div class="py-1">
                <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input class="bg-white text-gray-700 focus:outline-none shadow-outline focus:shadow-outline border border-gray-300 rounded-lg py-5 block w-full appearance-none" type="email" placeholder="email" name="email" id="email"  />
            </div>
            <div class="py-1">
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
                <a href="{{ route('login') }}" class="text-xs text-gray-500 ">Vous avez déjà un compte ? Connectez-vous</a>
                <span class="border-b w-1/5 md:w-1/4"></span>
            </div>
        </form>
        </div>
    </div>
</x-candidat>
