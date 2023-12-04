
@extends('layouts.app')

   
@section('contenu')

@if (isset($personne))
<form method="post" action="{{ route('personnes.update',[$personne]) }}"  enctype="multipart/form-data">
@csrf
@method('PATCH')
  


<div class="container-fluid">

<div class="row form-group" id="input_groupe">

    <div class="col-3"></div>

    <div class="col-6">

       <div id="input_div">
          <span></span>
          <h5>Ajout d'une Personne</h5>
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
       </div>

       </div>

 <div class="col-3"></div>

</div>

</div>




</form>

<form method="POST" action="{{route('personnes.destroy', [$personne->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>

 @else
            <h1>La personne n'existe pas</h1>
        @endif

@endsection