
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
@extends('layouts.app')

   
@section('contenu')

<div class="container-fluid">
   <div class="row">
      <div class="col-3"></div>
      <div class="col-6">
         <form method="post" action="{{ route('personnes.store') }}">
         @csrf
            <div id="input_div">
               <span></span>
               <h4>Ajout d'une Personne</h4>
            </div>
            <div id="input_div">
               <label for="nom">Nom</label>
               <input type="text" id="inputAdmin" placeholder="Nom de la personne" name="nom">
            </div>
            <div id="input_div">
               <label for="dateNaissance">Date de naissance</label>
               <input type="text" id="inputAdmin" placeholder="Date de naissance de la personne" name="dateNaissance">
            </div>
            <div id="input_div">
               <label for="lieuNaissance">Lieu de naissance</label>
               <input type="text" id="inputAdmin" placeholder="Lieu de naissance de la personne" name="lieuNaissance">
            </div>
            <div id="input_div">
               <label for="type">Type</label>
               <input type="text" id="inputAdmin" placeholder="type" name="type">
            </div>
            <div id="input_div">
               <label for="photo">Photo</label>
               <input type="text" id="inputAdmin" placeholder="photo de la personne" name="photo">
            </div>

            <div id="input_div">
               <span></span>
               <button type="submit" id="inputAdminEnregistrer">Enregistrer</button>
            </div>
         </form>
      </div>
      <div class="col-3"></div>
   </div>
</div>


@endsection