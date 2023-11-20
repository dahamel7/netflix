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
    <form method="post" action="{{ route('films.store') }}">
    @csrf
    <div class="container-fluid">

        <div class="row form-group" id="input_groupe">

            <div class="col-3"></div>

            <div class="col-6">
                <div id="input_div">
                    <span></span>
                    <h4>Ajout d'un Film</h4>
                </div>

                <div id="input_div">
                    <label for="titre" id="inputLabel_films">Titre du film</label>
                    <input type="text" id="inputAdmin" placeholder="Titre du film" name="titre">
                </div>

                <div id="input_div">
                    <label for="categorie" id="inputLabel_films">Catégorie</label>
                    <input type="text" id="inputAdmin" placeholder="Catégorie" name="categorie">
                </div>
                
                <div id="input_div">
                    <label for="resume" id="inputLabel_films">Résumé</label>
                    <textarea type="text" id="inputAdmin" placeholder="Résumé du film" name="resume" rows="4" cols="50"></textarea>
                </div>
                
                <div id="input_div">
                    <label for="pochette" id="inputLabel_films">Pochette</label>
                    <input type="url" id="inputAdmin" placeholder="URL de l'affiche" name="pochette">
                </div>
                
                <div id="input_div">
                    <label for="realisateur" id="inputLabel_films">Réalisateur</label>
                    
                    <select id="inputAdmin" name="personne_id">
                        <option value="" selected>Veuillez choisir un réalisateur</option>
                        @foreach($personnes as $personne)
                        <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                        @endforeach 
                    </select>
                </div>
                
                <div id="input_div">
                    <label for="duree" id="inputLabel_films">Durée du film</label>
                    <input type="number" id="inputAdmin" placeholder="Durée du film" name="duree">
                </div>

                <div id="input_div">
                    <label for="annee" id="inputLabel_films">Année de sortie</label>
                    <input type="text" id="inputAdmin" placeholder="Année de sortie" name="annee">
                </div>
                
                <div id="input_div">
                    <label for="rating" id="inputLabel_films">Rating</label>
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
