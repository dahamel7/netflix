
@extends('layouts.app')

   
@section('contenu')

@if (isset($personne))
<form method="post" action="{{ route('personnes.update',[$personne]) }}">
@csrf
@method('PATCH')
   <div class="form-group">
      <label for="nom">Nom de la personne</label>
       <input type="text" class="form-control" id="nom" placeholder="Nom de la personne" value="<?php echo $personne->nom; ?>" name="nom">
   </div>
   <div class="form-group">
      <label for="dateNaissance">Date de naissance de la personne</label>
       <input type="text" class="form-control" id="dateNaissance" placeholder="Date de naissance de la personne" value="<?php echo $personne->dateNaissance; ?>" name="dateNaissance">
   </div>
   <div class="form-group">
      <label for="lieuNaissance">Lieu de naissance de la personne</label>
       <input type="text" class="form-control" id="lieuNaissance" placeholder="Lieu de naissance de la personne" value="<?php echo $personne->lieuNaissance; ?>" name="lieuNaissance">
   </div>
   <div class="form-group">
      <label for="type">type de personne</label>
       <input type="text" class="form-control" id="type" placeholder="type" value="<?php echo $personne->type; ?>" name="type">
   </div>
   <div class="form-group">
      <label for="photo">photo de la personne</label>
       <input type="text" class="form-control" id="photo" placeholder="photo de la personne" value="<?php echo $personne->photo; ?>" name="photo">
   </div>

<button type="submit" class="btn btn-primary">Enregistrer</button>
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