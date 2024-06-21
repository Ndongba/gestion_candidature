<x-candidat>

    <style>
        body {
            font-family: 'Nunito Sans', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        header {
    background-color: white; /* Couleur de fond blanche /
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
        .back-end h1{
            text-align: center;
        }
        .back-end{
          
            height: 545px;
            width: 800px;
            background-color: #FFF2F2;
            border-top-right-radius: 100px;
        }
        .back-ends h1{
            padding-bottom: 50px;
            text-align: center;
        }
        .back-ends{
            height: 545px;
            color: #FFF2F2;
            border-top-right-radius: 100px;
            margin-top: 50px;
            margin-left: 100px;
            font-size: 20px;
        }
        .front-end{
            color: #FFF2F2;
            font-size: 20px;
        }
        .front-end h1{
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

        .pre-requis{
            background-color: #F1F5F8;
            text-align: center;
            height: 1100px;
            margin-top: 50px;
        }
        .paragraphe{
            margin-left: 400px;
            margin-right: 400px;
        }
        .requis{
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
        .X{
            display: flex;
            margin-top: 50px;
            display: flex;
            font-size: 20px;
            color: #FFF2F2
        }
        .debouche{
           
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
        .skills-list{
            
        }
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
    
    <div class="soft_skill col-12">
        <div class="front-end w-2/4 col-5">
           
               <img src="{{ asset('storage/'.$formation->image ) }}" alt="">
        </div>
        <div class="back-end">
            <h1>SOFT SKILL</h1>
            <ul class="skills-list">
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
                <li><img src="{{ asset('images/rouge.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consect</li>
            </ul>
        </div>
    </div>

    <div class="div-row" >
        <div col="8">
            LA FORMATION EST 100% GRATUITE
        </div>
        <div>
            <a href="{{ route('candidature.ajouter',$formation->id) }}"><button class="btn"><strong>Postuler</strong></button></a>
        </div>
    </div>

    <div class="description">
        <h1>DESCRIPTION</h1>
        <div class="description-row" col="8">

            {{ $formation->description }}
            {{-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam 
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
            veniam placeat nobis illum minus delectus itaque modi a. --}}
        </div>
        <div col="2" >

        </div>
    </div>

    <div class="competence" >
        <h1>DUREE DE LA FORMATION</h1>
        <p>9 mois: Du {{ $formation->date_debut }} au {{ $formation->date_fin }}</p>
    </div>
    {{-- <div class="c-container">
        <h1>COMPETENCES VISÉES</h1>
    </div> --}}
    <div>
    <div class="A-container">
    
        <div class="front-end">
            <ul class="skills-list">
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <h1>FRONT-END</h1>
            </ul>
        </div>
        <div class="back-ends">
            <h1>BACK-END</h1>
            <ul class="skills-list">
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                <li><img src="{{ asset('images/blanc.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
            </ul>
        </div>
    </div>
  
    <div class="pre-requis">
        <h1>PRE-REQUIS & DEBOUCHÉ</h1>
        <p class="paragraphe">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam 
            reprehenderit at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi aLorem ipsum
             dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit
             at unde rerum animi impedit veniam placeat nobis illum minus delectus itaque modi a..Lorem ipsum dolor, sit amet 
            consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi
             impedit veniam placeat nobis illum minus delectus itaque modi a. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
             Dignissimos tempora, illo eveniet ab dolorem quisquam reprehenderit at unde rerum animi impedit veniam placeat nobis illum
             minus delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab
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
                <h1>SOFT SKILL</h1>
                <ul class="skills-list">
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
            <div class="debouche">
                <h1>SOFT SKILL</h1>
                <ul class="skills-list">
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                    <li><img src="{{ asset('images/boule.svg') }}" style="height: 45px;" alt="Icon">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</li>
                </ul>
            </div>
        </div>
    </div>
</x-candidat>
