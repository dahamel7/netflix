@extends('layouts.app')

   
@section('contenu')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix - Administration</title>
</head>
@auth
<body>
    <form method="POST" action="{{route('films.storeRealisateur')}}">
        @csrf
    <div class="container-fluid">

        <div class="row form-group" id="input_groupe">

            <div class="col-2"></div>

            <div class="col-8">

                <div id="input_div">
                    <span></span>
                    <a href="{{route('films.create')}}" id="liens">Ajout d'un film</a>
                </div>

                <div id="input_div">
                    <span></span>
                    <a href="{{route('personnes.create')}}" id="liens">Ajout d'une personne</a>
                </div>

                <div id="input_div">
                    <span></span>
                    <a href="{{route('usagers.index')}}" id="liens">Voir la liste des Usagers</a>
                </div>

                <div id="input_div">
                    <span></span>
                    <p>Ajouter des relations entre les films et les personnes.</p>
                </div>
                <div id="input_div">
                    <span></span>
                    <select id="inputAdmin" name="film_id">
                        <option value="" selected>Veuillez choisir un film</option>
                        @foreach($films as $film)
                        <option value="{{ $film->id }}">{{ $film->titre }}</option>
                        @endforeach 
                    </select>
                </div>
                    
                <div id="input_div">
                    <span></span>
                    <select id="inputAdmin" name="acteur_id">
                        <option value="" selected>Veuillez choisir un acteur</option>
                        @foreach($acteurs as $personne)
                        <option value="{{ $personne->id }}">{{ $personne->nom }}</option>
                        @endforeach 
                    </select>
                </div>

                <div id="input_div">
                    <span></span>
                    <button type="submit" id="inputAdminEnregistrer">Joindre</button>
                </div>
            </div>

            <div class="col-2"></div>

        </div>
    </div>
    </form>

</body>
@endauth
</html>

@endsection