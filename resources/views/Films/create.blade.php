@extends('layouts.app')

   
@section('contenu')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="../app.css">
    <title>Netflix - Creation de Film</title>
</head>
<body>
    <form method="post" action="{{ route('films.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container-fluid">

        <div class="row form-group" id="input_groupe">

            <div class="col-3"></div>

            <div class="col-6">

                <div id="input_div">
                    <span></span>
                    <h5>Ajout d'un Film</h5>
                </div>

                <div id="input_div">
                    <p id="inputLabel">Titre du film</p>
                    <input type="text" id="inputAdmin" placeholder="Titre du film" name="titre">
                </div>

                <div id="input_div">
                    <p id="inputLabel">Catégorie</p>
                    <input type="text" id="inputAdmin" placeholder="Catégorie" name="categorie">
                </div>
                
                <div id="input_div">
                    <p id="inputLabel">Résumé</p>
                    <textarea type="text" id="inputAdmin" placeholder="Résumé du film" name="resume" rows="4" cols="50"></textarea>
                </div>
                
                <div id="input_div">
                    <p id="inputLabel">Pochette</p>
                    <input type="file" id="inputAdmin" name="pochette">
                </div>
                
                <div id="input_div">
                    <p id="inputLabel">Réalisateur</p>
                    
                    <select id="inputAdmin" name="personne_id">
                        <option value="" selected>Veuillez choisir un réalisateur</option>
                        @foreach($realisateurs as $realisateur)
                        <option value="{{ $realisateur->id }}">{{ $realisateur->nom }}</option>
                        @endforeach 
                    </select>
                </div>
                
                <div id="input_div">
                    <p id="inputLabel">Durée du film</p>
                    <input type="number" id="inputAdmin" placeholder="Durée du film" name="duree">
                </div>

                <div id="input_div">
                    <p id="inputLabel">Année de sortie</p>
                    <input type="text" id="inputAdmin" placeholder="Année de sortie" name="annee">
                </div>
                
                <div id="input_div">
                    <p id="inputLabel">Rating</p>
                    <input type="text" id="inputAdmin" placeholder="Rating" name="rating">
                </div>

                <div id="input_div">
                    <span></span>
                    <button type="submit" id="inputAdminEnregistrer">Enregistrer</button>
                </div>
            </div>

            <div class="col-3"></div>

        </div>

    </div>
        
    </form>

    <div id="show_footer_style">
        @endsection
    </div>
</body>
</html>
