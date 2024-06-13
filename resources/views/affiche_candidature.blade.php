<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Affiche Candidature</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
   
    <div class="row">
    <div>
            
            <title>{{ $user->prenom}}</title>
            <title>{{ $user->nom}}</title>
        </div>
        <div class="infos">
            <div>
                <h4>Adresse</h4>
                <p>Adresse: Dakar plateau</p>
                <p>Age: 25 ans</p>
                <p>Niveau d'étude:Licence 3</p>
            </div>
            <div>
                <h4>Contact</h4>
                <p>{{ $user->telephone}}</p>
                <p>{{ $user->email}}</p>
            </div>
            </div>
        
            <h2>Status:{{ $data->status}}</h2>
            <h3>Biographie</h3>
            <p> {{ $data->biographie}}</p>
            <h3>Motivation</h3>
            <p>{{ $data->motivation}}</p>
       
    </div>
    </body>
</html>