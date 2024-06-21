<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    
    <link rel="stylesheet" href="{{ asset('css/candidature.css') }}">

    <title>Formulaire de Candidature</title>
</head>
<body>

    <h3 id="titre1">Formulaire de Candidature</h3>
    <p id="p1">{{ $formation->libelle }}</p>
    
    <form action="{{route('candidature.traitement')}}" method="POST" class="container" enctype="multipart/form-data">
        @csrf
       
    <h1>Formulaire de Candidature</h1>
    
        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="formation_id" value="{{ $formation->id }}">
        </div> 
        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="etat">
        </div> 
        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="user_id">
        </div> 
        <div class="mb-3">
            <label for="biographie" class="form-label">Biographie</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="biographie"></textarea>
        </div>
        <div class="mb-3">
            <label for="motivation" class="form-label">Motivation</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="motivation"></textarea>
        </div>
         <div class="mb-3">
            <label for="cv" class="form-label">CV</label>
            <input type="file" class="form-control" id="exampleFormControlInput1" name="cv">
        </div> 

            <button type="submit" id="bouton">Envoyer</button>
</form>
</body>
</html>