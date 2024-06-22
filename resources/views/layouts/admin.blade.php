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
        .sidebar {
            transition: width 0.3s;
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
        <div class="sidebar z-20 bg-white shadow-lg h-screen w-64 hover:w-72 fixed transition-all duration-300">
            <div class="p-6">
                <img src="https://simplon.sn/wp-content/uploads/2023/07/logo-simplonSenegal-2048x894.png"
                    alt="Admin Photo" class="w-full ">

            </div>
            <nav class="mt-20 ">
                <a href="#"
                    class="flex items-center p-4  hover:bg-red-600 hover:text-white hover:scale-105 transition-all  @if (request()->routeIs('dashboard.admin')) rounded-3xl active @endif">

                    {{--  icon dashboard --}}

                    <svg width="42" height="41" viewBox="0 0 42 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_87_9998)">
                            <rect x="6" y="2" width="30" height="30" rx="12" fill="white" />
                        </g>
                        <path
                            d="M20.7908 9.06501C20.7472 9.02329 20.6892 9 20.6288 9C20.5684 9 20.5104 9.02329 20.4668 9.06501L15.0732 14.2175C15.0503 14.2394 15.0321 14.2657 15.0197 14.2948C15.0072 14.324 15.0008 14.3554 15.0009 14.3871L15 19.2228C15 19.4715 15.0988 19.7099 15.2746 19.8857C15.4504 20.0615 15.6889 20.1603 15.9375 20.1603H18.7529C18.8772 20.1603 18.9965 20.1109 19.0844 20.023C19.1723 19.9351 19.2217 19.8159 19.2217 19.6916V15.7072C19.2217 15.645 19.2464 15.5854 19.2903 15.5415C19.3343 15.4975 19.3939 15.4728 19.4561 15.4728H21.7998C21.862 15.4728 21.9216 15.4975 21.9655 15.5415C22.0095 15.5854 22.0342 15.645 22.0342 15.7072V19.6916C22.0342 19.8159 22.0836 19.9351 22.1715 20.023C22.2594 20.1109 22.3786 20.1603 22.5029 20.1603H25.3172C25.5658 20.1603 25.8043 20.0615 25.9801 19.8857C26.1559 19.7099 26.2547 19.4715 26.2547 19.2228V14.3871C26.2547 14.3554 26.2483 14.324 26.2359 14.2948C26.2234 14.2657 26.2052 14.2394 26.1823 14.2175L20.7908 9.06501Z"
                            fill="#CE0033" />
                        <defs>
                            <filter id="filter0_d_87_9998" x="0.5" y="-2.38419e-07" width="41" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="3.5" />
                                <feGaussianBlur stdDeviation="2.75" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_87_9998" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_87_9998"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    {{-- Fin icon dashboard --}}

                    <span class="ml-4 text-gray-700 hover:text-white font-bold">Dashboard</span>
                </a>
                <a href="{{ route('candidats.admin') }}"
                    class="flex items-center p-4 text-gray-700 hover:bg-red-600 hover:text-white hover:scale-105 transition-all rounded-3xl @if (request()->routeIs('candidats.admin')) active @endif">

                    {{--  icon candidat --}}

                    <svg width="42" height="41" viewBox="0 0 42 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_87_10025)">
                            <rect x="6" y="2" width="30" height="30" rx="12" fill="white" />
                        </g>
                        <path
                            d="M17.4473 11.8175C18.3316 11.8175 19.0485 11.1007 19.0485 10.2164C19.0485 9.33209 18.3316 8.61523 17.4473 8.61523C16.563 8.61523 15.8462 9.33209 15.8462 10.2164C15.8462 11.1007 16.563 11.8175 17.4473 11.8175Z"
                            fill="#DB1313" />
                        <path
                            d="M20.7027 25.7232L20.1176 21.4251C20.1089 21.3615 20.0934 21.2989 20.0713 21.2386L19.2356 18.9603V17.0712C18.6521 17.3529 17.9548 17.1107 17.6693 16.5315L16.5156 14.1839L18.1468 16.1314C18.4903 16.5414 19.1449 16.4397 19.3499 15.9484L20.4778 13.2449C20.6292 12.882 20.4578 12.465 20.0949 12.3136C19.732 12.1621 19.3149 12.3337 19.1635 12.6965L18.4865 14.3191L17.6073 13.2695L18.0989 13.6302L18.6315 12.3587H16.2252C15.7096 12.3587 15.2786 12.7196 15.1702 13.2025V13.0846C15.1702 12.4187 14.6304 11.8789 13.9645 11.8789C13.2987 11.8789 12.7589 12.4187 12.7589 13.0846V14.6974H12.4191C12.1876 14.6974 12 14.885 12 15.1165V16.4575C12 16.689 12.1876 16.8766 12.4191 16.8766H12.7589C12.7589 17.704 13.3985 18.2637 14.1118 18.2637H15.1436V18.9896H15.1445L15.029 21.7492L13.482 25.5043C13.2947 25.9588 13.5113 26.479 13.9659 26.6663C14.4205 26.8536 14.9407 26.6368 15.1279 26.1824L16.7348 22.2823C16.7743 22.1863 16.7968 22.0841 16.8011 21.9804C16.9338 18.8098 16.9253 19.0251 16.9253 18.9896H17.3502L18.3667 21.761L18.9387 25.9634C19.0051 26.4509 19.4543 26.7916 19.9407 26.7252C20.4279 26.6588 20.769 26.2102 20.7027 25.7232Z"
                            fill="#DB1313" />
                        <path
                            d="M26.69 10.2023C27.5743 10.2023 28.2911 9.48542 28.2911 8.60113C28.2911 7.71685 27.5743 7 26.69 7C25.8057 7 25.0889 7.71685 25.0889 8.60113C25.0889 9.48542 25.8057 10.2023 26.69 10.2023Z"
                            fill="#DB1313" />
                        <path
                            d="M29.9456 24.1079L29.3605 19.8098C29.3519 19.7462 29.3364 19.6837 29.3143 19.6234L28.4786 17.3451V16.5892C28.1585 16.4874 26.3191 15.9026 25.9491 15.7849C25.5121 15.6459 25.2455 15.2207 25.2897 14.7819L25.5501 12.1792L25.9066 14.6945C25.945 14.9653 26.1351 15.1902 26.3958 15.2731L28.7304 16.0154C29.105 16.1346 29.5055 15.9275 29.6247 15.5526C29.7438 15.1778 29.5366 14.7774 29.1619 14.6583L27.2538 14.0515L26.9601 11.9794L27.5689 13.498L28.4786 13.7873V11.8251C28.4786 11.2278 27.9944 10.7435 27.397 10.7435H25.4682C24.9526 10.7435 24.5216 11.1044 24.4132 11.5873V11.4693C24.4132 10.8035 23.8734 10.2637 23.2075 10.2637C22.5416 10.2637 22.0019 10.8034 22.0019 11.4693V13.4561H21.6852C21.4537 13.4561 21.2661 13.6437 21.2661 13.8751V15.0426C21.2661 15.274 21.4537 15.4617 21.6852 15.4617H22.0124C22.0944 16.1304 22.6639 16.6484 23.3548 16.6484H24.3866V17.3743H24.3875L24.272 20.1339L22.725 23.889C22.5377 24.3435 22.7544 24.8637 23.2088 25.051C23.6638 25.2384 24.1838 25.0212 24.3709 24.5671L25.9777 20.667C26.0173 20.571 26.0397 20.4689 26.044 20.3652C26.1768 17.1941 26.1683 17.41 26.1683 17.3744H26.5931L27.6096 20.1457L28.1817 24.3481C28.248 24.8357 28.6972 25.1763 29.1836 25.11C29.6708 25.0436 30.012 24.595 29.9456 24.1079Z"
                            fill="#DB1313" />
                        <defs>
                            <filter id="filter0_d_87_10025" x="0.5" y="-2.38419e-07" width="41" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="3.5" />
                                <feGaussianBlur stdDeviation="2.75" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_87_10025" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_87_10025"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg> <span class="ml-4 text-gray-700 hover:text-white font-bold">Gestion Candidats</span>
                </a>
                <a href="{{ route('formations.afficher') }}"
                    class="flex items-center p-4 text-gray-700 hover:bg-red-600 hover:text-white hover:scale-105 transition-all rounded-3xl @if (request()->routeIs('afficher_candidature')) active @endif">
                    {{-- Fin icon candidat --}}


                    {{-- icon formation --}}
                    <svg width="47" height="41" viewBox="0 0 47 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_87_10009)">
                            <rect x="11" y="2" width="30" height="30" rx="12" fill="white" />
                        </g>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M17 8H29.0557V10.4998H28.2779V8.99992H17.7778V20.499H26.095V21.4989H17V8ZM28.6668 14.4995C28.9762 14.4995 29.2729 14.3415 29.4917 14.0602C29.7105 13.7789 29.8335 13.3974 29.8335 12.9996C29.8335 12.6018 29.7105 12.2203 29.4917 11.939C29.2729 11.6577 28.9762 11.4997 28.6668 11.4997C28.3574 11.4997 28.0606 11.6577 27.8418 11.939C27.623 12.2203 27.5001 12.6018 27.5001 12.9996C27.5001 13.3974 27.623 13.7789 27.8418 14.0602C28.0606 14.3415 28.3574 14.4995 28.6668 14.4995ZM29.4566 15.5044C29.9618 15.5044 30.3616 15.7964 30.6233 16.2473C30.8679 16.6698 30.9714 17.1923 30.9947 17.6747C31.0178 18.1696 30.9654 18.6656 30.8403 19.1346C30.7236 19.5696 30.5265 20.0195 30.2223 20.328V25.2486C30.2226 25.437 30.1677 25.6187 30.0686 25.7574C29.9694 25.8962 29.8333 25.9819 29.6872 25.9974C29.5411 26.013 29.3959 25.9573 29.2803 25.8414C29.1647 25.7256 29.0873 25.558 29.0634 25.3721L28.5618 21.4989H28.4459L27.8789 25.3866C27.852 25.5701 27.7728 25.7341 27.6568 25.8465C27.5408 25.9588 27.3964 26.0116 27.2517 25.9943C27.1071 25.9771 26.9727 25.8911 26.8748 25.7532C26.7769 25.6152 26.7225 25.4353 26.7223 25.2486V18.1157C26.6445 18.268 26.5678 18.4211 26.4921 18.5752L26.4618 18.6366L26.454 18.6526L26.452 18.6571C26.3996 18.7653 26.3266 18.8546 26.2399 18.9164C26.1532 18.9783 26.0557 19.0107 25.9566 19.0106H24.0121C23.8574 19.0106 23.709 18.9316 23.5996 18.791C23.4902 18.6503 23.4288 18.4596 23.4288 18.2607C23.4288 18.0618 23.4902 17.871 23.5996 17.7304C23.709 17.5897 23.8574 17.5107 24.0121 17.5107H25.6365C25.731 17.3228 25.8555 17.0788 25.9861 16.8338C26.1223 16.5783 26.2724 16.3078 26.4061 16.0959C26.4711 15.9924 26.5438 15.8844 26.6169 15.7959C26.6527 15.7524 26.7025 15.6959 26.7631 15.6459C26.87 15.555 26.9951 15.506 27.1233 15.5049L29.4566 15.5044Z"
                            fill="#CE0033" />
                        <defs>
                            <filter id="filter0_d_87_10009" x="5.5" y="-2.38419e-07" width="41" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="3.5" />
                                <feGaussianBlur stdDeviation="2.75" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_87_10009" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_87_10009"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    {{-- Fin icon formation --}}


                    <span class="ml-4 text-gray-700 hover:text-white font-bold">Gestion formations</span>
                </a>
                <a href="#"
                    class="flex items-center p-4 text-gray-700 hover:bg-red-600 hover:text-white hover:scale-105 transition-all rounded-3xl @if (request()->routeIs('admin.clients', 'admin.clients.commandes')) active @endif">
                    {{-- Fin icon candidatures --}}

                    <svg width="42" height="41" viewBox="0 0 42 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_244_866)">
                            <rect x="6" y="2" width="30" height="30" rx="12" fill="white" />
                        </g>
                        <g clip-path="url(#clip0_244_866)">
                            <path
                                d="M16.5469 24.0312H15.6094C15.4229 24.0312 15.2441 23.9572 15.1122 23.8253C14.9803 23.6934 14.9062 23.5146 14.9062 23.3281V19.1094C14.9062 18.9229 14.9803 18.7441 15.1122 18.6122C15.2441 18.4803 15.4229 18.4062 15.6094 18.4062H16.5469C16.7334 18.4062 16.9122 18.4803 17.0441 18.6122C17.1759 18.7441 17.25 18.9229 17.25 19.1094V23.3281C17.25 23.5146 17.1759 23.6934 17.0441 23.8253C16.9122 23.9572 16.7334 24.0312 16.5469 24.0312V24.0312Z"
                                fill="#CE0033" />
                            <path
                                d="M23.1094 24.0312H22.1719C21.9854 24.0312 21.8066 23.9572 21.6747 23.8253C21.5428 23.6934 21.4688 23.5146 21.4688 23.3281V16.2969C21.4688 16.1104 21.5428 15.9316 21.6747 15.7997C21.8066 15.6678 21.9854 15.5938 22.1719 15.5938H23.1094C23.2959 15.5938 23.4747 15.6678 23.6066 15.7997C23.7384 15.9316 23.8125 16.1104 23.8125 16.2969V23.3281C23.8125 23.5146 23.7384 23.6934 23.6066 23.8253C23.4747 23.9572 23.2959 24.0312 23.1094 24.0312V24.0312Z"
                                fill="#CE0033" />
                            <path
                                d="M26.3906 24.0312H25.4531C25.2666 24.0312 25.0878 23.9572 24.9559 23.8253C24.8241 23.6934 24.75 23.5146 24.75 23.3281V13.0156C24.75 12.8291 24.8241 12.6503 24.9559 12.5184C25.0878 12.3866 25.2666 12.3125 25.4531 12.3125H26.3906C26.5771 12.3125 26.7559 12.3866 26.8878 12.5184C27.0197 12.6503 27.0937 12.8291 27.0937 13.0156V23.3281C27.0937 23.5146 27.0197 23.6934 26.8878 23.8253C26.7559 23.9572 26.5771 24.0312 26.3906 24.0312V24.0312Z"
                                fill="#CE0033" />
                            <path
                                d="M19.8281 24.0312H18.8906C18.7041 24.0312 18.5253 23.9572 18.3934 23.8253C18.2616 23.6934 18.1875 23.5146 18.1875 23.3281V10.6719C18.1875 10.4854 18.2616 10.3066 18.3934 10.1747C18.5253 10.0428 18.7041 9.96875 18.8906 9.96875H19.8281C20.0146 9.96875 20.1934 10.0428 20.3253 10.1747C20.4572 10.3066 20.5312 10.4854 20.5312 10.6719V23.3281C20.5312 23.5146 20.4572 23.6934 20.3253 23.8253C20.1934 23.9572 20.0146 24.0312 19.8281 24.0312V24.0312Z"
                                fill="#CE0033" />
                        </g>
                        <defs>
                            <filter id="filter0_d_244_866" x="0.5" y="-2.38419e-07" width="41" height="41"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="3.5" />
                                <feGaussianBlur stdDeviation="2.75" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_244_866" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_244_866"
                                    result="shape" />
                            </filter>
                            <clipPath id="clip0_244_866">
                                <rect width="15" height="15" fill="white"
                                    transform="translate(13.5 9.5)" />
                            </clipPath>
                        </defs>
                    </svg>

                    {{-- Fin icon candidatures --}}



                    <span class="ml-4 text-gray-700 hover:text-white font-bold">Gestion candidatures</span>
                </a>


                <form action="{{ route('logout') }}" method="post" class="mt-6 bottom-14 absolute">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="w-full flex items-center p-4 text-red-600 hover:bg-red-100 hover:scale-105 transition-all rounded">
                        <span class="material-icons-sharp">logout</span>
                        <span class="ml-4">Déconnexion</span>
                    </button>
                </form>
            </nav>
        </div>


        <!-- Main content -->
        <!-- Main content -->
        <main class="flex  flex-col flex-1 w-full overflow-y-auto">
            <nav class="flex items-center  w-full  justify-between h-20 bg-red-700 shadow-md border-b  border-gray-200">

                <!-- Navbar -->
                <div class="flex items-center">
                    <!-- Add logo or title here if needed -->
                </div>
                <div class="flex pr-8 items-center">
                    @auth
                        <span class="text-white mr-4">{{ Auth::user()->prenom }}</span>
                    @endauth
                    <img src="https://bdesign-julinho97.vercel.app/assets/img/BMB.png" alt="Admin Photo"
                        class="w-10 h-10 rounded-full">
                </div>
            </nav>
            <!-- Content -->
            <div class="pt-24 ml-64 px-8">
                <div class="p-6">
                    {{ $slot }}
                </div>
            </div>
        </main>



    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>


</body>

</html>
