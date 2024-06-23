<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formations</title>
    <link rel="stylesheet" href="{{ asset('css/formation.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
       <title>Tableau de Bord</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/formation.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>

</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="#">
                    <img src="#" alt="Logo">
                </a>
            </div>
            <div class="flex items-center">
                <ul>
                    @if (!Auth::user())
                        
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">À propos</a></li>
                    <li><a href="{{route('formations.index')}}">Formations</a></li>
                    <li><a href="#">Contact</a></li>

                    @else
                    <li><a href="{{route('formations.index')}}">Formations</a></li>
                    <li><a href="{{route('candidature.afficher')}}">Mes candidatures</a></li>

                    @endif

                </ul>
            </div>

            <div class="flex items-center">
                @auth
                <span class="text-gray-800 mr-4">{{ Auth::user()->prenom }}</span>
                <img src="https://bdesign-julinho97.vercel.app/assets/img/BMB.png" alt="Admin Photo"
                class="w-10 h-10 rounded-full">
                    
                @endauth
              
            </div>
           
        </nav>
    </header>

    <div >
        <section class=" h-screen inset-0 bg-cover bg-center"  style="background-image: url('{{ asset('images/image1.jpg') }}')"; >
            <div class="flex  flex-col md:flex-row-reverse items-center">
              <div class="w-full md:w-1/2  pt-52">
                <h1 class="text-white text-7xl font-semibold leading-none tracking-tighter mr-2">
                    Bienvenue sur notre site !
                </h1>
                <br>
                <p class="text-white mr-6">Nous sommes ravis de vous accueillir. Explorez nos différentes sections pour découvrir nos services, nos formations et les dernières actualités.</p>
              </div>
            </div>
            </div>
          </section>
          

          <section id="accueil" class="py-8 ">
            <div class="max-w-4xl mx-auto ">

              <div class="flex gap-3 bg-red-600 border border-gray-300 rounded-xl overflow-hidden items-center justify-start">

                <div class="flex flex-col gap-2 py-2 bg-white p-4 flex-grow">
                    <h1 class="text-black text-3xl font-semibold mb-4 ">Apprentissage Tech Innovant</h1>
                </div>

                <div class="flex flex-col gap-2 py-2 bg-white p-4 flex-grow">
                    <p class="text-black">
                      Nous sommes ravis de vous accueillir dans notre communauté dédiée à
                      l'apprentissage et au perfectionnement des compétences en informatique.
                    </p>
                    <button href="#" class="bg-red-600 text-white px-3 rounded-md  self-start">À propos</button>
                </div>
                  
              </div>
            </div>
          </section>
          
          
          <section id="a-propos" class="py-8 bg-gradient-to-r from-red-100 via-gray-150 to-gray-300 relative">
            <div class="container mx-auto px-6 relative">
              <h2 class="text-2xl font-semibold mb-4 text-center text-red-600">Nos formations</h2>
              <p class="text-center mb-8">Explorez nos différentes formations adaptées à vos besoins professionnels et personnels.</p>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

                  <div>
                    <div class=" rounded-tl-lg rounded-br-lg overflow-hidden">
                        <img src="{{ asset('images/web-dev.jpg') }}" alt="Développement web" class="w-full h-48 object-cover">
                      </div>
                   <div class="bg-white  rounded-tl-lg rounded-br-lg shadow-md overflow-hidden">
                      <div class="p-4">
                        <h3 class="text-xl font-semibold">Développement web</h3>
                      </div>
                   </div>
                  </div>

                 <div>
                    <div class="rounded-tl-lg rounded-br-lg overflow-hidden">
                        <img src="{{ asset('images/image2.jpg') }}" alt="Intelligence artificielle" class="w-full h-48 object-cover">
                      </div>
                    <div class="bg-white rounded-tl-lg rounded-br-lg shadow-md overflow-hidden">
                      <div class="p-4 rounded-tl-lg rounded-br-lg">
                        <h3 class="text-xl font-semibold">Intelligence artificielle</h3>
                      </div>
                    </div>
                 </div>

                <div>
                    <div class="rounded-tl-lg rounded-br-lg overflow-hidden">
                        <img src="{{ asset('images/standard-quality.jpg') }}" alt="Cybersécurité" class="w-full h-48 object-cover">
                      </div>
                    <div class="bg-white rounded-tl-lg rounded-br-lg shadow-md overflow-hidden">
                      <div class="p-4 rounded-tl-lg rounded-br-lg">
                        <h3 class="text-xl font-semibold">Cybersécurité</h3>
                      </div>
                    </div>
                </div>

               <div>
                <div class="rounded-tl-lg rounded-br-lg overflow-hidden">
                    <img src="{{ asset('images/standard-quality.jpg') }}" alt="Gestion de projet" class="w-full h-48 object-cover">
                  </div>
                <div class="bg-white rounded-tl-lg rounded-br-lg shadow-md overflow-hidden">
                  <div class="p-4 rounded-tl-lg rounded-br-lg">
                    <h3 class="text-xl font-semibold">Gestion de projet</h3>
                  </div>
                </div>
               </div>

              </div>
            </div>
            <div class="absolute left-1/2 transform -translate-x-1/2 -bottom-8">
              <a href="{{ route('formations.index') }}" class="inline-block bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md hover:bg-red-700 transition duration-300">
                Voir les formations
              </a>
            </div>
          </section>
       </div>
    </div>


    <br><br><br><br>
    <div class="flex">
        <section id="formations" class="py-8 w-1/2">
          <div class="container text-2xl mx-auto px-20">
            <h2 class="text-4xl text-center font-semibold mb-4">Formations</h2>
            <p>Expertise : Nos formateurs sont des professionnels expérimentés dans leur domaine.</p>
            <p>Flexibilité : Des cours en ligne et en présentiel pour s'adapter à votre emploi du temps.</p>
            <p>Support : Un accompagnement personnalisé tout au long de votre parcours.</p>
          </div>
        </section>
      
        <section class="w-1/2 flex items-center justify-center">
            <div class="relative w-64 h-64 bg-black p-4 border border-red-600 rounded-lg transform rotate">
              <div class="relative isolate flex flex-col justify-end overflow-hidden rounded-tl-lg rounded-br-lg shadow-md h-full w-full">
                <img src="{{ asset('images/image1.jpg') }}" alt="" class="absolute inset-0 h-full w-full object-cover rounded-tl-lg rounded-br-lg">
              </div>
            </div>
          </section>

          <section class="w-1/2 flex justify-end">
            <div class="relative isolate flex flex-col justify-end">
              <img src="{{ asset('images/Group.jpg') }}" alt="" class="w-100 h-50 object-cover">
            </div>
          </section>
          
          
       <style>
        .rotate {
            transform: rotate(45deg);
        }
       </style>          
     </div>
      
     <div class="container mx-auto px-6 py-8">
        <h2 class="text-2xl font-semibold mb-4 text-center text-red-600">Nos Partenaires</h2>
        <div class="flex swiper-container">
          <div class="flex swiper-wrapper">
            <div class="swiper-slide"><img src="{{ asset('images/image1.jpg') }}" alt="Partenaire 1" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image2.jpg') }}" alt="Partenaire 2" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image1.jpg') }}" alt="Partenaire 3" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image2.jpg') }}" alt="Partenaire 4" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image1.jpg') }}" alt="Partenaire 5" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image2.jpg') }}" alt="Partenaire 6" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image1.jpg') }}" alt="Partenaire 7" class="swiper-img"></div>
            <div class="swiper-slide"><img src="{{ asset('images/image2.jpg') }}" alt="Partenaire 8" class="swiper-img"></div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Add Navigation -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
      
      <style>
        .swiper-container {
          width: 100%;
          padding-bottom: 50px; /* Ajoute de l'espace en bas pour les boutons de navigation */
        }
        
        .swiper-slide {
          display: flex;
          justify-content: center; /* Centre les images horizontalement */
          align-items: center; /* Centre les images verticalement si nécessaire */
        }
        
        .swiper-img {
          max-width: 100%; /* Ajuste la largeur maximale de l'image */
          max-height: 100%; /* Ajuste la hauteur maximale de l'image */
          height: auto; /* Assure une hauteur automatique pour garder le ratio */
        }
      </style>
      
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
          var swiper = new Swiper('.swiper-container', {
            slidesPerView: 3,
            spaceBetween: 30,
            loop: true,
            pagination: {
              el: '.swiper-pagination',
              clickable: true,
            },
            navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
          });
        });
      </script>
      
            


   





    <br><br><br>
    
    
        <footer>
            <div class="log">
                <a href="#">
                    <img src="#" alt="Logo">
                </a>
    
    
                <nav class="foot">
                    <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">À propos</a></li>
                        <li><a href="#">Formations</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
           
    
    
            <br><br><br>
    
            <div class="social-icons">
                <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
            <p class="copy">Copyright &copy; (DN) 2024</p>
    
        </footer>
    
        <script>
            function searchFormations() {
                // Functionality to search formations
            }
        </script>
    </body>
    </html>
    

