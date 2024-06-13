<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <title>Formulaire de Candidature</title>
</head>
<body>
    
    <form action="candidature" method="POST" class="container" enctype="multipart/form-data">
        @csrf
        @auth 
            <h1>Formulaire de Candidature</h1>


        @endauth
    <h1>Formulaire de Candidature</h1>
    <!-- <div class="d-inline-flex p-2">
        <div class="mb-3 row-col-12" >
            <label for="situation actuelle" class="form-label">Situation Actuelle</label>
            <select name="situation actuelle" id="" class="col-12">
                <option value=""></option>
                
            </select>
        </div>
        <div class="mb-3 row-col-12">
            <label for="exampleFormControlInput1" class="form-label">Niveau d'étude</label>
            <select name="niveau d'etude" id="" class="col-12">
                <option value=""></option>
            </select>
           
        </div>
        </div> -->
        <div class="mb-3">
            <input type="hidden" class="form-control" id="exampleFormControlInput1" name="formation_id" value="1">
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

            <button type="submit" class="btn btn-danger">Envoyer</button>
</form>
</body>
</html>