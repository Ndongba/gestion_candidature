<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mise en page avec soft skills</title>
    <style>
        body {
            font-family: 'Nunito Sans', Arial, sans-serif;
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
            width: 430px;
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

        .pre-requis{
            background-color: #F1F5F8;
            text-align: center;
        }
        .paragraphe{
            
            margin-left: 400px;
            margin-right: 400px;
        }

    </style>
</head>
<body>
    <div class="row">
        <div class="text">Texte à gauche</div>
        <button class="button">Bouton</button>
    </div>
    
    <div class="soft_skill">
        <div class="front-end">
           
            <ul class="mon_candidature">
               <img src="{{ asset('images/image.png') }}" alt="">
            </ul>
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
             minus delectus itaque modi a.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos tempora, illo eveniet ab</p>
    </div>

</body>
</html>
