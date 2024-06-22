<x-candidat>

    <style>
        body {
            font-family: 'Nunito Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: white;
            /* Couleur de fond blanche /
    color: #fff;
    padding: 1rem 0;
    border-bottom: 2px solid rgba(0, 0, 0, 0.1); / Ajout d'un trait noir avec opacité */
        }

        header nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            font-size: 20px;

        }

        header .logo img {
            height: 50px;
        }

        header ul {
            list-style: none;
            display: flex;
            gap: 60px;
            font-weight: bolder;
            margin-right: 100px;
        }

        header ul li {
            margin: 0;

        }

        header ul li a {

            color: black;
            text-decoration: none;
        }

        .logo {
            margin-left: 50px;
        }

        .btn {
            background-color: #ce0033;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }


        .btn:hover {
            background-color: #b0002b;
            transform: translateY(-2px);
        }


        .btn:active {
            background-color: #a30028;
            transform: translateY(0);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .row {
            background-color: #ce0033;
            color: white;
            display: flex;
            height: 100px;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }

        .div-row {
            /* background-color: #ce0033; */
            color: rgb(0, 0, 0);
            display: flex;
            height: 100px;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-left: 100px;
            margin-right: 100px;
        }

        .description-row {
            color: rgb(0, 0, 0);
            display: flex;
            height: 100px;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            margin-left: 100px;
            margin-right: 600px;
            margin-top: 90px;
        }

        .description h1 {
            font-size: 42px;
            margin-left: 120px;
        }

        .competence {
            margin-top: 100px;
            margin-left: 120px;
        }

        .competence-container {
            background-color: #ce0033;
        }

        .row .text {
            font-size: 42px;
            margin-left: 100px;
        }

        .row .button {
            background-color: white;
            color: #ce0033;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-transform: uppercase;
        }

        /*
        .c-container
            background-color: #ce0033;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60vh;
            gap: 800px;
            margin-left: 100px;
            margin-right: 100px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 250px;
            border-top-right-radius: 250px;
            border-bottom-right-radius: 50px;
            height: 100vh;
        } */
        .container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            gap: 500px;
            padding: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 300px;
            padding: 20px;
        }

        .skills-list {
            list-style-type: none;
            padding: 0;
        }

        .skills-list li {
            display: flex;
            align-items: center;
            /* background-color: #f1f1f1; */
            margin: 5px 0;
            padding: 10px;
            border-radius: 5px;
        }

        .skills-list img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .card img {
            width: 100%;
        }


        .A-container {
            background-color: #ce0033;
            display: block;
            justify-content: center;
            text-align: center;
            align-items: center;
            padding: 20px;
            gap: 200px;
            margin-left: 100px;
            margin-right: 100px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 250px;
            border-top-right-radius: 250px;
            border-bottom-right-radius: 50px;
            height: 85vh;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 300px;
            padding: 20px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            width: 300px;
            padding: 20px;
        }

        .soft_skill {
            margin-top: 50px;
            margin-left: 100px;
            display: flex;
            gap: 800px;
            font-size: 20px;
        }

        .skills-list {
            list-style-type: none;
            padding-left: 30px;
        }

        .back-end h1 {
            text-align: center;
        }

        .back-end {

            background-color: #FFF2F2;
            border-top-right-radius: 100px;
        }

        .back-ends h1 {
            padding-bottom: 50px;
            text-align: center;
        }

        .back-ends {
            height: 545px;
            color: #FFF2F2;
            border-top-right-radius: 100px;
            margin-top: 50px;
            margin-left: 100px;
            font-size: 20px;
        }

        .front-end {
            color: #FFF2F2;
            font-size: 20px;
        }

        .front-end h1 {
            margin-top: 90px;
        }

        .skills-list li {

            padding-right: 20px;
            display: flex;
            align-items: center;
            /* background-color: #f1f1f1; */
            /* margin: 5px 0; */
            padding: 10px;
            border-radius: 5px;
        }

        .skills-list img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .pre-requis {
            background-color: #F1F5F8;
            text-align: center;
            height: 1100px;
            margin-top: 50px;
        }

        .paragraphe {
            margin-left: 400px;
            margin-right: 400px;
        }

        .requis {
            width: 650px;
            text-align: center;
            background-color: #ce0033;
            border-top-left-radius: 100px;
            font-size: 20px;
            margin-left: 100px;
            padding-left: 50px;
            padding-top: 50px;
            padding-bottom: 50px;
            position: relative;
        }

        .X {
            display: flex;
            margin-top: 50px;
            display: flex;
            font-size: 20px;
            color: #FFF2F2
        }

        .debouche {

            width: 830px;
            background-color: #ce0033;
            border-top-right-radius: 100px;
            border-bottom-left-radius: 100px;
            font-size: 20px;
            /* margin-left: 100px; */
            margin-top: 200px;
            padding-left: 100px;
            padding-top: 50px;
            padding-bottom: 50px;
            position: absolute;
            left: 715px;
            color: #FFF2F2;

        }

        .skills-list {}

        .footer {
            background-color: black;
            color: #000000;
            padding: 1rem 0;
            text-align: center;
        }

        footer nav {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        footer ul {
            list-style: none;
            display: flex;
            gap: 1rem;
            padding: 0;
        }

        footer ul li a {
            color: #fff;
            text-decoration: none;
        }

        footer .social-icons {
            margin-top: 1rem;
        }

        footer .social-icons a {
            color: #fff;
            margin: 0 0.5rem;
            text-decoration: none;
            font-size: 1.5rem;
        }

        footer p {
            text-align: right;
            margin-right: 30px;
        }

        .log {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
            margin-left: 30px;
        }

        .foot {
            margin-right: 400px;
            justify-content: space-between;
        }
    </style>

    <div class="row">
        <div class="text">{{ $formation->libelle }}</div>
        {{-- <a href="{{ url('candidature/post/'.$formation->id) }}"><button class="button">Bouton</button></a> --}}
    </div>
    <div class=" px-32 py-8 grid grid-cols-1 md:grid-cols-2 gap-16 ">
        <div class="w-full flex justify-center">
            <img src="{{ asset('storage/' . $formation->image) }}" alt="{{ $formation->libelle }} Image"
                class="w-[530px] h-auto">
        </div>
        <div class="back-end w-full flex flex-col-reverse ml-80 justify-end" style="max-width: 405px;">
            <ul class="skills-list space-y-2">
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
                <li class="flex items-center">
                    <img src="{{ asset('images/rouge.svg') }}" class="h-8 mr-2" alt="Icon">
                    <span>Lorem ipsum dolor, sit amet consect</span>
                </li>
            </ul>
            <h1 class="text-4xl font-bold my-12">SOFT SKILL</h1>

        </div>
    </div>




    <div class="flex justify-between items-center px-32 py-8  mb-4">
        <div class="text-lg font-bold">
            LA FORMATION EST 100% GRATUITE
        </div>
        <div>
            <a href="{{ route('candidature.ajouter', $formation->id) }}">
                <button class="bg-red-500 text-white py-2 p-8 rounded-3xl hover:bg-red-600">
                    <strong>Postuler</strong>
                </button>
            </a>
        </div>
    </div>

    <div class="bg-white w-4/5 px-32 py-8  mb-4">
        <h1 class="text-2xl font-bold mb-4">DESCRIPTION</h1>
        <div class="text-gray-700 mb-4">
            {{ $formation->description }}
        </div>
    </div>

    <div class="bg-white  px-32 py-8  ">
        <h1 class="text-2xl font-bold mb-4">DUREE DE LA FORMATION</h1>
        <h2 class="text-gray-700">9 mois: Du {{ $formation->date_debut }} au {{ $formation->date_fin }}</h2>
    </div>



    <div class="A-container ">
        <div class="block ">
            <h1 class=" text-white">COMPETENCES VISÉES</h1>
        </div>
        <div class="flex ">
            <div class="front-end">
                <ul class="skills-list">
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <h1 class="text-white">FRONT-END</h1>

                </ul>
            </div>
            <div class="back-ends">
                <h1 class="text-white">BACK-END</h1>

                <ul class="skills-list">
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="pre-requis">
        <h1>PRE-REQUIS & DEBOUCHÉ</h1>
        <p class="paragraphe">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo
            eveniet ab dolorem quisquam
            reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi aLorem ipsum
            dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam
            reprehenderit
            at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a..Lorem ipsum dolor, sit
            amet
            consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde
            rerum animi
            impedit veniam placeat nobis illum minus delectus itaque modi a. Lorem ipsum dolor, sit amet consectetur
            adipisicing elit.
            Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi impedit veniam
            placeat nobis illum
            minus delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora,
            illo eveniet ab
        </p>
        {{-- <div class="Requis">
            <ul class="skills-list">
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
            </ul>
        </div>
        <div class="debouché">
            <h1>BACK-END</h1>
            <ul class="skills-list">
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
            </ul>
        </div> --}}
        <div class="X">
            <div class="requis">
                <h1 class="text-white">SOFT SKILL</h1>
                <ul class="skills-list">
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
            <div class="debouche">
                <h1 class="text-white">SOFT SKILL</h1>
                <ul class="skills-list">
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum
                        dolor, sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>
    </div>
    {{-- <div id="modelConfirm" class="fixed inset-0 bg-gray-600 bg-opacity-50 justify-end right-0 overflow-y-auto h-full w-full hidden">
        <div class=" absolute right-0 top-20 mx-auto p-5 border w-2/6 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Notifications
                </h3>
                <div class="mt-2 px-7 py-3">
                    @include('candidates.notifications.index')
                </div>
                <div class="items-center px-4 py-3">
                    <button id="ok-btn" class="px-4 py-2 bg-red-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    <script>
        function openModal(id) {
            document.getElementById(id).classList.remove('hidden');
        }

        document.getElementById('ok-btn').addEventListener('click', function() {
            document.getElementById('modelConfirm').classList.add('hidden');
        });
    </script>

    @include('layouts.footer')
</x-candidat>
