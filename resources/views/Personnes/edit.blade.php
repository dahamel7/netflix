<style>
    .wrapper{
        background-color: rgb(15 15 15/.85);
        
    }
    body {
        background-image: url("{{ asset('img/personnes/'. $personne->photo)}}");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
</style>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" style="text/css" href="../../app.css">
    <title>Netflix - Modification de {{$personne->nom}}</title>
</head>
@extends('layouts.app')

   
@section('contenu')

@if (isset($personne))
           
<section class="main-container">
            <div class="location" id="home">
                <div id="div_box_film_edit">
                    <span></span>
                    <div id="div_details">
<form method="post" action="{{ route('personnes.update',[$personne]) }}"  enctype="multipart/form-data">
@csrf
@method('PATCH')
  


<div class="container-fluid">

<div class="row form-group" id="input_groupe">

    <div class="col-3"></div>

    <div class="col-6">

       <div id="input_div">
          <span></span>
    
       </div>


       <div id="input_div">
          <label for="nom" id="inputLabel">Nom de la personne</label>
          <input type="text" id="inputAdmin" placeholder="Nom de la personne" name="nom" value="<?php echo $personne->nom; ?>">
       </div>

       <div id="input_div">
          <label for="dateNaissance" id="inputLabel">Date de naissance de la personne</label>
          <input type="text" id="inputAdmin" placeholder="Date de naissance de la personne" name="dateNaissance" value="<?php echo $personne->dateNaissance; ?>">
       </div>

       <div id="input_div">
          <label for="lieuNaissance" id="inputLabel">Lieu de naissance de la personne</label>
          <input type="text" id="inputAdmin" placeholder="Lieu de naissance de la personne" name="lieuNaissance" value="<?php echo $personne->lieuNaissance; ?>">
       </div>

       <div id="input_div">
          <label for="type" id="inputLabel">Type de personne</label>
          <select id="inputAdmin" name="type" value="<?php echo $personne->type; ?>">
             <option value="" selected>Veuillez choisir un type</option>
             <option value="acteur">Acteur</option>
             <option value="realisateur">Réalisateur</option>
             <option value="producteur">Producteur</option>
          </select>
       </div>
       
       <div id="input_div">
          <label for="photo" id="inputLabel">Photo de la personne</label>
          <input type="file" id="inputAdmin" placeholder="Photo" name="photo" value="<?php echo $personne->photo; ?>">
       </div>

       <div id="input_div">
          <span></span>
          <button type="submit" id="inputAdminEnregistrer">Enregistrer</button>
          <form method="POST" action="{{route('personnes.destroy', [$personne->id]) }}">
         @csrf
         @method('DELETE')
         <button type="submit" >Supprimer</button>
         </form>
       </div>

       </div>

 <div class="col-3"></div>

</div>

</div>




</form>
</div>
</div>
</div>
   </section>


 @else
            <h1>La personne n'existe pas</h1>
        @endif

@endsection