<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en page avec soft skills</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
        .description-row{
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
        .description h1{
            font-size: 42px;
            margin-left: 120px;
        }
        .competence{
            margin-top: 100px;
            margin-left: 120px;
        }
        .competence-container{
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
        /* .c-container {
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
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
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
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            gap: 20px;
            padding: 20px;
            gap: 600px;
            margin-left: 100px;
            margin-right: 100px;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 250px;
            border-top-right-radius: 250px;
            border-bottom-right-radius: 50px;
            height: 85vh;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 300px;
            padding: 20px;
        }
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 300px;
            padding: 20px;
        }
        .soft_skill{
            display: flex;
            gap: 800px;
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

    </style>
</head>
<body>
    <div class="row">
        <div class="text">Texte à gauche</div>
        <button class="button">Bouton</button>
    </div>

    {{-- <div class="container">
        <div class="card">
            <img src="{{ asset('images/image.png') }}" alt="Image">
        </div>
        <div class="container">
            <div class="card">
                <h2>Soft Skills</h2>
                <ul class="skills-list">
                    <li><img src="https://via.placeholder.com/24" alt="Communication Icon"> Communication</li>
                    <li><img src="https://via.placeholder.com/24" alt="Teamwork Icon"> Teamwork</li>
                    <li><img src="https://via.placeholder.com/24" alt="Problem Solving Icon"> Problem Solving</li>
                    <li><img src="https://via.placeholder.com/24" alt="Time Management Icon"> Time Management</li>
                    <li><img src="https://via.placeholder.com/24" alt="Adaptability Icon"> Adaptability</li>
                    <li><img src="https://via.placeholder.com/24" alt="Critical Thinking Icon"> Critical Thinking</li>
                </ul>
            </div>
        </div>
    </div> --}}
    <div class="soft_skill">
        <div class="front-end">
           
            <ul class="">
               <img src="{{ asset('images/image.png') }}" alt="">
            </ul>
        </div>
        <div class="back-end">
            <ul class="skills-list">
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Communication</li>
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Travail d'équipe</li>
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Résolution de problèmes</li>
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Gestion du temps</li>
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Adaptabilité</li>
                <li><img src="{{ asset('images/rouge.svg') }}" alt="Icon"> Esprit critique</li>
            </ul>
        </div>
    </div>

    <div class="div-row" >
        <div col="8">
            LA FORMATION EST 100% GRATUITE
        </div>
        <div col="4">
            3eme section
        </div>
    </div>

    <div class="description">
        <h1>DESCRIPTION</h1>
        <div class="description-row" col="8">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam 
            reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi aLorem ipsum
            dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit
            at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a..Lorem ipsum dolor, sit amet 
            consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi
            impedit veniam placeat nobis illum minus delectus itaque modi a. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi impedit veniam placeat nobis illum
            minus delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab
            dolorem quisquam reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a.Lorem
            ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde
            rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus 
            delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam
            reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a.Lorem ipsum dolor, sit amet
            consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi impedit 
            veniam placeat nobis illum minus delectus itaque modi a.
        </div>
        <div col="2" >

        </div>
    </div>

    <div class="competence" >
        <h1>DUREE DE LA FORMATION</h1>
        <p>9 mois: Du 01/01/2024 au 01/09/2024</p>
    </div>
    {{-- <div class="c-container">
        <h1>COMPETENCES VISÉES</h1>
    </div> --}}
    <div>
    <div class="A-container">
        <div class="front-end">
            <h2>Compétences Techniques</h2>
            <ul class="skills-list">
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Programmation</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Gestion de base de données</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Sécurité informatique</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Réseaux</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Cloud Computing</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Développement Web</li>
            </ul>
        </div>
        <div class="back-end">
            <ul class="skills-list">
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Communication</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Travail d'équipe</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Résolution de problèmes</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Gestion du temps</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Adaptabilité</li>
                <li><img src="{{ asset('images/blanc.svg') }}" alt="Icon"> Esprit critique</li>
            </ul>
            <h2>Compétences Douces</h2>
        </div>
    </div>
  

    <div c >

    </div>

</body>
</html>
